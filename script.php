<!DOCTYPE html>
<html>
<head>
	<title>PHP Demo</title>
</head>
<body>
	<?php
	//single line comments
	#also a single line comment
	/* multiline
	 comment*/

	 /*
	h:12 hour format
	H:24 hour format
	i:Minutes
	s: seconds
	u:microseconds
	a:lowercase am or pm
	I:Full text for the day
	F: full text for the month
	j:day of the month
	s:suffix
	y:year n 4 digits

	 */

	$studentName=$_POST['studentName'];
	$grade=$_POST['grade'];
	$section=$_POST['section'];
	$teacher=$_POST['teacherName'];

	echo "<h1>Student information </h1>";

	/*echo "student name is ". $studentName ."</br>";
	echo "He is in ". $grade ."</br>";
	echo "He studies in section ". $section ."</br>";
	echo "He is taught by ". $teacher ."</br>";*/
	
	/*$str=<<<EOD
	student name is $studentName and 
	he/she is in $grade grade in section $section
	and he/she is taught by $teacher
	EOD;
	 echo $str;
	 */
	?>

</body>
</html>