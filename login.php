<?php 
session_start();  // with help of session data will store at server we can use thier vaiable anywhere
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include "css.php"  ?>
    <?php include "dbcon.php"  ?>
    <?php  include "links.php"    ?>
        
</head>
<body>
    <div class="container">
        <div class="box">

              <h1>Login Account</h1><br>
              <h3>
                  Get started with Your free Account
              </h3>
        <button id="gmail"><i class="fa fa-google"></i>     Login via Gmail </a></button>
        <button id="facebook"><i class="fa fa-facebook"></i>    Login via Facebook </button>
            
            <h2> Or</h2>
            <hr>
            <form class="form"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <input class="forms" id="email" type="email" name="emailid" placeholder="Email id" required>
                <input class="forms"  id="pass" type="password" name="pass" placeholder="Password" required>
                <button id="creat" class="forms" type="password" name="login" id="button">Login</button>
                <h3>
                <div id="login">Don't have an acount ? <a href="main.php">signup</a></div>
                </h3>
            </form>
        
        </div>
    </div>
    
</body>
</html>
<?php 
   
if(isset($_POST['login']))
{
    $emailid = mysqli_real_escape_string($connection ,$_POST['emailid']);
    $pass = mysqli_real_escape_string($connection ,$_POST['pass']);
    $emailquery = "select * from registration where email='$emailid'";
    $query = mysqli_query($connection,$emailquery);
    $emailcount = mysqli_num_rows($query);
    

    if($emailcount)
    {
        $email_pass = mysqli_fetch_assoc($query); // ye simple ek fetching query hai jo sara data ko fetch kr lega
        $dbpass = $email_pass['pass']; // jo email id user ne dala hai uss id ka password fetch karega
        $pass_decode = password_verify($pass,$dbpass);// yha password_verify predfine fxn ka php ka jisme ye do argument leta hai 1st jo user password dala hai login krte time and aur dusra jo maine databse se password fetch kiya hain
        $_SESSION['name']=$email_pass['name'];  // session ke help koi bhi data ko khi pe use kr skte jaise yha name use kiya
        if($pass_decode)
        {
            ?>
            <script>
        alert("Login succesfully");
    </script>
     <script>
        location.replace("login_page.php"); // this will replace current loginpage to login_page
    </script>
    <?php
    
        }
        else
        {
        
            ?>
        <script>
            alert(" password wrong ");
        </script>
        <?php
        }
    }
    else
        {
        
            ?>
        <script>
            alert(" Email Does Not exist Pls Sign Up ");
        </script>
        <?php
        }
    
}

?>