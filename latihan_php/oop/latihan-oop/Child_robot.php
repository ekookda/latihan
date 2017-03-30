<?php
include_once 'Robot.php';

class Child_robot extends Robot
{

}

$robot = new Child_robot();
$robot->set_suara('anak  robot suaranya tut..tuuut...');
echo $robot->get_suara();