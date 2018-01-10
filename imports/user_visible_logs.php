<?php
	function console_log ($string) {
		echo "<script>";
		echo "console.log('$string')";
		echo "</script>";
		return;
	}
	function display_error($string) {
		if(!SUPRESS_CUSTOM_ERRORS) {
			echo "<br>";
			echo $string;
			echo "<br>";
		}
	}
?>