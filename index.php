<?php
session_start();
 //$con=new mysqli('sql307.byetcluster.com','ezyro_38673444','tqwdc34y','ezyro_38673444_miilkin');
 //$con=new mysqli('sql12.freesqldatabase.com','sql12774509','xrZCSQnnLj','sql12774509');
$a='';
$b='';
$sum='';
if (isset($_POST['submit'])){
    $a = $_POST['a'];
    $b=$_POST['b'];       
}
// echo $a;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="a"><br>
        <input type="text" name="b">
        <button name="submit">submit</button>
    </form>
    <?php
       echo $sum=$a+$b; ?>
        
</body>
</html>
