<?php  session_start(); 
if(!isset($_SESSION['name'])) // agar logut ke badh koi back krke piche wale page pe aana chahega to abhi to ho jayega but agar session distroy ko badh usko username milega hi nhi to es chiz ko hum  krenge check krenge username mil rha hai ya nhi nhi milega to page redirect krwa denge login page pe
{
    echo "You are Logged Out";
    header('location:login.php');
}
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>
    <?php  include "links.php"; ?>
    <style>
        *{
            padding: 0px 0px;
            margin: 0px 0px;
        }
        .container
        {
            background-color:#ff9966 → #ff5e62;
            width: 100vw;
            height: 100vh;
            /* display: flex; */
        }
        
        .nav ul
        {
            /* border: 2px solid red; */
            display: flex;
            height:35px;
            width: 1000px;
            flex-direction: row;
            padding: 10px 200px 10px 200px;
            justify-content: center;
            justify-content: space-between;
            border-radius: 10px;
            margin-left: 50px;
        }
        .navbar
        {
            /* border: 2px solid black; */
            border-radius: 10px;
            list-style: none;
            font-size: 1.5rem;
            color: blue;
            background-color: lightsalmon;
            box-shadow: 5px 5px 5px gray;
        }
        .navbar:hover{
            color: red;
            font-size: 1.7rem;
        }
        h1{
            /* border: 2px solid black; */
            margin-left: -200px;
            margin-right: 50px;
            /* padding: 10px 10px; */
            border-radius: 10px;
            background-color: black;
            color: whitesmoke;
        }
        #logout
        {
            margin-right: -200px;
            border-radius: 10px;
            background-color: yellow;
            color: white;
            font-size: 1.3rem;        }
        #logout:hover{
            color: red;
            font-size: 1.4rem;
            
        }
        .box
        {
            /* border: 2px solid black; */
            width: 1100px;
            height: 500px;
            display: flex;
            margin: 100px 200px;
           
        }
        #side
        {
            height: 300px;
            width: 100px;
            border: 2px solid black;
            margin: 50px 0px;
            padding: 50px 20px ;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
           
        }
        #content
        {
            height: 300px;
            width: 500px;
            /* border: 2px solid black; */
            margin: 50px 100px;
            padding: 50px 100px ;
        
        }
        #text
        {
            font-size: 3rem;
            margin: 10px 10px;
            color: lime;
            
            
        }
        #gmail
        {
            font-size: 1.3rem;
            margin: 10px 10px;
            border-radius: 50px;
            background-color: black;
            color: whitesmoke;
        }
        #gmail:hover
        {
            font-size: 1.8rem;
        }
        #facebook
        {
            font-size: 1.3rem;
            margin: 20px 10px;
            border-radius: 100px;
            background-color: black;
            color: whitesmoke;
        }
        #facebook:hover
        {
            font-size: 1.8rem; 
        }
        body {
            background-image: url('images.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        
        
    <div class="nav"> 
        
        <ul>
        <h1>WELCOME</h1>
            <li class="navbar">Home</li>
            <li class="navbar">Services</li>
            <li class="navbar">About us</li>
            <li class="navbar">Contact</li>
            <button id="logout"><a href="logout.php"> Log Out </a></button>
        </ul>
    </div>
    <div class="box">
        <div id="content">
        <div id="text">
            Hello This is <?php echo  $_SESSION['name'] ; ?>
        </div>
        </div>
        <div id="side">

        <button id="gmail"><i class="fa fa-google"></i>  </a></button>
            <button id="facebook"><i class="fa fa-facebook"></i></button>


    </div>
    

    </div>

    </div>
    
</body>
</html>