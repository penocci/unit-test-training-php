<?php
use PHPUnit\Framework\TestCase;


class EmployeeTest extends TestCase
{

    public function testGetFullName()
    {
        $emp = new Employee('test', 'test', 'tes@mail.com');
        $this->assertEquals('test test', $emp->getFullName());
    }

    public function testGetNetSalary()
    {
        $emp = new Employee('test', 'test', 'tes@mail.com');
        $emp->setGrossMonthlySalary(1000);
        $this->assertEquals(550, $emp->getNetSalary());
    }
    public function GetNetSalary()
    {
       
    }
}