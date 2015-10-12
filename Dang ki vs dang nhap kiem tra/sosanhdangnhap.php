<?php
	$tdn = $_POST['tendangnhap'];
	$tk= $_POST['matkhaudangnhap'];
	mysql_connect("localhost","admin1","123456");
	mysql_select_db("admin");
	$traloi = mysql_query("SELECT * FROM dangnhap");
	echo "Chao Mung Trang Admin <br> ";
	while($dulieu=mysql_fetch_array($traloi))
{
	?> 
	<?php
 	if(strcmp($tdn, $dulieu['tenadmin'])==0 )
 		{
 			if(strcmp($tk, $dulieu['mkadmin'])==0)
				 {
				 	echo "<a HREF = 'blog.html'>DANG NHAP THANH CONG  </a>"; 
				 	break;
				 }
			else
				 echo "<font color = 'red'> <a HREF = 'dangnhap2.php'> DANG NHAP THANH CONG (bấm vào đây đê đăng nhập lại) </a> </font>";
		}

		?>
	

	<?php 
}
	

	mysql_close(); // dong lai
?>
