<?php 
session_start();
if(isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <?php require_once ("menu.php");?>
</head>
<body>
    arquivo de inicio
</body>
</html>
<?php } else {
    header('location: ../index.php');
}?>