<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>www</title>
    </head>
    <body>
        <!--
        <?php
        /*
         echo "<h1>Hello World</h1><br>";
         echo "<hr>";

         $characterName = "Oscar";
         $characterAge = 21;

         echo "<p>My name is $characterName , iam $characterAge years old.<br>";

         echo "<hr>";

         $phrase = "Giraffe Restaurant";

         echo strtolower($phrase)."<br>";//to lower
         echo strtoupper($phrase)."<br>";//to upper
         echo strlen($phrase)."<br>";//length
         echo $phrase[1]."<br>";//index of char
         echo str_replace("Giraffe","Mzanzi",$phrase)."<br>";//replace
         echo substr($phrase,0,5)."<br>";//substring
         echo str_contains($phrase,"Res")."<br>";//contains
         echo trim($phrase)."<br>";
         echo str_pad($phrase,20,"0")."<br>";
         echo strrev($phrase)."<br>";//reverse
         echo str_shuffle($phrase)."<br>";
         echo strcmp($phrase, Giraffe)."<br>";//compare
         echo strpos($phrase, " ")."<br>"; //position
         echo explode(" ",$phrase)."<br>"; // a string to array
         echo implode(" ",$array_name)."<br>"; // an array to string

         echo "<hr>";

         echo abs(-100)."<br>";
         echo sqrt(36)."<br>";
         echo pow(2,4)."<br>";
         echo max(4,8,19)."<br>";
         echo min(9,1,34)."<br>";
         echo round(2.56,1)."<br>";
         echo ceil(2.56)."<br>";
         echo floor(2.9)."<br>";
         echo pi()."<br>";
         echo date("1")."<br>";
         echo rand(1,6)."<br>";
         $num = 8;
         $num += 1;
         echo $num ."<br>";
         $num -= 1;
         echo $num ."<br>";
         echo "<hr>";
        ?>

        <form action="site.php" method="get">
            Name:<input type="text" name="Name">
            Age:<input type="number" name="Age">
            Country:<input type="text" name="Country">

            <input type="submit">
        </form>
        <br>

        <?php
            echo "<h1>Your Name is " . $_GET["Name"] .".</h1>";
            echo "<h1>You are ". $_GET["Age"] . "years old.</h1>";
            echo "<h1>You live in ". $_GET["Country"]. ".";

        ?>
        <br>
        <hr>

        <form action="site.php" method="post">
            First Name:<input type="text" name="firstName">
            Last Name:<input type="text" name="lastName">
            Password:<input type="password" name="Password">
            <input type="submit" name="Submit">

        </form>
        <br>
        <?php
            printf ("<h1>Name : {$_POST["firstName"]}  {$_POST["lastName"]} </h1>");
            printf ("<h1>Password : {$_POST["Password"]} </h1>");
        */
        ?>
        <br>
-->
       <!-- <hr>
        <form action="site.php" method="post">
            Num 1 :<input type="number" step="0.01" name="num1">
            OP :<input type="text" name="Op">
            Num 2 :<input type="number" step="0.01" name="num2">
            <input type="submit" name="Submit">
        </form>
        <br>
        <?php
        /*
            $num1 = $_POST["num1"];
            $op = $_POST["Op"];
            $num2 = $_POST["num2"];

            if($op == "+")
            {
                $sum = $num1 + $num2;
                print("<h1>SUM : {$sum} </h1>");
            }
            else if($op == "-")
            {
                $subt = $num1 - $num2;
                print("<h1>Subtraction : {$subt}</h1>");
            }
            else if($op == "*")
            {
                $multiply = $num1 * $num2;
                print("<h1>Multiplication : {$multiply}</h1>");
            }
            else if($op == "/")
            {
                $divide = $num1 / $num2;
                echo ("<h1>Division : " . round($divide,2) ."</h1>");
            }
            else{
                print("<h1>INVALID OPERATOR!</h1>");
            }
            */
            ?>
        -->
        <?php
        /* 
        
        $friends = array("Oscar","Jim","Jane","Dorothy","John");
        $friends[5] = "James";
        $length = count($friends);

        foreach($friends as friend)
        {
            echo $friend . "<br>";
        }
        
        array_push($friends, "Dan");
        array_pop($friends);
        array_shift($friends);
        
        $reversed_array = array_reverse($friends);

        echo count($friends);

        for($i = 0;$i < $length;$i++)
        {

            echo $i + 1 ."." . $friends[$i] . "<br>";

        }
        
        echo "<hr><br>";
        $nameAges = array("Anne"=>30,"John"=>20,"Jenga"=>50,"Alice"=>40,"Oscar"=>23);
        $length = count($nameAges);
        var_dump($nameAges);
        //$key = array_keys($nameAges);

        //echo $key;

        foreach($nameAges as $key => $value)
        {
            echo "{$key} = {$value}";
        }

        $keys = array_keys($nameAges);
        $values = array_values($nameAges);
        $nameAges = array_flip($nameAges);

        $nameAges["Jenga"] = 60;

        echo $nameAges["Jenga"];
       /* for($i = 0;$i<$length;$i++)
        {
            echo $nameAges[$i];
        }*/
