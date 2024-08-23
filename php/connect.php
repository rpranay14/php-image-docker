<?php
$username='root';
$password="rootpassword";
$server="db";
$db='Challenge';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
	?>
<!--	<script>
		alert("yes connect");
	</script>-->
	<?php
}else{
	?>
<!--<script>
		alert("not connect");
	</script>-->
	<?php
	}

 ?>