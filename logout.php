<?php

    if(session_start()){
        session_destroy();
        echo '<script>
        window.location.href = "http://localhost/Education/Vinit_Patel/DIET/BE/login1.html";
        </script>';
    }
?>