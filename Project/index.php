<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <br>
    <?php
    /*
    $AGE=50;
    $GPA=30.3;
    $IsMale=false;
   
    $phrase = "Giraffe Academy";
   // echo str_replace("FFE","panda", $phrase);
    echo substr($phrase,8,3); 
  
    // echo 40;int
    //echo 40.847;float
    echo 5 + 9, ("<br>");
    echo 5 - 9, ("<br>");
    echo 5 / 9, ("<br>");
    echo 5.7 * 9, ("<br>");
    echo 10 % 3, ("<br>");
    echo (4+5)*10, ("<br>");  
        $num=10;
    $num +=82 ;
    $num -=82 ;
    $num /=82 ;
    $num *=82 ;
    echo $num ;

    echo abs(-100), ("<br>");
    echo pow(2, 4), ("<br>");
    echo sqrt(144), ("<br>");

    echo max(2, 10), ("<br>");
    echo min(2, 10), ("<br>");
    echo round(3.2), ("<br>");
    echo ceil(3.3), ("<br>");
    echo floor(3.9), ("<br>")
      

    <form action="index.php" method="get">
        Name: <input type="text" name="username">
        <br>
        Age:<input type="number" name="age">
        <input type="submit">
     </form>
   your name is <?php echo $_GET["username"]  ?>
   <br>
   your age is <?php echo $_GET["age"]  ?>
    ;

    ?>

    <form action="index.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
   answer: echo $_GET["num1"]+$_GET["num2"]
    ?>

    <form action="index.php" method="get">
        color:<input type="text" name="color">
        <br> <br>
        plural noun:<input type="text" name=" pluralnoun">
        <br> <br>
       Cerlebrity: <input type="text" name="Cerlebrity">
        
        <input type="submit">

        
    </form>
<?php   
$color=$_GET["color"];
$pluralnoun=$_GET["pluralnoun"];
$Cerlebrity=$_GET["Cerlebrity"];
echo"roses are $color <br>";
echo "$pluralnoun are blue <br>";
echo "i love $Cerlebrity"
*/

?>



<form action="index.php" method="get">
        color:<input type="text" name="name">
        <br> <br>
       
        <input type="submit">

        
    </form>
    <?php echo $_GET["name"]?>







</body>

</html>