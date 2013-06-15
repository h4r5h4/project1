<?PHP
require_once("./include/membersite_config.php");
require_once("./include/db.php");

if(!$fgmembersite->CheckLogin())
{
 $fgmembersite->RedirectToURL("login.php");
    exit;
}

if($fgmembersite->UserRole()!="student")
{    
    $fgmembersite->RedirectToURL("noaccess.html");
    exit;
}
    

?>
<html>
<head>
<title>VNRVJIET | Portal</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<script language="JavaScript" src="js/browserVersion.js"></script>
<script language="JavaScript" src="js/auth.js"></script>

<script type="text/javascript"><!--// Empty script so IE5.0 Windows will draw table and button borders
//-->
</script>

<!-- For layers of menu and content -->
<style type="text/css">
.data {
  overflow: hidden;
}
.leftclass {
  float: left;
  overflow-y:auto;
  width: 150px;
  padding-left:1cm;
  <!-- max-height: 200px;-->
  height:auto;
  background: #fff;
  
}
.rightclass {
  overflow: hidden;
  padding-bottom: 99999px;
  padding-left:4cm;
  margin-bottom: -99999px;
  background: #fff;
}
</style>

</head>

<!-- BA :: start of Customization -->
<!-- <body class="LogBdy" onload="placeCursorOnFirstElm();"></body> -->
<body onload="autoSubmit();"></body>
<!-- BA :: end of Customization -->

<div id="showStrippedLoginPage">

    <div class="sectionHeader-TypeA">
        <!-- Page header -->
        <div class="headerTitle-TypeA"><img src="images/hd_det.gif" alt="VNR VJIET" height="18" width="351" /></div>
        <!-- Login section -->
        <div class="sectionLogin-TypeA">
            <div id="print-text-TypeA"><a href="javascript:window.print();"><img src="images/bt_print.gif" alt="Print this page" style="margin-left: 30px;" height="15" width="16" /></a></div>
        </div>
    </div>

    <!-- Login section -->
    <div id="login_wrap">
        <table border="0" cellpadding="0" cellspacing="5" width="100%" summary="">
            <tbody><tr valign="top">
                    <td class="leftHandColumn">
                        <div class="info_header">
                            <h1 style="color:#ffffff;font-size:16px;margin:0;padding-top:7px;">Welcome <?= $fgmembersite->UserFullName() ?>!</h1></div>
                        <div class="info_content"><strong>&nbsp;</strong></div>
                        <div class="contentBlock">
                            <div class="login_PortalBox"></div>
							<br/>
						<div class="data">
							<div class="leftclass">
								
								     <p><a href="http://127.0.0.1/reg/student.php">Home</a></br><p>
						<p><a href="http://127.0.0.1/reg/student_smarks.php">View marks</a></br></p>
						<p><a href="http://127.0.0.1/reg/student_sattendance.php" >View attendance</a></br></p>
						<p><a href="http://127.0.0.1/reg/careers.php">Career</a></br></p>			
						<p><a href="http://127.0.0.1/reg/student_notifications.php">Notifications </a></p>
						<p><a href="http://127.0.0.1/reg/post_query.php">Post query</a></br></p>
                                                <p><a href="http://127.0.0.1/reg/ebooks">Download E-Books</a></br></p>
<p><a href="http://127.0.0.1/reg/viewprofile.php">View Profile</a></br></p>
						<p><a href="http://127.0.0.1/reg/logout.php">Logout</a></p>
														
								
								<p></p>
								<p></p>
								<p></p>
								
							</div>
							<div class="rightclass">
								<p></p>
								<?php
$con = mysql_connect(HOST,USERNAME,PASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(DATABASE, $con);
$rollno = $fgmembersite->getrollnum();

$result = mysql_query("SELECT * FROM studentd WHERE rollno='$rollno'", $con);
    $row = mysql_fetch_array($result);


echo "<table border='0' align='center'>
<tr>
<td>Roll Number:</td>";
echo "<td>" . $row['rollno'] . "</td>";
echo "</tr>";
 echo "<tr>";
  echo "<td>Name:</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Year:</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "</tr>";
  echo "<td>Branch:</td>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Father's Name:</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Mother's Name:</td>";
  echo "<td>" . $row['mname'] . "</td>";
  echo "</tr>";
echo "<tr>";
  

  echo "<td>DOB:</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "</tr>";
echo "<tr>";
if($row['gender']=='m')
{
  echo "<td>Gender:</td>";
  echo "<td>Male</td>";
  echo "</tr>";
}
else
{
  echo "<td>Gender:</td>";
  echo "<td>Female</td>";
  echo "</tr>";
}
echo "<tr>";
  echo "<td>Address:</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Mobile Number:</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Parent Mobile:</td>";
  echo "<td>" . $row['pmobile'] . "</td>";
  echo "</tr>";
echo "<tr>";
  echo "<td>Parent Email:</td>";
  echo "<td>" . $row['pemail'] . "</td>";
  echo "</tr>";

echo "</table>";
 

  

mysql_close($con);

?>	
						
								<p></p>
								<p> </p>
								<p> </p>
								<p> </p>
								<p></p>
							</div>
						</div>
				
						</div>
                       </td>
                </tr>
            </tbody></table>
    </div>

    <!-- Footer -->
    <div class="footerTop">
        <div id="footerGovLink"></div>
    </div>

    <!-- Legal and info links -->
    <div class="footerBottom">
        <div id="detlogo"><img src="images/gr_dec_logo.gif" alt="VNR VJIET" height="60" width="176" /></div>
    </div>
</div>



</body>
</html>

