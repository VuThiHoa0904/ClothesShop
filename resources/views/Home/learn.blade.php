<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Trang chu' }}</title>
</head>

<body>
    @php
    $a=12345; $a1=1; $c=2; $A=10; $B="php";
    $b= array(0=>"PHP", 1 =>"laravel", 2 =>"java");
        echo '<h2>PHP is Fun!</h2>';
        echo 'Hello world!<br>';
        echo  $a1+$c;
        echo  $A . $B;
        print "<h2>Hello world!</h2>";
        print_r($A . $B); 
        echo"<br>";
        var_dump($A);echo"<br>";
        function hello($f="anh hung"){
            return $f;
        }

    @endphp
</body>

</html>
