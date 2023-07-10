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


    ?>



    <form action="index.php" method="post">
        password:<input type="password" name="password">
        <br> <br>

        <input type="submit">


    </form>
    <?php echo $_POST["password"] ;
    
    
    
    ?>

    <?php

    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    //  $friends[10]="Angela";
    //   echo $friends[10];
    $friends[4] = "Mike";
    echo count($friends);




    ?>
    <form action="index.php" method="post">
        apples:<input type="checkbox" name="fruits[]" value="apples"><br>
        oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
        pears:<input type="checkbox" name="fruits[]" value="pears"><br>


        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[3]

    ?>
    <form action="index.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo $grades[$_POST["student"]];

    ?>

    <?php 
    function sayhi($name,$age){
        echo "hello $name<br>";
    }

    sayhi("Albion",40);
    sayhi("Blinera",38);
    sayhi("Jetullah",41);
  
    ?>
    <?php 
    function cube($num)
    {
       return  $num*$num*$num;


    }
    $cuberesult=cube(4);
    echo $cuberesult;  
    */

    ?>

    <?php
    $ismale = true;
    $istall = false;
    /*if($ismale){

        //echo "you are male ";

    }
    if($ismale&&$istall){

        echo "you are a tall  male <br>";
        
    }else{
        echo "you are not male<br>";
    }

    if($ismale||$istall){

        echo "you are a tall  male <br>";
        
    }else{
        echo "you are not male<br>";
    }
    if($ismale&&$istall){
        echo "you are a tall  male <br> ";
    }elseif($ismale&&!$istall){ 
        echo "you are a short male<br>";}

    else{
        echo "you are not male<br>";
    }

    if($ismale&&$istall){
        echo "you are a tall  male <br> ";
    }elseif($ismale&&!$istall){ 
        echo "you are a short male<br>";
    }
    elseif(!$ismale&&$istall){
        echo "you are not  male but tall <br> ";
    }else{
        echo "you are not  male and tall <br> ";
    }



     ?>
    <?php 

     //echo max(3,6);
    //function getmax($num1 ,$num2){
      // if($num1>$num2){
            
        //    return $num1;
        //}else {
           // return $num2;
       // }

    //}
    function getmax($num1,$num2,$num3){
      
        if($num1>=$num2&& $num1>=$num3){
            
            return $num1;
        }elseif($num2>=$num1 && $num2>=$num3) {
            return $num2;
        }else{ return $num3;
        }

    }
    echo getmax(3000,2999,1);


  




    ?>
    <form action="index.php" method="post">
        1st number:<input type="number" step="0.1" name="num1">
        OP:<input type="number " name="op" id="">
        2nd number:<input type="number " name="num2">
        <input type="submit">
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
        echo $num1 + $num2;
    } elseif ($op == "-") {
        echo $num1 - $num2;
    } elseif ($op == "/") {
        echo $num1 / $num2;
    } elseif ($op == "*") {
        echo $num1 * $num2;
    }else{ echo "invalid operator";
    }


  
    ?>



    <form action="index.php" method="post">
        What was you grade?:<input type="text" name="grade">

        <input type="submit">
    </form>


    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
        case "A":
            echo "you did amazing";
            break;
        case "B":
            echo "you did pretty good";
            break;
        case "C":
            echo "bettger luck next time ";
            break;
        case "D":
            echo "you did very bad ";
            break;
        case "F":
            echo "YOU FAIL!";
            break;
        default:
            echo "invalid grade";

    }









    ?>



    <?php include "header.html"; ?>
    <p>hello world
    <p>
    <?php include "footer.html"; 
    

    ?>

    <?php
    $title = "My first post";
    $author = "Albion";
    $wordcount = 400;

    include "articleheader.php" 
    
    




    ?>

    <?php
    $feetInMiles = 5280;
    function sayhi($name)
    {
        echo "hello $name";
    }

    ?>
    <?php
    class book
    {
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new book;
    $book1->title = "harry potter";
    $book1->author = "JK rowling<br>";
    $book1->pages = 400;
    echo $book1->author;



    $book2 = new book;
    $book2->title = "Lotr ";
    $book2->author = "Tolkein<br>";
    $book2->pages = 700;
    echo $book2->author;

    ?>

    <?php

    class book
    {
        var $title;
        var $author;
        var $pages;
        function __construct($aTitile, $aAuthor, $aPages)
        {
            //  echo"$name <br>";
            $this->title = $aTitile;
            $this->author = $aAuthor;
            $this->pages = $aPages;


        }
    }

    $book1 = new book("harry potter<br>", "JK rowling<br>", 400);
    //$book1->title = "harry potter";
    //$book1->author = "JK rowling<br>";
    //$book1->pages = 400;
    //echo $book1->author;
    $book1->title = "Hunger Games";


    $book2 = new book("Lotr <br>", "Tolkein<br>", 700);
    //$book2->title = "Lotr ";
    //$book2->author = "Tolkein<br>";
    //$book2->pages = 700;
    //echo $book2->author;
    
    echo $book1->title;



    ?>

    <?php
    class student
    {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;

        }
        function HasHonors()
        {
            if ($this->gpa >= 3.5) {
                return "true";
            }
            return "false";
        }
    }

    $student1 = new student("Jim", "Busines", 2.8);
    $student2 = new student("Pam", "Art", 3.6);

   // echo $student1->HasHonors();
    echo $student2->HasHonors();
   
    ?>




    <?php
class Movie
{
    public $title;
    private $rating;

    public function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setrating($rating);
    }

    public function getrating()
    {
        return $this->rating;
    }

    public function setrating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

$avengers = new Movie("Avengers", "PG-13");
$avengers->setrating("Rasa ");

echo $avengers->getrating();
 */
    ?>



    <?php

    class chef
    {

        function makechicken()
        {
            echo "the chef makes chicken <br>";

        }
        function makesalad()
        {
            echo "the chef makes salad <br>";

        }
        function makespecialdish()
        {
            echo "the chef makes bbq ribs <br>";

        }

    }

    class italianchef extends chef
    {
        function makepasta()
        {
            echo "the chef makes pasta <br>";

        }
        function makespecialdish()
        {
            echo "the chef makes chicken parm <br>";
        }
    }
    $chef = new chef();
    $chef->makespecialdish();
    $italianchef = new italianchef();
    // $italianchef->makepasta();
    $italianchef->makespecialdish();

    ?>




































</body>

</html>