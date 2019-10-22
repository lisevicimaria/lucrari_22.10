<?php
$connect = mysqli_connect('localhost', 'root', '', 'Lucrare_21.10');

mysqli_query($connect, "INSERT INTO input_numbers SET value ='{$_POST['name']}'");

?>

<form action="" method="post">
    <br>
    Please insert your number!
    <br>
    <br>
    <input type="text" name="name">
    <input type="submit" value="Send!">
</form>

<a href="output_numbers.php">Output</a>