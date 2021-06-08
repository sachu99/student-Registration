<?php
session_start(); //  here we started time session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "links.php"    ?>
    <?php include "css.php"  ?>
    <?php include "dbcon.php"  ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Creat Account</h1><br>
            <h3>
            Get started with Your free Account
        </h3>
            <button id="gmail"><i class="fa fa-google"></i>     Login via Gmail </a></button>
            <button id="facebook"><i class="fa fa-facebook"></i>    Login via Facebook </button>
            
            <h2> Or</h2>
            <hr>
            <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <input class="forms"  id="name" type="text" name="name" placeholder="Full Name" required>
               
                <input class="forms" id="number" type="number" name="mobno" placeholder="Mobile number" required>
                <input class="forms" id="email" type="email" name="emailid" placeholder="Email id" required>
                <input class="forms"  id="pass" type="password" name="pass" placeholder="Creat password" required>
                <input class="forms"  id="cpass" type="password" name="cpass" placeholder="Repeat password" required><br>
                <button id="creat" class="forms" type="text" name="submit" id="button">Creat Accounts</button>
                <h3>
                <div id="login">Have an acount ? <a href="login.php">login</a></div>
            </h3>
            </form>
        </div>
            
        </div>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($connection , $_POST['name']);
    $mobno = mysqli_real_escape_string($connection ,$_POST['mobno']);
    $emailid = mysqli_real_escape_string($connection ,$_POST['emailid']);
    $pass = mysqli_real_escape_string($connection ,$_POST['pass']);
    $cpass = mysqli_real_escape_string($connection ,$_POST['cpass']);

    $password = password_hash($pass,PASSWORD_BCRYPT); // password encrpt kar diye by BCRYPT algo method
    $cpassword = password_hash($cpass,PASSWORD_BCRYPT); // password encrpt kar diye by BCRYPT algo method
    $emailquery = "select * from registration where email='$emailid'";// databse me store email id ko fetch kr rhe hai taki check kr sake ki already hai ya nhi
    $query = mysqli_query($connection,$emailquery); // jo query hmne abhi pichle line me likha tha usko database fetch krne ke liye ye likhte hain
    $emailcount = mysqli_num_rows($query);// here mysqli_num_rows() return the number of roes present in result set basicalyy check data is present or not
    if($emailcount>0)
    {
        
        ?>
    <script>
        alert("email already Exist");
    </script>
    <?php
    }
    else
    {
        if($pass===$cpass) {//check pass equal or not
        
            $insert = "insert into registration( name, mobile, email, pass, cpass) values ('$name','$mobno','$emailid','$password','$cpassword')";  // agar shi hain to data ko insert kardo
            $insertquery = mysqli_query($connection,$insert); //databse ke sath conn banake insert query pass kiya
            if($insertquery)
{
    ?>
    <script>
        alert("SignUp sucessful");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("not inserted");
    </script>
    <?php
}
        }
        else
        {
            ?>
    <script>
        alert("password are not matching");
    </script>
    <?php
        }
    }
}



?>