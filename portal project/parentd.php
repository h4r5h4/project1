<?php
require_once("./include/membersite_config.php");
require_once("./include/db.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
if($fgmembersite->UserRole()!="parent")
{    
    $fgmembersite->RedirectToURL("noaccess.html");
    exit;
}

$att = $fgmembersite->getAttendance($fgmembersite->getRollno($fgmembersite->UserEmail()));

echo "<table border='1'>
<tr>
<th>Attendance Percentage</th>
</tr>";


  
  echo "<tr>";
echo "<td>" . $att . "</td>";
  echo "</tr>";
  
echo "</table>";


?>
