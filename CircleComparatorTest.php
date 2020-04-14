<?php

include "CircleComparator.php";

$circleOne = new CircleComparator('circleOne', 8);
$circleTwo = new CircleComparator('circleTwo', 2);
$circleThree = new CircleComparator('circleThree', 4);

$test = $circleOne->compareTo($circleTwo);
echo ('Comparator: <br>');
echo $test;