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

      #Mathematical Operators#

      $a = 10; $b = 20; $c = 47.71; $d = 21.21;

      echo('a + b = '.$a + $b.'<br>');
      echo('d - c = '.$d - $c.'<br>');
      echo('c * a = '.$c * $a.'<br>');
      echo('++a = '.++$a.'<br>');
      echo('--b = '.--$b.'<br>');

    ?>
  </body>
</html>