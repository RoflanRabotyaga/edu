<?php
class Text{
    private $paragraph;

    //$L is the average number of letters per 100 words in the text
    private $L;
    //$S is the average number of sentences per 100 words in the text.
    private $S;
    function __construct($text){
        $this->paragraph = $text;
    }
    public function calculateReadability():string{
        $this->L = $this->calculateLetters() * (100 / str_word_count($this->paragraph));
        $this->S = $this->calculateSentences() * (100 / str_word_count($this->paragraph));
        $index = 0.0588 * $this->L - 0.296 * $this->S - 15.8;
        switch (1){
            case $index < 1: return 'Before Grade 1 <br/>'; break;
            case $index >= 1 && $index < 16: return 'Grade ' . round($index) . '<br/>'; break;
            case $index >= 16: return 'Grade 16+' . '<br/>'; break;
            default: return 'Error';
        }
    }
    private function calculateLetters():int{
        $letters = 0;
        foreach(str_split($this->paragraph) as $char)
            if(IntlChar::isalpha($char))
                $letters++;
        return $letters;
    }
    private function calculateSentences():int{
        $sentences = 0;
        foreach(str_split($this->paragraph) as $char)
            if($char == '.' || $char == '!' || $char == '?' || $char == ';')
                $sentences++;
        return $sentences;
    }
}