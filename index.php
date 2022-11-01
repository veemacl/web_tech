<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>var_dump.php</title>
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

    $a = 'You\'re my wonderwall.'; // string variable
    var_dump($a); // var_dump prints data type + length
    echo nl2br ("\n");

    $b = 3614; // integer variable
    var_dump($b);
    echo nl2br ("\n");

    $c = 77.4; // floating point variable
    var_dump($c);
    echo nl2br ("\n");

    echo nl2br("\n");
    
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

    $temp = array(
      "lowSummer" => 11,
      "highSummer" => 19,
      "lowWinter" => 1,
      "highWinter" => 7
    );
    echo("In Edinburgh, the summer average temperatures are a low of $temp[lowSummer]°C 
    and a high of $temp[highSummer]°C.<br>");
    echo("The winter average temperatures are a low of $temp[lowWinter]°C
    and a high of $temp[highWinter]°C.")
    ?>
  </body>
</html>