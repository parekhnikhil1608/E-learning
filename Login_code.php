<!DOCTYPE html>
<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
<?php 

session_start();


$host="localhost";
$user="nik_1608_";
$password="root";
$db="nikhil";

$conn = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];
   
    
    $sql="select * from Signup where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION["user_name"] = $uname;
         echo '<script>
                     swal({
                      title: "Login Success!",
                      text: "you are successfully login..",
                      icon: "success",
                       }).then(okay => {
                        if (okay) {
                    window.location.href = "https://parekhnikhil1608.github.io/E-learning/home.php";
                     }
                });
            </script>';
    }
    else{
        echo '<script>
                     swal({
                      title: "Error!",
                      text: "Please Enter Correct Password...",
                      icon: "error",
                       }).then(okay => {
                        if (okay) {
                    window.location.href = "https://parekhnikhil1608.github.io/E-learning/Nikhil/DIET/BE/login1.html";
                     }
                });
            </script>';
    }
    if(isset($_SESSION["username"])){
        header("Location: home.php");
    }
        
}
?>
</body>
</html>