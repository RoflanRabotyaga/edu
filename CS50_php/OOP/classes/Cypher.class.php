<?php
class Cypher
{
    private $text;
    private $key;
    private $encryption = true;
    private $cypherType;
    public $result = '';

    function __construct($text, $key, $query, $cypher)
    {
        try {
            $this->text = $text;
            $this->key = $key;
            $this->cypherType = $cypher;
            if ($query == 'encrypt')
                $this->encryption = true;
            elseif ($query == 'decrypt')
                $this->encryption = false;
            else
                throw new Exception('Unexpected query, only "encrypt" or "decrypt" supported');
            switch ($this->cypherType) {
                case 'caesar' :
                    $this->caesarCypher();
                    break;
                case 'substitution' :
                    $this->substitutionCypher();
                    break;
                default :
                    throw new Exception('Unexpected cypher type');
            }
        } catch (Exception $e) {
            $this->result = 'Error: ' . $e->getMessage() . "<br/>";
        }
    }

    private function caesarCypher()
    {
        $letters = str_split($this->text);
        foreach ($letters as &$letter) {
            if (IntlChar::isalpha($letter)) {
                $ascii_divider = 122;
                if (IntlChar::isupper($letter))
                    $ascii_divider = 90;
                if ($this->encryption)
                    if ((ord($letter) + $this->key) > $ascii_divider)
                        $letter = chr(((ord($letter) + $this->key) % $ascii_divider) + $ascii_divider - 26);
                    else
                        $letter = chr((ord($letter) + $this->key));
                else
                    if ((ord($letter) - $this->key) < $ascii_divider - 26)
                        $letter = chr((ord($letter) - $this->key) + 26);
                    else
                        $letter = chr((ord($letter) - $this->key));
            }
        }
        $this->result = implode($letters);
    }

    private function substitutionCypher()
    {
        try {
            $key_letters = str_split(strtolower($this->key));
            if ($this->substitutionWrongKey($key_letters))
                throw new Exception($this->substitutionWrongKey($key_letters));
            $letters = str_split($this->text);
            foreach ($letters as &$letter) {
                if (IntlChar::isalpha($letter)) {
                    $ascii_start = 96;
                    if (IntlChar::isupper($letter))
                        $ascii_start = 64;
                    if ($this->encryption) {
                        $letter = chr(ord($key_letters[ord($letter) - ($ascii_start) - 1]) - 96 + ($ascii_start)) ;
                    } else {
                        foreach ($key_letters as $key => $value)
                            if(chr(96 + (ord($letter) - $ascii_start)) == $value)
                                $letter = chr($ascii_start + $key + 1);
                    }
                }
            }
            $this->result = implode($letters);
        } catch (Exception $e) {
            $this->result = 'Error: ' . $e->getMessage() . "<br/>";
        }
    }

    private function substitutionWrongKey($key){
        if (count($key) != 26)
            return 'Key must contain 26 characters';
        $n = 0;
        foreach ($key as $key_letter) {
            if (!IntlChar::isalpha($key_letter))
                return 'Key must only contain alphabetical characters';
            foreach ($key as $value) {
                if ($key_letter == $value)
                    $n++;
            }
            if ($n > 1)
                return 'Key must not contain repeated characters';
            $n = 0;
        }
        return false;
    }
}