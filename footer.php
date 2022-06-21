<!DOCTYPE html>
<html>
    <head>
        <title>footer</title>
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.js" 
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" 
    crossorigin="anonymous"></script>
    <script src="C:\xampp1\htdocs\sweetalert.js"></script>
    <?php
    if(isset($_SESSION['status']) && ($_SESSION['status']) != ''){
        ?>
         <script>
            swal("Good job!", "You clicked the button!", "success");
        </script>
        <?php
            unset($_SESSION['status']);
    }
    ?>
    </body>
</html>