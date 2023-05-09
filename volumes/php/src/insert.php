<!DOCTYPE html>
<html>

<head>
    <title>Insert</title>
</head>

<body>

        <?php
        // servername => db
        // username => root
        // password => example
        // database name => user
        $conn = mysqli_connect("mysql","root","user1", "sousa");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        $first_name = $_REQUEST["first_name"];
        $last_name = $_REQUEST["last_name"];
        $email = $_REQUEST["email"];

        $sql = "INSERT INTO sousa (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";




        if(mysqli_query($conn, $sql)){
            echo "<h3>Connected Sucessfully.</h3>";
        
            echo nl2br("\n$first_name\n $last_name\n $email");

        } else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);

        }

        mysqli_close($conn);
        ?>

</body>

</html>


