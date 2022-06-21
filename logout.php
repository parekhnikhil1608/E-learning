<?php

    if(session_start()){
        session_destroy();
        echo '<script>
        window.location.href = "https://parekhnikhil1608.github.io/E-learning/Nikhil/DIET/BE/login1.html";
        </script>';
    }
?>