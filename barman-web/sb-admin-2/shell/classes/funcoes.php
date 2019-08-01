<?php
require ("display.php");
class Funcoes extends Display{
	function seguranca($cmd=null, $negadas = array('0' => 'rm ', '1' => 'cp ', '2' => 'mv ')){
		$cmd = strtolower ($cmd);
		for($i = 0; $i < count($negadas); $i++){
			$p = strpos($cmd,$negadas[$i]);
			if($p !== false)
				return false;
		}
		return true;
	}
}
?>


