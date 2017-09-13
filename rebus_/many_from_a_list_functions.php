<?php

class ManyFromAListFunctions
{
    private $wordProcessor;
    private $foundWords;

    public function __construct()
    {
        $this->wordProcessor = new wordProcessor(" ", "telugu");
        $this->foundWords = array();
    }

    function getCharacterIndexInWord($char, $word)
    {
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
        for ($i = 0; $i <= count($this->foundWords); $i++) {
            if ($word == $this->foundWords[$i])
                return true;
        }

        return false;
    }
}