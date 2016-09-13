<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareAnagrams()
        {
            //Arrange
            $testAnagram = new Anagram;
            $input1 = "beard";
            $input2 = "bread";

            //Act
            $result = $testAnagram->compareAnagrams($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);

        }

        function test_findAnagrams()
        {
            //arrange
            $testAnagram = new Anagram;
            $input1 = "beard";
            $input2 =array("bread", "hello");

            //Act
            $result = $testAnagram->findAnagrams($input1, $input2);

            //assert
            $this->assertEquals("bread", $result);
        }
    }

?>
