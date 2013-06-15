<?PHP
require_once("./include/membersite_config.php");
require_once("./include/db.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
      if($fgmembersite->getRole()=="admin")
          $fgmembersite->RedirectToURL("admin.php");
      if($fgmembersite->getRole()=="student")
          $fgmembersite->RedirectToURL("student.php");
 if($fgmembersite->getRole()=="faculty")
          $fgmembersite->RedirectToURL("faculty.php");
 if($fgmembersite->getRole()=="parent")
          $fgmembersite->RedirectToURL("parent.php");
   }
}

?>

<html>
<html>
<head>
<title>VNRVJIET | Portal</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<script language="JavaScript" src="js/browserVersion.js"></script>
<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
<script language="JavaScript" src="js/auth.js"></script>
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</script>
<script type="text/javascript"><
</script>

</head>


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
                            <h1 style="color:#ffffff;font-size:16px;margin:0;padding-top:7px;">Portal Login Page</h1></div>
                        <div class="info_content"><strong>&nbsp;</strong></div>
                        <div class="contentBlock">
                            <div class="login_PortalBox">
                                <div class="rhSectionBlock" style="padding: 15px; width: auto;">

                                    <h2 style="margin-bottom: 10px;color:#059BB6;font-size:12px;  font-weight:bold;  margin:0;  padding:0;">Forgot Password</h2>
                                    <div class="keyline_2" style="margin: 8px -10px;">.</div>

                            

                                    

                                        

                                          

                                      
                                               <p> Please Contact Administrator to reset your password</p>
<p>
<a href='login.php'>Click here to Login</a>
</p>

                                        

                                        

                                          
                                          
                                           
                                            </div>
                                            
                                    
                                </div>
                            </div>
</form>

                            <div class="lhSectionBlock"><h4><br><br>Why Student Web Portal?<br></h4></div>
                            <div class="contentBody"><p><font size="2">A student portal is an online gateway where students can log into a college website to access their information regarding marks, attendance, download e-books etc. Using a portal makes it easier for people to access important information from anywhere, at any time of day. The portals are being commonly used in colleges and universities where prompt information and necessary updates are readily available to a large number of students.</font></p></div>
                            
                            <div class="lhSectionBlock"><h4></h4></div>
                            <div class="contentBody"><p></p></div>
                            <br><br>
                            <div class="lhSectionBlock"><h4></h4></div>
                            <div class="contentBody"><p></p></div>

                            </div>
                       </td>
                    <td width="1"><img src="images/bg_dot_trans.gif" alt="logo" height="1" width="1" /></td>
                    <td id="rightHandColumn">
                        <div class="rhSectionBlock">

                            <h4><span style="font-size:14px;">Notifications</span><br><br></h4>
                            <font color="#333333"><span style="font-size:10px;">Check the current news feed..</span></font>
                         <marquee behavior="scroll" direction="up" scrollamount="2" height="250" width="200" onmouseover="this.stop();"  onmouseout="this.start();" style="border:0px;">
	                    <?$fgmembersite->getGlobalAnnouncement();?><br/>
	                 </marquee>
                        </div>
                        <br><br>
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