/*
         echo "<hr><br>";
        $socialNetwork = array(
        array("Facebook","Feb",21),
        array("Twitter","February",25),
        array("Instagram","March",21));

        $socialNetwork[0][1] = "July";
        echo $socialNetwork[1][0]. "<br>";
        echo $socialNetwork[0][1] . "<br>";
        echo $socialNetwork[2][2] . "<br>";*/
        ?>
        <hr><br><!--
        <form action="site.php" method="post">
            Apples : <input type="checkbox" name="fruits[]" value="Apples">
            Bananas : <input type="checkbox" name="fruits[]" value="Bananas">
            Oranges : <input type="checkbox" name="fruits[]" value="Oranges">
            <input type="submit">
        </form>-->
        <?php
/*
            $fruits = $_POST["fruits"];
            $count = count($fruits);
           //echo $count;
            for($i = 0;$i < $count ; $i++)
            {
                echo $fruits[$i] . "<br>";
            }

            echo $fruits[0];*/
        ?>

        <?php
            /*function getMax($num1,$num2)
            {
                $max = max($num1,$num2);
                return $max . "<br>";
            }
            echo getMax(30,50);
            
            $Ans = 1;

            while($Ans <= 10)
            {
                echo $Ans . "<br>";
                $Ans++;
            }*/
            ?>

            <!--<form action="site.php" method="post">
                <input type="text" name="grade" required placeholder="Enter the grade: ">
            </form>-->

            <?php
            /*$Grade = $_POST['grade'];

            switch($Grade)
            {
                case "A":
                    echo "Very excellent!";
                    break;
                case "B":
                    echo "Excellent!";
                    break;
                case "C":
                    echo "Good Work!";
                    break;
                case "D":
                    echo "Fair";
                    break;
                case "E":
                    echo "Poor!";
                    break;
                default:
                    echo "Invalid Grade!";
                    break;
            }

            $index = 0;

            do{
                echo $index;
                $index++;
            }while($index <= 5);*/
            ?>

            <?php

            class Student{
                //var $name;
                private $name;
                public $age;
                private $gpa;

                function __construct($name,$age,$gpa)
                {
                    $this->name = $name;
                    $this->age = $age;
                    //$this->gpa = $gpa;
                    $this->setGpa($gpa);
                }
                function hasHonors()
                {
                    if($this->gpa >= 3.5)
                    {
                        return "true";
                    }
                    return "false";
                }
                function getName()
                {
                    return $this->name;
                }
                function getGpa()
                {
                    return $this->gpa;
                }
                function setGpa($gpa)
                {
                    
                    if($gpa < 4.0)
                    {
                        $this->gpa = $gpa;
                    }
                    else{
                        $this->gpa = 1.0;
                    }
                }
                function exams()
                {
                    echo "You are done with your exams";
                }
            }
            class Candidate extends Student
            {
                function exams()
                {
                    echo "Exams are starting soon!";
                }
            }
            $student1 = new Student("Oscar Kariuki",17,6.8);
            $candidate1 = new Candidate("Mary Jane",21,3.4);

            echo $candidate1->getGpa();
            echo $candidate1->hasHonors();
            echo $candidate1->exams();

            echo $student1->getName();
            echo $student1->age;
            echo $student1->getGpa();
            echo $student1->hasHonors();
            echo $student1->exams();
            ?>
            <? ?><!--Short open tags-->
            <% %><!--Asp like tags-->
            <script type="text/php">
                echo ("hello world");
            </script>
            <?php 
                echo "";
                print "";
                printf ("");
                /* 
                strings
                booleans
                float
                null
                object
                array
                integer
                doubles
                undefined
                */
                define("PI",3.145);

                echo PI;

                //Superglobals
                //Built in variables that can be accessed from anywhere/ that are always accessible
                /*$URL = $_GET["URL"];
                $HTML_FORM = $_POST["FORM"];
                $GET_POST = $_REQUEST["GET && POST"];
                $COOKIE = $_COOKIE["COOKIE"];
                $SESSION = $_SESSION["SESSION"];
                */
                //Key terms
                /**
                 * Database-a collection of related information stored in one logical structure
                 * middleware-software that sits between client and server to handle requests
                 * rest-use http methods for api development
                 * graphql-allow flexible querying for api development
                 * cookie-small data stored on the client side for session management
                 * cache-temporary storage used to allow faster/speed up data retrieval
                 * proxy server-a server used to forward requests from client to server
                 * load balancing - this is distributing traffic to multiple servers
                 * variables-container that stores information
                 * backend-part of web app that operates on the server
                 * api-application programming interface -set of rules and protols for software components communication
                 * http and https-used to transfer data from client to server
                 * tls-transport layer security-protocols for encrypting data in the internet
                 * session-user interactions on the web page
                 * orm-object relational map - used to map database tables to objects in code
                 * framework-provide libraries and prebuilt functionalities
                 * library-prewritten code used by developers to simplify tasks 
                 * Server - software that handles incoming requests
                 */

                //server side development concepts
                /**
                 * languages-js,php,python,c#,go,perl,java
                 * frameworks-spring boot,django,laravel,asp.net,node.js,golang,ruby on rails
                 * databases-relational,non relational
                 * apis-rest,graphql
                 * server hosting-on-premises,serverless achitecture,on cloud services
                 * authorization and authentication-user confirm identity,provide permission
                 * middleware-software b2n client and server that handles requests
                 * security-input validation,encryption,rate limiting
                 * scalability-caching,load balancing,database optimization
                 * error handling
                 */

                $numbers = array(2,6,7,9,1,3,5);

                sort($numbers);

                for($i = 0 ;$i < count($numbers);$i++)
                {
                    echo $numbers[$i];
                }

                
                
            ?>

          <!--  <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form action="site.php" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username"><br>

                    <label for="password">Password:</label><br>
                    <input type="password" name="password"><br>

                    <input type="submit" value="Log in" name="login"><br>
                </form>
            </body>
            </html>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form action="site.php" method="post">
                    <input type="radio" name="credit_card" value="Visa">Visa<br>
                    <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
                    <input type="radio" name="credit_card" value="American Express">American Express<br>
                    <input type="submit" name="confirm" value="Confirm">
                </form>
            </body>
            </html> -->

          <!--  <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form action="site.php" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username"><br>

                    <label for="age">Age:</label><br>
                    <input type="text" name="age"><br>

                    <label for="email">Email:</label><br>
                    <input type="email" name="email"><br>
                    
                    
                    <input type="submit" name="login" value="Login">
                </form>
            </body>
            </html>
    </body>
