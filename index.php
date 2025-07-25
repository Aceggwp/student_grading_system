<?php

use lucasan\gs\Core\Crud;
use Lucasan\Gs\Models\StudentModel;
use Lucasan\Gs\Core\Database;

require 'vendor/autoload.php';
 
 $student = new StudentModel;
 $student->id = 112;
 $student->name = "dirk sean";
 $student->course = "NPA";
 $student->year_level = 12;
 $student->section = "D";


// $student =new StudentModel;
$listofstudents = $student->read();

//print_r($listofstudents);


//$student->create(112);
//$student->read();
//$student->update(112);
//$student->delete(112);
