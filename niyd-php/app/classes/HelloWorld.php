<?php

namespace App\classes;

class HelloWorld
{
    public $message, $firstNumbe, $secondnumber, $thirdNumber;
    
    public function __construct()
    {
        $this->message = "Hello World";
        $this->firstNumber = 10;
        $this->secondNumber = 10;
        
    }

    public function index()
    {
        // echo "<br/>";
        // echo $this->firstName + $this->secondName; //30
        // echo "<br/>";
        // echo $this->firstName - $this->secondName; //-10
        // echo "<br/>";
        // echo $this->firstName * $this->secondName;  //200
        // echo "<br/>";
        // echo $this->firstName / $this->secondName;  //0.5
        // echo "<br/>";
        // echo $this->firstName % $this->secondName;  //10
        
        // echo '<br/>';
        // echo $this->firstNumber++;
        // echo '<br/>';
        // echo $this->firstNumber;

        // $this->firstNumber = 30;
        // echo $this->firstNumber;

        // echo "<br/>";
        // echo $this->firstNumber += $this->secondNumber; //
        // echo "<br/>";
        // echo $this->firstNumber -= $this->secondNumber; //
        // echo "<br/>";
        // echo $this->firstNumber *= $this->secondNumber; //
        // echo "<br/>";
        // echo $this->firstNumber /= $this->secondNumber; //
        // echo "<br/>";
        // echo $this->firstNumber %= $this->secondNumber; //
        // echo "<br/>";
        // echo $this->firstNumber .= $this->secondNumber; //

        // $this->firstNumber = 10;
        // $this->secondNumber = '10';

        // echo $this->firstNumber === $this->secondNumber;

        $this->firstNumber = 10;
        $this->secondNumber = 20;
        $this->thirdNumber = false;
        // echo !$this->thirdNumber;
        // echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);
        // echo '<br/>=====<br/>';
        // echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
        // echo '<br/>=====<br/>';
        // echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
        // echo '<br/>=====<br/>';
        // echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);
        // echo '<br/>=====<br/>';


        /*
             === Opeartor
            Arithmetic Operator: +, -, *, /, %, ++, --, (-)
            Assignment Operator: =, +=, -=, *=, /=, %=, .=
            Conditional Operator: >, >=, <, <=, ==, !=, ===, !==
            Logical Operator: &&, ||, !

            === Statement
            Single Line
            Conditional
                IF, IF ELSE, I ELSE IF, SWITCH
            Repeated
                FOR, WHILE, DO WHILE, FOREACH
        */
            $this->firstNumber = 10;
            $this->secondNumber = 20;
            $this->thirdNumber = $this->firstNumber + $this->secondNumber;

            switch ($this->firstNumber)
            {
                case 10:
                    echo "Hello World";
                    break;
                case 20:
                    echo "Hello Laravel";
                    break;
                case 30:
                    echo "Hello HTML";
                default:
                    echo "Hello NIYD";
            }

            // if($this->firstNumber > $this->secondNumber)
            // {
            //     echo "Hello World";
            // }
            // elseif($this->secondNumber < $this->thirdNumber)
            // {
            //     echo "Hello Bangladesh";
            // }
            // elseif($this->thirdNumber > $this->firstNumber)
            // {
            //     echo "Hello Savar";
            // }
            // else
            // {
            //     echo "Hello NIYD";
            // }

            // if($this->firstNumber > $this->secondNumber)
            // {
            //     echo "Hello World";
            // }
            // else
            // {
            //     echo "Hello NIYD";
            // }

        
    }
}