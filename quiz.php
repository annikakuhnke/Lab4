<?php
	$q1answer=$_POST["question-1"];
	$q2answer=$_POST["question-2"];
	$q3answer=$_POST["question-3"];
	$q4answer=$_POST["question-4"];
	$q5answer=$_POST["question-5"];
	$count=0;

	echo "Question 1: What question number is this?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q1answer . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 1<br><br>";
	echo "Question 2: What question number is this?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q2answer . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 2<br><br>";
	echo "Question 3: What question number is this?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q3answer . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 3<br><br>";
	echo "Question 4: What question number is this?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q4answer . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 4<br><br>";
	echo "Qusetion 5: What question number is this?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered: " . $q5answer . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 5<br><br>";

	if($q1answer=="1")
	{
		$count++;
	}
	if($q2answer=="2")
	{
		$count++;
	}
	if($q3answer=="3")
	{
		$count++;
	}
	if($q4answer=="4")
	{
		$count++;
	}
	if($q5answer=="5")
	{
		$count++;
	}
	echo "You got " . $count . " out of 5 question correct. That percentage is ";
	if($count==0)
	{
		echo "0%.";
	}
	else if($count==1)
        {
                echo "20%.";
        }
	else if($count==2)
        {
                echo "40%.";
        }
	else if($count==3)
        {
                echo "60%.";
        }
	else if($count==4)
        {
                echo "80%.";
        }
	else if($count==5)
        {
                echo "100%.";
        }
?>
