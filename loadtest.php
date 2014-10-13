<?php
	if(isset($_POST['mail'])) {
		$filename = str_replace ( "@" , "at" , "tominari@neskk.co.jp");
		$loaddata = file_get_contents( "data/".$filename."dat");
		print_r(json_encode($loaddata));
	}
?>

