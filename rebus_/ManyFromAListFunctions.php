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
        echo "char: ".$char." word: ".$word;
        $this->wordProcessor->setWord($word, "telugu");
        $wordContainsChar = $this->wordProcessor->containsChar($char);

        if ($wordContainsChar) {

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
//        echo $word;
        for ($i = 0; $i <= count($this->foundWords); $i++) {
            if ($word == $this->foundWords[0][$i])
                return false;
        }

        return true;
    }
}