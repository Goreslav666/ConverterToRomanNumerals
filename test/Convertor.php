<?php


class Convertor extends \PHPUnit\Framework\TestCase
{


    /**
     *
     */
    public function testConvertsNumbersIntoRoman(){
        $convertor = new \IW\Converter\Convertor();
        $convertor->toRoman(999);
        $this->assertEquals('CMXCIX', $convertor->getRomanNumber());
    }

    public function testReturnsString(){
        $convertor = new \IW\Converter\Convertor();
        $convertor->toRoman(22);
        $this->assertIsString($convertor->getRomanNumber(),gettype($convertor->getRomanNumber()));
    }
}
