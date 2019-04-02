<?php
/**
 * Created by PhpStorm.
 * User: InMySoul
 * Date: 02.04.2019
 * Time: 13:06
 */

class Worker
{
    public $salary;
    public $age;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * Worker constructor.
     * @param $salary
     * @param $age
     */
    public function __construct($salary, $age)
    {
        $this->salary = $salary;
        $this->age = $age;
    }

};

$worker = new Worker($age, $salary);
$worker->name = 'Дима';
$worker->age = 25;
$worker->salary = 1000;

echo $worker->salary*$worker->age;
