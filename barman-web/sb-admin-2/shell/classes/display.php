<?php

class Display {
	//Implementa função erro
	function erro(){
		include ("error.php");
	}
	//Abre o cabeçalho do site
	function display_header(){
		include ("inc/header.php");
	}
	function display_menu(){
		include ("inc/menu.php");
	}
	function display_footer(){
		include ("inc/footer.php");
	}
}
?>

