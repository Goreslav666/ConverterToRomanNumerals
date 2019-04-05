<?php
/**
 * Created by PhpStorm.
 * User: lubos.vlcek
 * Date: 2019-04-04
 * Time: 17:08
 */

class Convertor extends \PHPUnit\Framework\TestCase
{

    /**
     *
     */
    public function testConvertsNumbersIntoRoman(){
        $convertor = new \IW\Controller\Convertor(999);
        $this->assertEquals('CMXCIX', $convertor->getRoman());
    }

}
