 <?php
 error_reporting(0);
    $servername = "localhost";  
    $username   = "root";
    $password   = "";
    $dbname     = "responsiveform3";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo "Connection ok";
    }
    else
    {
        echo "Connection Failde".mysqli_connect_error();
    }

?>