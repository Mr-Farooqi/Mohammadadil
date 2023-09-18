<?php
session_start();
echo "Welcom ".$_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8q">
        <meta  name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<!-------Body tag is start hear-------->
<body>
    <div class="login-container">
        <h2>
            Login
        </h2>
        <!-----form action="#" method="POST" autocomplete="off"------->
        <div class="form>">
            <input type="text" name="username" placeholder="Username" required>
           
            <input type="password" name="password" placeholder="Password" required>
          
            <div class="forget"><a href="" class="link" onclick="message()">
                Forgetpassword ?</a></div> 
           
            <input type="submit" name="login" value="Login" class="btn">
         
            <div class="signup">New member<a href="" class="link">singup hear ?</a></div>
        </div>
    </form>
    </div>
    <script>
        function message()
        {
            alert("toh password yaad karo")
        }
    </script>
</body>    
<!-----------Body tag closss-->
</html>

<?php
    include("conection.php");

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        //query start == $username & $password

        $query = "SELECT * FROM form5 WHERE email = '$username' && password ='$pwd' ";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        //echo $total;

        if($total == 1)
        {
           $_SESSION['user_name'] = $username;
            //echo "Login Seccsesful";
            header('location:web.php');
            //<meta http-equiv = "refresh" content = "5; url = ######> {yea direct link se attech ho jata hay }
            
            
        }
        else
        {
            echo "Login Faild";
        }
    }
?>

 
