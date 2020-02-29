<?php
class Calculator

{

    private $first_number;
    private $second_number;
    private $operator;

    public function __construct(string $operator, int $first_number, int $second_number)
    {
        $this->operator = $operator;
        $this->first_number = $first_number;
        $this->second_number = $second_number;
    }


    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->first_number + $this->second_number;
                return $result;
                break;
            case 'sub':
                $result = $this->first_number - $this->second_number;
                return $result;
                break;
            case 'div':
                if ($this->second_number !== 0) {
                    $result = $this->first_number / $this->second_number;
                    return $result;
                } else {
                    echo "You are trying to divide with zero, please enter another number";
                }

                break;
            case 'mul':
                $result = $this->first_number * $this->second_number;
                return $result;
                break;

            default:
                echo "Error!";
                break;
        }
    }
}
