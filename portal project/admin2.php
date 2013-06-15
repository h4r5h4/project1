
<?PHP
require_once("./include/membersite_config.php");
require_once("./include/db.php");

if(!$fgmembersite->CheckLogin())
{
 $fgmembersite->RedirectToURL("login.php");
    exit;

}
if($fgmembersite->UserRole()!="admin")
{    
    $fgmembersite->RedirectToURL("noaccess.html");
    exit;
}
if(isset($_POST['name']))
{
$con = mysql_connect(HOST,USERNAME,PASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db(DATABASE, $con);
$sql="CREATE TABLE IF NOT EXISTS `studentd` (
  `name` text NOT NULL,
  `rollno` text NOT NULL,
  `year` int(11) NOT NULL,
  `branch` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `mobile` int(20) NOT NULL,
  `pmobile` int(20) NOT NULL,
  `pemail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;";


if (!mysql_query($sql,$con))
{
  echo "Error creating table: " . mysql_error();
  }
 


$sql="INSERT INTO studentd (`name`, `rollno`, `year`,  `branch`,  `fname`, `mname`, `dob`, `gender`, `address`, `mobile`, `pmobile`, `pemail`)
VALUES
('$_POST[name]','$_POST[rollno]','$_POST[year]','$_POST[branch]','$_POST[fname]','$_POST[mname]','$_POST[dob]','$_POST[radio1]','$_POST[address]','$_POST[mphone]','$_POST[pphone]','$_POST[pemail]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

else
{
//echo "success";
}
mysql_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
								
						    <p><a href="http://127.0.0.1/reg/admin.php">Home</a></br><p>
									<p><a href="http://127.0.0.1/reg/admin/user_create.html">create user</a></br></p>
									<p><a href="http://127.0.0.1/reg/admin/student_details.html" >enter student details</a></br></p>
									<p><a href="http://127.0.0.1/reg/admin/faculty_details.html">enter faculty details</a></br></p>
									<p><a href="http://127.0.0.1/reg/admin/marks.html">enter marks</a></p>
									<p><a href="http://127.0.0.1/reg/admin/attendance.html"> enter attendance</a></p>
									<p><a href="http://127.0.0.1/reg/admin/announcements.html">announcements</a></br></p>
<p><a href="http://127.0.0.1/reg/admin/changepass.html">Change Password</a></br></p>
									<p><a href="http://127.0.0.1/reg/logout.php">Logout</a></p>
								<p></p>
								<p></p>
								<p></p>
								
							</div>
							<div class="rightclass">
							Success
								<p></p>
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
