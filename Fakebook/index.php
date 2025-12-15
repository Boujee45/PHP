<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Fakebook😁😁</h2>
        <label for="username">Username: </label><br>
        <input type="text" name="username"><br>

        <label for="password">Password: </label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="Sign Up">
        
    </form>
</body>
</html>


<?php
    include("database.php");

    if($_SERVER['REQUEST_METHOD'])
    {
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username))
        {
            echo "Please enter the username!";
        }
        elseif(empty($password))
        {
            echo "Please enter the password!";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(user,password)
                    VALUES('$username','$hash')";

            try{
                mysqli_query($conn,$sql);

                echo "User registered!";
            }
            catch(mysqli_sql_exception)
            {
                echo "Could not register user!";
            }
            
        }

        $sql = "SELECT * FROM users";
        $sql = "SELECT * FROM users WHERE user = 'Spongebob'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {

            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>reg-date</th></tr>";
            
            while($row = mysqli_fetch_assoc($result))
            {
                
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['user']}</td>
                    <td>{$row['password']}</td>
                    <td>{$row['reg_date']}</td>
                    </tr>";
            }

            echo "</table>";

            /*echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["password"] . "<br>";
            echo $row["reg_date"] . "<br>";*/

            
            
        }
        else{
            echo "No user found!";
        }
    }

    mysqli_close($conn);
?>
