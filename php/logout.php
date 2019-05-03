<?php 
session_start();
session_destroy();
echo '<script>alert("Successfullt Logout!")</script>';
        echo '<script>window.location.href = "login_new.php"</script>';

 ?>