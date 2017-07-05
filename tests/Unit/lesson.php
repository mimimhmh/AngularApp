<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/27
 * Time: 16:39
 */

function isOfDrivingAge($age) {

    return $age >= 16;
}

function notifyUserOfDriverStatus($name, $age) {

    $message = isOfDrivingAge($age) ? 'You may drive.' : 'You may not drive';

    return "{$name}: {$message}";
}

$status = notifyUserOfDriverStatus('John Doe', 17);