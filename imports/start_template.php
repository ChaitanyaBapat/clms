<?php
	function run_start_template ($heading) {
		echo "<!DOCTYPE html>";
		echo "<html>";
		echo "<head>";
		echo "<title>";
		echo $heading;
		echo "</title>";
		//import required links here
		require_once DIR_IMPORTS.'head_links.php';
		echo "</head>";
		echo "<body>";
	}
?>