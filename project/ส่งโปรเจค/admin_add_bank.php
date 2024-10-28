<?php 
include "session_admin.php";
include "function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
</head>
<body id="Page4">
<div id="container">
  <div id="bander_back">
    <?PHP include "bander_back.php"; ?>
    <div id="menu_top">
     	 <p>
       	 <?PHP include "menu_top2.php"; ?>
      	</p>
    </div>
  </div>
  
 <div class="menu_left"><!-- เมนูด้านซ้าย -->
	<?PHP  include "menu_left_back.php"; ?>
  </div><!-- จบเมนูด้านซ้าย --> 

<div class="data_center"><!-- ส่วนกลางของเว็บ -->
	<div class="data_center_back">
	  <table width="100%" height="850" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left" valign="top">
                <div class="title">
                    <h2><img src="images/plus_48.png" width="48" height="48" />เพิ่มข้อมูลธนาคาร</h2>
                </div>
				<p>&nbsp;</p>				
				<form action="<?PHP $_SERVER['PHP_SELF']?>" method="post" name="form1" id="form1" enctype="multipart/form-data" onsubmit="return chk_txt();" >
				                    <script language="JavaScript" type="text/javascript">
				  	function chk_txt(){
							if(document.form1.txt_bank.value==""){
									alert("กรุณากรอก ชื่อธนาคาร ด้วยนะ");
									document.form1.txt_bank.focus();
									return false;
							}
							else if(document.form1.txt_name.value==""){
									alert("กรุณากรอก ชื่อบัญชี ด้วยนะ");
									document.form1.txt_name.focus();
									return false;
							}
							else if(document.form1.txt_num.value==""){
									alert("กรุณากรอก เลขที่บัญชี ด้วยนะ");
									document.form1.txt_num.focus();
									return false;
							}
							else if(document.form1.txt_branch.value==""){
									alert("กรุณากรอก สาขาธนาคาร ด้วยนะ");
									document.form1.txt_branch.focus();
									return false;
							}
								else {
									return true;
							}
						
					}
				  </script>
				                    <table width="99%" border="0">
                                      <tr>
                                        <td width="20%" height="22" align="right" valign="middle"><strong>ชื่อธนาคาร :</strong></td>
                                        <td width="80%" height="22" align="left" valign="middle"><input name="txt_bank" type="text"  id="txt_bank" accesskey="p" style="width: 250px;" /></td>
                                      </tr>
                                      <tr>
                                        <td height="22" align="right" valign="middle"><strong>ชื่อบัญชี :</strong></td>
                                        <td height="22" align="left" valign="middle"><input name="txt_name" type="text"  id="txt_name"  style="width: 250px;" accesskey="p" /></td>
                                      </tr>
                                      <tr>
                                        <td height="22" align="right" valign="middle"><strong>เลขที่บัญชี :</strong></td>
                                        <td height="22" align="left" valign="middle"><input name="txt_num" type="text" id="txt_num"  style="width: 250px;" accesskey="p" maxlength="10" /></td>
                                      </tr>
                                      <tr>
                                        <td height="22" align="right" valign="middle"><strong>ขาสา :</strong></td>
                                        <td height="22" align="left" valign="middle"><input name="txt_branch" type="text"  id="txt_branch" accesskey="p" style="width: 250px;" /></td>
                                      </tr>
                                      <tr>
                                        <td height="22" align="right" valign="middle"><strong>รูปธนาคาร : </strong></td>
                                        <td height="22" align="left" valign="middle"><input name="FileUpload" type="file" id="FileUpload" size="45" /></td>
                                      </tr>
                                      <tr>
                                        <td height="22" align="right" valign="middle">&nbsp;</td>
                                        <td height="22" align="left" valign="middle">
										<input type="submit" name="btnSubmit" id="btnSubmit" value="บันทึกข้อมูล" />
                     					 <input type="reset" name="btnSubmit2" id="btnSubmit2" value="ยกเลิก" />										 </td>
                                      </tr>
                                    </table>
				                    
				</form>
				<div class="title">
                    <h2><img src="images/diagram-14.png" width="48" height="48" />ข้อมูลธนาคาร</h2>
                </div>
				<p>&nbsp;</p>				
				<table border="0" cellpadding="0" cellspacing="0" style="border-top: 0px solid #eee; width:100%; padding:0px; margin:0px;">
                  <tr>
                    <td align="left" valign="middle"><?php
//ติดต่อฐานข้อมูล
include "connect_db.php";

//
if(!isset($start)){
$start = 0;
}
$limit = 5;//$NUMMAX; // แสดงผลหน้าละกี่หัวข้อ
$Search = trim($_POST['txtSearch']); //ตัดซ่องวางของสตริง

	$Qtotal = mysqli_query($con,"SELECT * FROM  ".$bank.""); //คิวรี่ คำสั่ง
	$total = mysqli_num_rows($Qtotal); // หาจำนวน record 
	$Query = mysqli_query($con,"SELECT * FROM ".$bank." ORDER BY bn_id DESC LIMIT $start,$limit"); //คิวรี่คำสั่ง

