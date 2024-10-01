<?php
class Cypher{
    private $text;
    private $key;
    public $result = '';
    function __construct($text, $key, $prompt){
        try{
            $this->key = $key % 26;
            $this->text = $text;
            if ($prompt == 'encrypt')
                $this->translate(true);
            elseif ($prompt == 'decrypt')
                $this->translate(false);
            else
                throw new Exception('Unexpected prompt');
        }catch (Exception $e){
            $this->result = 'Error: ' . $e->getMessage() . "<br/>";
        }
    }

    private function translate(bool $enc){
        $letters = str_split($this->text);
        foreach($letters as &$letter){
            if(IntlChar::isalpha($letter)){
                $ascii_divider = 122;
                if(IntlChar::isupper($letter))
                    $ascii_divider = 90;
                if($enc)
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
}