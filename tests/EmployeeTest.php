<?php
/**
 * @file Employee.php
 * @author Babas
 * @version 1.1
 */
use PHPUnit\Framework\TestCase;

/**
 * @class Employee Employee.php
 */
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

}