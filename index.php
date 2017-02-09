<?php

//LOGIC

//Task 31
if (!empty($_POST)) {
    $str_31 = serialize($_POST);
}

//Task 33
$days_in_year = 365;
$hours_in_day = 24;
$seconds_in_hour = 3600;

$seconds_in_year = $seconds_in_hour * $hours_in_day * $days_in_year;
$remainder_of_division = $seconds_in_year % 2;

//Task 35
//Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации
$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;

$num12345 = $num1 . $num2 . $num3 . $num4;
$num12345 .= $num5;

//Task 36
$x = 5;
if ($x % 2 == 0) {
    $result36 = 'true';
} else {
    $result36 = 'false';
}

//Task 37
$y1 = 5;
$y2 = 7;

define('Y3', $y1);
$y1 = $y2;
$y2 = Y3;

//Task 44
$l1 = 1;
$l2 = 5;

if ($l1 > $l2) {
    $result44 = $l1;
} else {
    $result44 = $l2;
}

//Task 45
$m1 = 1;
$m2 = 5;

//Task 46
$j1 = 1;
$j2 = 5;

switch ($j1) {
    case($j1 > $j2):
        $result46 = $j1;
        break;
    default:
        $result46 = $j2;
        break;
}

//Task 47
//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for.
// Простое число - это число которое делится только на себя и на 1

/*
for ($i=1; $i<=100; $i++) {
    if ($i%2 == 0) {
      echo "{$i} <br/>";
    }
}
*/









?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Document</title>
</head>
<body>

<!--VIEW-->

<!--Task 31-->
<h2>Task 31</h2>
<form action="index.php" method="post">
    <input type="text" name="username" placeholder="username"/>
    <input type="email" name="email" placeholder="email"/>
    <input type="text" name="message" placeholder="message"/>
    <input type="submit" value="submit"/>
</form>
<p>Result: <?= !empty($_POST) ? $str_31 : ''?></p>
<hr/>
<!--Task 31-->

<!--Task 33-->
<h2>Task 33</h2>
<p>
    Seconds in year: <?=$seconds_in_year?>
    <br/>
    Remainder of division: <?=$remainder_of_division?>
</p>
<hr/>
<!--Task 33-->

<!--Task 35-->
<h2>Task 35</h2>
String: <?=$num12345?>
<hr/>
<!--Task 35-->

<!--Task 36-->
<h2>Task 36</h2>
<p>
    1) false && true || false && true || !false && true =  false || false || true = 0 + 0 + 1 = 1 = true;
    <br/>
    2) <?=$result36?>
</p>
<hr/>
<!--Task 36-->

<!--Task 37-->
<h2>Task 37</h2>
<?=$y1?>
<br/>
<?=$y2?>
<hr/>
<!--Task 37-->

<!--Task 44-->
<h2>Task 44</h2>
<?=$result44?>
<hr/>
<!--Task 44-->

<!--Task 45-->
<h2>Task 45</h2>
<?=($m1 > $m2) ? $m1 : $m2?>
<hr/>
<!--Task 45-->

<!--Task 46-->
<h2>Task 46</h2>
<?=$result46?>
<hr/>
<!--Task 46-->

<!--Task 47-->
<h2>Task 47</h2>
<?php

for($i = 2; $i <= 100; $i++) {

    $marker = true;

    for($k = 2; $k < $i; $k++) {
        if($i % $k == 0) {
            $marker = false;
            break;
        }
    }

    if($marker == true) {
        echo $i . " ";
    }
}

?>

<hr/>
<!--Task 47-->



<!--Task 48-->
<h2>Task 48</h2>
<?php

$o = 2;
while($o <= 100) {

    $markerNew = true;

    $p = 2;
    while($p < $o) {
        if($o % $p == 0) {
            $markerNew = false;
            break;
        }
        $p++;
    }

    if($markerNew == true) {
        echo $o . " ";
    }

    $o++;
}

?>

<hr/>
<!--Task 48-->

<!--Task 49-->
<h2>Task 49</h2>
<?php

    $numbs = array(1,2,3,4,5,6,7,8,9,10);

    foreach ($numbs as $n) {
        if ($n%3 == 0) {
            echo $n . " ";
        }
    }

?>
<!--Task 49-->

<!--Task 50-->
<h2>Task 50</h2>




<? for($i = 2; $i <= 100; $i++): ?>

    <?php
    $marker = true;
    ?>

    <? for($k = 2; $k < $i; $k++): ?>
        <?php
        if($i % $k == 0) {
            $marker = false;
            break;
        }
        ?>
    <? endfor; ?>

    <?php
    if($marker == true) {
        echo $i . " ";
    }
    ?>
<? endfor; ?>
<br/>



<?php
$o = 2;
?>

<? while($o <= 100) : ?>

    <?php
    $markerNew = true;
    $p = 2;
    ?>

    <? while($p < $o) : ?>
        <?php
        if($o % $p == 0) {
            $markerNew = false;
            break;
        }
        $p++;
        ?>
    <? endwhile; ?>

    <?php
    if($markerNew == true) {
        echo $o . " ";
    }
    $o++;
    ?>
<? endwhile; ?>

<br/>


<?php
$numbs = array(1,2,3,4,5,6,7,8,9,10);
?>

<? foreach ($numbs as $n) : ?>
    <?php
    if ($n%3 == 0) {
        echo $n . " ";
    }
    ?>
<? endforeach; ?>
<hr/>
<!--Task 50-->


<!--Task 51-->
<h2>Task 51</h2>
<?php

for($i = 200; $i <= 400; $i++) {

    $marker = true;

    for($k = 2; $k < $i; $k++) {
        if($i % $k == 0) {
            $marker = false;
            break;
        }
    }

    if($marker == true) {
        echo $i . " ";
        break;
    }

}

?>

<hr/>
<!--Task 51-->


<!--Task 52-->
<h2>Task 52</h2>
<pre>
    function test($x, $y) {
        return $y == 0 ? false : $x / $y;
    }
</pre>
<!--Task 52-->



</body>
</html>
