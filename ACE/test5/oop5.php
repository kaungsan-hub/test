<?php
// sql and oop

$m = new mysqli();
$m->connect("localhost", "root", "", "ACE");
$result=$m->query("SELECT * FROM `student`");
$row = $result->fetch_object();

// echo $row['sno']
echo $row->sno.", ".$row->sname.", ".$row->age.", ".$row->gender.", ".$row->mark;
