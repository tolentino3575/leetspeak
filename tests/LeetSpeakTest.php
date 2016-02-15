<?php
    require_once "src/LeetSpeak.php";

    class LeetSpeakTest extends PHPUnit_Framework_TestCase
    {
        function test_outputWord()
        {
            //arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "a";

            //act
            $result = $test_LeetSpeak->toLeetSpeak($input);

            //assert
            $this->assertEquals("a", $result);

        }

        function test_outputWords()
        {
            //arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "a dummy";

            //act
            $result = $test_LeetSpeak->toLeetSpeak($input);

            //assert
            $this->assertEquals("a dummy", $result);

        }

        function test_outputE()
        {
            //arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "cheap";

            //act
            $result = $test_LeetSpeak->toLeetSpeak($input);

            //assert
            $this->assertEquals("ch3ap", $result);

        }

        function test_outputO()
        {
            //arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "poop";

            //act
            $result = $test_LeetSpeak->toLeetSpeak($input);

            //assert
            $this->assertEquals("p00p", $result);

        }
    }



?>
