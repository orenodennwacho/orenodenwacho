<?php
	if(isset($_POST['mail'])) {
		$filename = str_replace ( "@" , "at" , $_POST['mail']);
		$fp = fopen("data/".$filename."dat", "w+");
  	fwrite($fp, $_POST["example"]);
	}
	print_r($_POST["example"]);
?>
