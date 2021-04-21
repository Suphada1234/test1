<?php
include "University.php";

use PHPUnit\Framework\TestCase;

class TestUniversity extends TestCase{
    private $university;

    public function setUp():void{
        $this->university = new University;
    }

    public function testGetUni1(){
        $this->assertEquals('มหาวิทยาลัยราชภัฏนครปฐม',$this->university->GetUniversity(1));
    }

    public function testGetUni2(){
        $this->assertEquals('มหาวิทยาลัยรามคําแหง',$this->university->GetUniversity(3));
    }
}