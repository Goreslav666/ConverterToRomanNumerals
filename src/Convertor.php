<?php


namespace IW\Converter;


class Convertor
{

   private $romanNumber;

    /**
     * Convertor constructor.
     * @param $inputNumber
     */

    /**
     * @return mixed
     */
    public function getRomanNumber()
    {
        return $this->romanNumber;
    }

    /**
     * @param mixed $romanNumber
     */
    private function setRomanNumber($romanNumber): void
    {
        $this->romanNumber = $romanNumber;
    }
    /**
     * Convertor constructor.
     * @param $number
     */

    public function toRoman($number)
    {

        $rom = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];
        $returnValue = '';
        while ($number > 0) {
            foreach ($rom as $roman => $int) {
                if ($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        $this->setRomanNumber($returnValue);


    }

}