</html> -->

<?php
   /* $username = null;
    $password = null;
    

    foreach($_POST as $key => $value)
    {
        echo"{$key} = {$value} <br>";
    }

    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        if(empty($username) || empty($password))
        {
            echo "Please enter both username and password!";
        }
                
    }*/

   /* if(isset($_POST["confirm"]))
    {
        $Credit_card = null;
        if(isset($_POST["credit_card"]))
        {
            $Credit_card = $_POST["credit_card"];
        }

        if($Credit_card == "Visa"){
            echo "You have selected Visa";
        }
        elseif($Credit_card == "Mastercard"){
            echo "You have selected Mastercard";
        }
        elseif($Credit_card == "American Express"){
            echo "You have selected American Express";
        }
        else{
            echo "Please select a credit card";
        }
    }*/

   /*if(isset($_POST["login"]))
    {
        /*      Sanitizing User Input   */
        /*$username = filter_input(INPUT_POST,"username",
        FILTER_SANITIZE_SPECIAL_CHARS);

        echo "hello {$username}";

        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        echo "You are {$age} years old.";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo $email;

        /*      Validating User Input   */

        /*$age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

        if(empty($age))
        {
            echo "That number is not valid";
        }
        else{
            echo "You are {$age} years old.";
        }

        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($email))
        {
            echo "That email is not valid";
        }
        else{
            echo $email;
        }
        
    }*/
    /*      Cookies   */
    /*
    setcookie("fav_food","Pizza",time() + (86400 * 2), "/");
    setcookie("fav_drink","coffee",time() + (86400 * 3), "/");
    setcookie("fav_dessert","ice cream",time() + (86400 * 4), "/");

    //setcookie("fav_food","Pizza",time() - 0, "/"); - to delete a cookie

    foreach($_COOKIE as $key => $value)
    {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"]))
    {
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "i dont know your favourite food";
    }*/

?>

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--
                   $_SERVER
         for php self to get the current file name
        htmlspecialchars prevents against cross site scripting 
    -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="username">USername: </label><br>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

    /* $_SESSION    */
    if(isset($_POST["login"]))
    {
        if(!empty($_POST["username"]) && !empty($_POST["password"]))
        {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");//redirected to another page to continue session
        }
        else{
            echo "Missing username / password";
        }
    }

    /* $_SERVER    */

    //To list all the key value pairs in a server
    foreach($_SERVER as $key => $value)
    {
        echo "{$key} = {$value} <br>";
    }

    /* instead of using isset this is the alternative method */
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "Hello";
    }

?>

<!-- HASHING -->

<?php
    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT); //an encrypted password

    if(password_verify("pizza123" , $hash))//to verify a Password
    {
        echo "You are logged in!";
    }
    else{
        echo "Incorrect password!";
    }
?>