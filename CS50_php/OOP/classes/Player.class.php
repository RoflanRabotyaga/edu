<?php
class Player{
    public $word = '';
    public $wordPoints = 0;
    static $points = [
        1, 3, 3, 2, 1, 4, 2, 4, 1, 8, 5, 1, 3, 1, 1, 3, 10, 1, 1, 1, 1, 4, 4, 8, 4, 10
    ];
    static function result($player1, $player2):string{
        $player1->calculate_points();
        $player2->calculate_points();
        if ($player1->wordPoints > $player2->wordPoints)
            return "Player 1 wins!";
        elseif ($player1->wordPoints < $player2->wordPoints)
            return "Player 2 wins!";
        else
            return "Tie!";
    }
    function __construct($word){
        $this->word = $word;
    }
    private function calculate_points(){
        $this->word = str_split($this->word);
        foreach ($this->word as $letter) {
            if(ord($letter) >= 97 && ord($letter) <= 122)
                $this->wordPoints += self::$points[ord($letter) - 97];
        }
    }
}