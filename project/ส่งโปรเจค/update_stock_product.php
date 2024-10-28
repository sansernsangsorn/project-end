<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<?PHP
	include "connect_db.php";

$_POST['id_prd'];
$_POST['id_ord'];

$Capital = $_POST['txt_capital'];
$Price = $_POST['txt_price'];
$Num = $_POST['txt_num'];

$sql1 = mysqli_query($con,"SELECT * FROM ".$order_in_detail." WHERE idprd='".$_POST['id_prd']."' AND idord='".$_POST['id_ord']."'");
$rs1 = mysqli_fetch_array($sql1);

$sql2 = mysqli_query($con,"SELECT * FROM ".$product." WHERE prd_id='".$rs1['idprd']."'");
$rs2 = mysqli_fetch_array($sql2);

$stock = $rs2['prd_stock']+$Num;

$sql3 = mysqli_query($con,"UPDATE ".$product." SET prd_capital='".$Capital."', prd_price='".$Price."', prd_stock='".$stock."' WHERE prd_id='".$rs1['idprd']."'");

$sql4 = mysqli_query($con,"UPDATE ".$order_in_detail." SET status='Y', num='".$Num."', capital='".$Capital."', price='".$Price."' WHERE idprd='".$_POST['id_prd']."' AND idord='".$_POST['id_ord']."'");

$sql5 = mysqli_query($con,"SELECT * FROM ".$order_in_detail." WHERE idord='".$_POST['id_ord']."' AND status='N'");
$num5 = mysqli_num_rows($sql5);

if($num5==0){

	$date_now = date("Y-m-d H:i:s", mktime(date("H")+0, date("i")+0, date("s")+0, date("m")+0 , date("d")+0, date("Y")+0));
	
	$sql6 = mysqli_query($con,"UPDATE ".$order_in." SET ordin_status='Y', date_check='".$date_now."' WHERE ordin_id='".$_POST['id_ord']."'");
}

echo "<script>alert('รับสินค้าเข้าร้านสำเร็จ')</script>";
echo "<meta http-equiv='refresh' content='0; url=print_check_ordin?ID=".$_POST['id_ord']."'>";

?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
