<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeSickAssArray()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2], $result);
        }

        function test_forReplaceFive()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2,"ping",4,"pong"], $result);
        }

        function test_forReplaceThree()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2,"ping"], $result);
        }

        function test_forReplaceFifteen()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 16;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping pong",16], $result);
        }
    }

 ?>
