<?php
$q=$_GET["q"];

$con = mysqli_connect('www.t-uvw.xyz','root','root','etc_privileges');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"etc_privileges");
$sql="SELECT `id`, `title`, `uploadtime`, `author`, `vote`, `reward` FROM `works` WHERE `tag` = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['uploadtime'] . "</td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "<td>" . $row['vote'] . "</td>";
    echo "<td>" . $row['reward'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>