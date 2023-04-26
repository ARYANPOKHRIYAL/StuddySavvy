<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$course=$_POST['courses'];

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$Database="contactus";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $Database);

// Die if connection was not successful//
if(!$conn){
    echo("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
//insert A database
        $query="INSERT INTO `userinformation` (`name`, `email`, `number`, `course`) VALUES ('$name', '$email', '$number', '$course')";
        $data= mysqli_query($conn, $query);
        if($data){
            // echo "query run successful";
            ?>
            <script type="text/javascript">
                alert("data saved successfully");
            </script>
                <?php
                
        }
        else{
            // echo "Query does not Run";
            ?>
            <script type="text/javascript">
                alert("please try again");
            </script>
            <?php
        }
        ?>
    