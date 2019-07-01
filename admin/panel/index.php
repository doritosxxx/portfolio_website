<?php
session_start();
if(!$_SESSION['admin']){
    header("Location: /admin/");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin panel</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        admin panel
    </body>

</html>