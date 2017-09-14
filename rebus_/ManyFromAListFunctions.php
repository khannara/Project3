<?php

class ManyFromAListFunctions
{
    private $wordProcessor;
    private $foundWords;

    public function __construct($firstValidWordInArray)
    {
        $this->wordProcessor = new wordProcessor(" ", "telugu");
        $this->foundWords = array();
        array_push($this->foundWords, $firstValidWordInArray);
    }

    function getCharacterIndexInWord($char, $word)
    {
        var_dump($char,$word);
//        echo "<br> ------------------ char: ".$char." word: ".$word;
        $this->wordProcessor->setWord($word, "telugu");
        $wordContainsChar = $this->wordProcessor->containsChar($char);
        echo "<br>WORD CONTAINS: ".$wordContainsChar."<br>";
        if ($wordContainsChar) {
            echo "in if of word contians<br>";
            // Save this word to array
            array_push($this->foundWords, $word);

            $wordArray = str_split($word);
            for ($character = 0; $character <= strlen($word); $character++) {
                if ($char == $wordArray[$character])
                    return $character;
            }
        }

        return null;
    }

    function isWordAvailable($word)
    {
        foreach($this->foundWords as $foundWord){
            if ($word == $foundWord){
                return false;
            }
        }
        return true;
    }
}