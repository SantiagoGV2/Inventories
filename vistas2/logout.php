<?php
	session_destroy();
	
	if(headers_sent()){
		echo "<script> window.location.href='index2.php?vista=login'; </script>";
	}else{
		header("Location: index2.php?vista=login");
	}