<?php
    echo 'cerrando sesión...';
    session_start();
    session_destroy();

    echo "<script>window.location.href='../../index.php'</script>";

?>