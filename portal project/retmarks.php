<?php
$con = mysql_connect(HOST,USERNAME,PASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(DATABASE, $con);

$result = mysql_query("SELECT * FROM marks$_POST[rollno]", $con);

echo "<table border='1'>
<tr>
<th>Subject Name</th>
<th>Internal Marks</th>
<th>External Marks</th>
<th>Attendance</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['subname'] . "</td>";
  echo "<td>" . $row['internal'] . "</td>";
  echo "<td>" . $row['external'] . "</td>";
  echo "<td>" . $row['attendance'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
