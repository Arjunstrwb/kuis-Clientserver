<?php
include_once(__DIR__."/lib/Employees.php");
include_once(__DIR__."/lib/format_data.php");
header("Access-Control-Allow-Origin:*");

$employees = new Employees();
$employees->setValue('129FH2','Arjun','satrio','arjuna@gmail.com','085256950852','2020-12-01','QC1','8000000','2000000','ID13','TER21');
// echo $employees->npm;
$result=$employees->delete();
$format= new format_data();
// print_r($result);
echo $format->as_JSON($result);
// $data=$employees->getAll();