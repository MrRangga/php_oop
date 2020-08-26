<?php

class Student {
	
	public $name = 'firman';

	public $attendence = true;

	public $totalMarks = 89;	
}

$student = new Student;

echo $student->attendence;