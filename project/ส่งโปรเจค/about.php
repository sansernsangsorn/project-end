<?php 
session_start(); 
include "function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>ร้านค้าออนไลน์</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="images/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="slimbox/js/slimbox2.js"></script>
<link rel="stylesheet" href="slimbox/css/slimbox2.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css_style_index.css" />
<link rel="stylesheet" type="text/css" href="css_style_menu.css" />
<link rel="stylesheet" type="text/css" href="css_style_board.css" />
<link rel="stylesheet" type="text/css" href="css_style_page.css" />

<style type="text/css">
</style>
</head>
<body id="Page6">
<div id="container">
  <div id="bander_front">
    <?PHP include "bander_front.php"; ?>
    <div id="menu_top">
     	 <p>
       	 <?PHP include "menu_top1.php"; ?>
      	</p>
    </div>
  </div>
  
 <div class="menu_left"><!-- เมนูด้านซ้าย -->
	<?PHP  include "menu_left_front.php"; ?>
  </div><!-- จบเมนูด้านซ้าย --> 

<div class="data_center"><!-- ส่วนกลางของเว็บ -->
	<div class="data_center_back">
	  <table width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left" valign="top"><div class="title">
              <h2><img src="images/diagram-49.png" width="48" height="48" /> เกี่ยวกับเรา </h2>
          </div>
            <table width="99%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6%" align="left" valign="middle">&nbsp;</td>
                <td width="94%" height="23" align="left" valign="middle">ดกห</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">ดกหดกห</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">ดกหด</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">หกดกหด</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">ดกห</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">ดกหด</td>
              </tr>
              <tr>
                <td align="left" valign="middle">&nbsp;</td>
                <td height="23" align="left" valign="middle">ด</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
        </tr>
      </table>
	  <p>&nbsp;</p>
    </div>
	  
<!-- เมนูด้านซ้าย -->
  <p style="clear:both;"></p>
<!-- ปิด เมนูด้านซ้าย -->
	  
  </div>
<div id="footer_front">
	<div class="data_footer">
      <p>
        <?PHP include "footer.php"; ?>
      </p>
      
	</div>
	
</div>
<div style="clear:both;"></div>
	   <!-- End menu -->
</div>
	<!-- end Container -->
</body>
</html>