$totalp = mysqli_num_rows($Query); // หาจำนวน record ที่เรียกออกมา
$page = ceil($total/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า
//
$cols = 1; 
$c = $cols;
?>
                        <table style="width: 100%; ">
                          <tr>
                            <?php
while($result = mysqli_fetch_array($Query)){
$detail_product = substr($result['prd_detail'], 0, 70) . "";
$c --;2
?>
                            <td align="left" valign="top" id="prd_bottom"><div id="prd_photo" style="width: 55px;">
                                <?PHP
			 // ถ้ามีรูปสินค้าให้แสดง แต่ถ้าไม่มีให้ แสดงภาพรอรูป
			  if(!$result['bn_photo']==""){ ?>
                                <a href="Product/<?=$result['bn_photo']?>" rel="lightbox" title="<?=$result['bn_bank']?>" > <img  class="photo" src="Product/<?=$result['bn_photo']?>" width="48" height="48" border="0" /> </a>
                                <?php }else{ ?>
                                <a href="images/photo.jpg" rel="lightbox" title="รอรูปสินค้า" > <img class="photo" src="images/photo.jpg" width="48" height="48" border="0" /> </a>
                                <?php } ?>
                              </div>
                                <div id="prd_line_height">
                                  <ul id="prd_ul" style="margin-left: 70px;">
                                    <li><strong>ธนาคาร</strong> :
                                      <?=$result['bn_bank']?>
                                    </li>
                                    <li><strong>ชื่อบัญชี</strong> :
                                      <?=$result['bn_name']?>
                                      | <strong>เลขที่บัญชี</strong> :
                                      <?=$result['bn_number']?>
                                      | <strong>สาขา</strong> :
                                      <?=$result['bn_branch']?>
                                    </li>
                                    <li style="padding-top:5px;">
									<a href="edit_bank.php?m_page=<?=$_GET['m_page']?>&ID=<?=$result['bn_id']?>">แก้ไข</a> | 
									<a href="del_bank.php?m_page=<?=$_GET['m_page']?>&ID=<?=$result['bn_id']?>"  onclick="return confirm('ยืนยัน การลบข้อมูลธนาคาร <?=$result['bn_bank']?> ออกจากระบบ')"> ลบ </a>
									</li>
                                  </ul>
                                </div></td>
                            <?php
	if($c == 0) {
	$c = $cols;
?>
                          </tr>
                          <?php } } ?>
                      </table></td>
                  </tr>
                </table>
				<p><span style="padding-top:10px;">
                  <?php  
		if($total ==0){
			echo "<p style='color: red; font-size: 20px;'>ไม่มีข้อมูล</p>";
		}else{
		//echo "<hr>";
		$i=1;
		echo "<center>";
		//echo "หน้าแรก";
		echo "<ul id='ulBangNa' style='text-align: left;'>
				<li>
		";

		echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'><B>หน้าแรก</B></a>";
		echo "</li>";
		echo "<li id='liBangNa'>";
		for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'><B id='onHoverN''>$i</B></a>"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'>$i</a>"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}  
echo "</li>";
echo "<li>";
//echo "หน้าสุดท้าย";
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-2)."&page=$i' style='border:0px;'><b>หน้าสุดท้าย</b></a>";
	
echo "
		</li>
		</ul>
		";
echo "</center>";
}
?>
                </span></p>				<p>&nbsp;</p></td>
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
        <span style="padding-top:30px; text-align:center; font-size:11px; ">
        <?PHP
if($_POST){
	//ติดต่อฐานข้อมูล
	include "connect_db.php";
		
	$FileName 	= $_FILES['FileUpload'] ['name'];
	$Filetype 		= $_FILES['FileUpload'] ['type'];
	$FileSize 		= $_FILES['FileUpload'] ['size'];
	$FileUpLoadtmp = $_FILES['FileUpload'] ['tmp_name'];
			
if($FileUpLoadtmp){					 
	$array_last = explode(".",$FileName); // เป็น array หาจำนวน จุด . ของชื่อตัวแปร์		
	$c = count($array_last) - 1; //นับจำนวน จุด "." ของชื่อตัวแปร์ 
	$lname = strtolower($array_last [$c]); // หา นามสกุลไฟล์ ตัวสุดท้ายของ ตัวแปร์
	$NewFileupload = date("U"); 
	$NewFile = $NewFileupload.".$lname"; //รวม ชื่อและนามสกลุดไฟล์เข้าด้วยกัน 
	}

//เพิ่มข้อมูลลงในตาราง
$Str = "INSERT INTO ".$bank." VALUES "
		."(0,
		'".$_POST['txt_bank']."', 
		'".$_POST['txt_name']."',
		'".$_POST['txt_num']."',
		'".$_POST['txt_branch']."',
		'".$NewFile."')";
		
$sql_add = mysqli_query($con,$Str);


if($sql_add){ //ถ้าเพิ่มข้อมูลได้ให้ตรวจสอบไฟล์ นามสกุล ดอท gif , jpg, jpeg, png แล้ว move ลงในโฟลเด้อ Product
			
		if($lname=="gif" or $lname=="jpg" or $lname=="jpeg" or $lname=="png"){
				//Upload File รูปภาพลงในโฟลเดอร์  Table
				$UploadFile = move_uploaded_file($FileUpLoadtmp, "Product/".$NewFile);					
			}	
			
			   echo "<script>alert('บันทึกข้อมูลเสร็จแล้ว')</script>";
			   echo "<meta http-equiv='refresh' content='0; url=admin_add_bank.php?m_page=3'>";
			}else{
			   echo "<script>alert('error: บันทึกข้อมูลไม่ได้')</script>";
			   echo "<meta http-equiv='refresh' content='0; url=admin_add_bank.php?m_page=3'>";
		}		
}

?>
      </span></p>
      
	</div>
	
</div>
<div style="clear:both;"></div>
	   <!-- End menu -->
</div>
	<!-- end Container -->
</body>
</html>
