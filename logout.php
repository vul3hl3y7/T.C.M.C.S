<?php
    session_start(); 
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        unset($_SESSION['loginname']);
        //echo '登出中......';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
        ?>
    </body>
</html>
