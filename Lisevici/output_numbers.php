<?
$connect = mysqli_connect('localhost', 'root', '', 'Lucrare_21.10');

$result = mysqli_query($connect, " SELECT value FROM input_numbers ORDER BY value desc");

?>
<table border="2">
    <? while($number = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?= $number['value']?></td>
    </tr>
    ,
</table>
<? }?>
