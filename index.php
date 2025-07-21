<?php

use Lucasan\Gs\Core\Database;
use Lucasan\Gs\Models\StudentModel;


require 'vendor/autoload.php';
 
// $student = new StudentModel();
// $student->id = 12162;
// $student->name = "dirk";
// $student->course = "NPA";
// $student->year_level = 1;
// $student->section = "D";
// $student->create();

$student =new StudentModel;
$listofstudents = $student->read();

print_r($listofstudents);


