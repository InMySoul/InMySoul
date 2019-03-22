<?php
/**
 * Created by PhpStorm.
 * User: InMySoul
 * Date: 21.03.2019
 * Time: 10:07
 */
$result=0;
$arr=[1,2,3,4,5];
foreach($arr as $item)
    {
        $result += $item * $item;

    }
echo  $result;