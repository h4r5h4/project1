
<?PHP
require_once("./include/membersite_config.php");

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
$con = mysql_connect("localhost","portal","rockerz");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 

$pwd = md5($_POST['pwd']);
mysql_select_db("portal", $con);
$sql="INSERT INTO users (`rollno`, `username`, `email`, `name`, `password`, `role`, `confirmcode`)
VALUES
('$_POST[rollno]','$_POST[uname]','$_POST[email]','$_POST[name]','$pwd','$_POST[role]','y')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

else
{
echo "success";
}
mysql_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>An Access Controlled Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>

<body>
<div id='fg_membersite_content'>
<h2>Admin Access</h2>
<p>
Logged in as: <?= $fgmembersite->UserFullName() ?>
</p>
<p>
<p><a href='logout.php'>Logout</a></p>
</p>
</div>
</body>
</html>
