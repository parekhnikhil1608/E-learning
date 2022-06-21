<!DOCTYPE html>
<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        

<?php
session_start();
$username = filter_input(INPUT_POST ,'Username');
$password = filter_input(INPUT_POST,'Password');
$repassword = filter_input(INPUT_POST,'Re-Password');
if(!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "nik_1608_";
        $dbpassword = "root";
        $dbname ="nikhil";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

        if(mysqli_connect_error()){
         
            die('Connect Error('. mysqli_connect_errno() .')'
            .mysqli_connect_error());
        }else{
            if($password==$repassword){
            $sql = "select * from Signup where Username= '$username' ";
            $result = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result)>0){
                     
                    
                    echo '<script>
                     swal({
                      title: "Try Again..",
                      text: "Username Alredy Exist....",
                      icon: "error",
                       }).then(okay => {
                        if (okay) {
                    window.location.href = "http://localhost/Vinit_Patel/DIET/BE/signup.html";
                     }
                });
            </script>';
                                      

                }else{
                    $sql="insert into Signup values ('$username','$password','$repassword')";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo '<script>
                     swal({
                      title: "SUCCESS",
                      text: "Congratulations,your account has been successfully created..",
                      icon: "success",
                       }).then(okay => {
                        if (okay) {
                    window.location.href = "http://localhost/Vinit_Patel/DIET/BE/login1.html";
                     }
                });
            </script>';
                        
                    }else{
                        echo '<script>
                        swal({
                         title: "Error",
                         text: "Woops something went wrong...",
                         icon: "error",
                          }).then(okay => {
                           if (okay) {
                       window.location.href = "http://localhost/Vinit_Patel/DIET/BE/signup.html";
                        }
                   });
               </script>';

                    }
                }
        }else{
            echo '<script>
            swal({
             title: "Try Again",
             text: "The password you entered do not match.please re-enter your password..",
             icon: "warning",
              }).then(okay => {
               if (okay) {
           window.location.href = "http://localhost/Vinit_Patel/DIET/BE/signup.html";
            }
       });
   </script>';
        }
        }

    }else{
        echo '<script>
        swal({
         title: "Error",
         text: "Password Should Not Empty...",
         icon: "warning",
          }).then(okay => {
           if (okay) {
       window.location.href = "http://localhost/Vinit_Patel/DIET/BE/signup.html";
        }
   });
</script>';
        die();
    }
}else{
    echo '<script>
    swal({
     title: "Error",
     text: "Username Should Not Empty...",
     icon: "warning",
      }).then(okay => {
       if (okay) {
   window.location.href = "http://localhost/Vinit_Patel/DIET/BE/signup.html";
    }
});
</script>';
    die();

}

?>

</body>
</html>