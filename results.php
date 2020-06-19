<html>
    <body>
        <table>
            <thead>
                <th> email </th>
                <th> pws </th>

<?php
include "./connect.php";
echo(new date());
$query = "SELECT * FROM opencourse";
$quey_exe = mysqli_query($connection, $query);
while($result = mysqli_fetch_array($quey_exe))
{ ?>

    <tr>
        <td>
            <?php echo $result["email"]; ?>
</td>

<td>
    <?php echo $result["pws"]; ?>
</td>

<td>
    <?php echo $result["cpws"]; ?>
</td>

<?php  }  ?>

</table>
</body>
</html>


