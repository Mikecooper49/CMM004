<?php
session_start();
if (session_destroy()) {
    echo '<script>
alert( "You have logged out");
window.location.href="index.php";
</script>';
}
