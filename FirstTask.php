<?php
/**
 * Created by PhpStorm.
 * User: InMySoul
 * Date: 02.04.2019
 * Time: 9:27
 */

class Worker
{
    public $salary;
    public $age;
    public $name;



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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    };


$worker1 = new Worker();
$worker1 ->name = 'Иван';
$worker1 ->age = 25;
$worker1 ->salary = 1000;

$worker2 = new Worker();
$worker2 ->name = 'Вася';
$worker2 ->age = 26;
$worker2 ->salary = 2000;

echo $worker1->salary + $worker2->salary. '<br>';
echo $worker1->age + $worker2->age;

