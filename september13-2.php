<?php
$marks = 40;

if ($marks>=60)
{
	$grade = "first division";
}
    else is($marks>=45)
{
	$grade = "second division";
}
	$grade = "third division";
}
else
{
	$grade = "fail";
}

echo "student grade: $grade";
?>