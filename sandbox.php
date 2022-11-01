<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Sandbox</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheet location -->
    <link rel="stylesheet" href="#">
  </head>
  <body>
    <!-- Javascript location -->
    <script src="#" async defer></script>

    <!-- PHP code -->
    <?php
    $helloWorld = "Hello, world";
    echo '<h1>' . $helloWorld . '</h1>';

    #Functions#

    #Variable dump#

    $a = 'Bababooey! Howard Stern for President.'; // string variable
    var_dump($a); // var_dump prints data type + length
    echo nl2br ("\n");

    $b = 3614; // integer variable
    var_dump($b);
    echo nl2br ("\n");

    $c = 77.4; // floating point variable
    var_dump($c);
    echo nl2br ("\n");

    echo nl2br("\n");

    #Arrays#

    #Regular array#
    
    $weekday = array( // initialising array   
      "Monday", 
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    );

    foreach($weekday as $key=>$value) // $key becomes index of foreach loop,
    // $value is the indexed value in the weekday array
    {
      $key = $key + 1; // to index at 1
      echo("Day $key is $value<br>");
    }

    echo nl2br("\n");

    #Associative array#

    $temp = array( // associative array uses strings to index
      "lowSummer" => 11,
      "highSummer" => 19,
      "lowWinter" => 1,
      "highWinter" => 7
    );
    $months = array(
      "warmest" => "July & August",
      "coldest" => "January & February"
    );
    echo("In Edinburgh, the summer average temperatures are a low of $temp[lowSummer]°C 
    and a high of $temp[highSummer]°C.<br>");
    echo("The winter average temperatures are a low of $temp[lowWinter]°C
    and a high of $temp[highWinter]°C.<br>");
    echo("The warmest months are $months[warmest], and the coldest months
    are $months[coldest].<br>");

    echo nl2br("\n");

    #Multidimensional array#

    $studentInfo = array( // multidimensional arrays create arrays within arrays
      "Aaron" => array(
        "Physics" => 74,
        "English" => 69,
        "Maths" => 70
        ),

      "Jamie" => array(
        "Physics" => 64,
        "English" => 79,
        "Maths" => 69
        ),

      "Harry" => array(
        "Physics" => 55,
        "English" => 62,
        "Maths" => 70
        )
      );

      foreach($studentInfo as $student=>$class) // grabs $studentInfo array index as $student
      {
        echo ($student."'s scores: <br>");
        foreach($class as $subject=>$scores) // grabs $studentInfo's array index[2] as $subject
        {
          echo($subject.': '.$scores.'%  ');
        }
        echo nl2br("\n\n");
      }

      #Mathematical operators#

      $a = 10; $b = 20; $c = 47.71; $d = 21.21;

      echo('a + b = '.$a + $b.'<br>');
      echo('d - c = '.$d - $c.'<br>');
      echo('c * a = '.$c * $a.'<br>');
      echo('++a = '.++$a.'<br>');
      echo('--b = '.--$b.'<br>');

      echo nl2br ("\n");

      #Logical operators#

      #AND#
      echo("boolean operators<br><br>");
      echo("and:<br><br>");
      $x = true; $y = false;
      $test1 = ($x && $x)? "true" : "false";
      echo('true + true = '.$test1.'<br>');
      $test2 = ($x && $y)? "true" : "false";
      echo('true + false = '.$test2.'<br>');
      $test3 = ($y && $y)? "true" : "false";
      echo('false + false = '.$test3.'<br><br>');

      #OR#
      echo("or:<br><br>");
      $test4 = ($x || $x)? "true" : "false";
      echo('true + true = '.$test4.'<br>');
      $test5 = ($x || $y)? "true" : "false";
      echo('true + false = '.$test5.'<br>');
      $test6 = ($y || $y)? "true" : "false";
      echo('false + false = '.$test6.'<br><br>');

      #NOT#
      echo("not:<br><br>");
      $test7 = (! $x)? "true" : "false";
      echo('not true = '.$test7.'<br>');
      $test8 = (! $y)? "true" : "false";
      echo('not false = '.$test8.'<br><br>');

      #XOR#
      echo("xor:<br><br>");
      $test9 = ($x ^ $x)? "true" : "false";
      echo('true + true = '.$test9.'<br>');
      $test10 = ($x ^ $y)? "true" : "false";
      echo('true + false = '.$test10.'<br>');
      $test11 = ($y ^ $y)? "true" : "false";
      echo('false + false = '.$test11.'<br><br>');

      #Assignment operators#

      #Concatenation#
      $a = "Harvey ";
      $aa = "MacLeary";
      $a .= $aa;
      echo($a);

      echo nl2br("\n\n");

      #Addition#
      $b = 4;
      $bb = 6;
      $b += $bb;
      echo($b);

      echo nl2br("\n\n");

      $c = 7.5;
      $cc = 2.25;
      $c -= $cc;
      echo($c);
      
      echo nl2br("\n\nTASK: \n\n");

      #TASK#
      $var1 = 10; $var2 = 20;
      $test = ($var1 != $var2)? "true" : "false";
      echo("test for inequality<br>10 != 20: ".$test."<br><br>");
      $var1 = true; $var2 = true;
      $test = ($var1 === $var2)? "true" : "false";
      echo("test for equality<br>true === true: ".$test."<br><br>");
      $var1 = 5; $var2 = 3;
      $test = ($var1 < $var2)? "true" : "false";
      echo("test for less than<br>5 < 3: ".$test."<br><br>");
      $var1 = 5; $var2 = 3;
      $test = ($var1 > $var2)? "true" : "false";
      echo("test for greater than<br>5 < 3: ".$test."<br><br>");
    ?>
  </body>
</html>