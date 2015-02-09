<?php
$con=mysqli_connect('localhost','root','','dwa');
if (mysqli_connect_errno()) {
	echo 'Neuspjelo povezivanje s bazom';
	exit();
}
mysqli_select_db($con, 'pacijenti');
$query="SELECT COUNT(*) FROM ime";
$res1=mysqli_query($con, $query);
$row1=mysqli_fetch_row($res1);
$svi= $row1[0];
$query2="select COUNT(*) FROM ime WHERE spol='M'";
$res2=mysqli_query($con, $query2);
$row2=mysqli_fetch_row($res2);
$male=$row2[0];
mysqli_close($con);
$data=array($svi-$male,$male);
$total=array_sum($data);
for($i=0;$i<count($data);$i++)
	$arc[$i]=$data[$i]*360/$total;    
$image = imagecreatetruecolor(200, 200);

$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred = imagecolorallocate($image, 0x90, 0x00, 0x00);

/* for ($i = 60; $i > 50; $i--) {
imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
} */
$m=0;
$z=3;
$uk=($m+$z);
$mm=($m/$uk)*100*3.6;



imagefilledarc($image, 100, 100, 200, 200, 0, $mm, $white, IMG_ARC_PIE);
imagefilledarc($image, 100, 100, 200, 200, $mm, 0, $red, IMG_ARC_PIE);
/* imagefilledarc($image, 100, 100, 200, 200, 0, $zz, $red, IMG_ARC_PIE); */
/* imagefilledarc($image, 50, 50, 100, 50, 45, 75 , $gray, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE); */


header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>

