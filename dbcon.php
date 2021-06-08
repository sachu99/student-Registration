<?php
$server = "localhost";
$user = "root";
$pass = "";
$db="signup";
$connection = mysqli_connect($server,$user,$pass,$db);
if($connection)
{
    ?>
    <script>
        alert("connection sucessful");
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("not connected");
    </script>
    <?php
}
?>
