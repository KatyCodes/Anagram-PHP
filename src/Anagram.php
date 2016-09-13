<?php
    class Anagram
    {
        function compareAnagrams($inputOne, $inputTwo)
        {
            $wordOne = str_split(strtolower($inputOne));
            $wordTwo = str_split(strtolower($inputTwo));
            sort($wordOne);
            sort($wordTwo);
            if ($wordOne == $wordTwo)
            {
                return true;
            }
        }

        function findAnagrams($inputOne, $inputTwo)
        {
            $wordlist = array();
             foreach ($inputTwo as $word)
             {
                if ($this->compareAnagrams($inputOne, $word))
                {
                    array_push($wordlist, $word);
                }
             }
             return implode(" ", $wordlist);
        }
    }

?>
