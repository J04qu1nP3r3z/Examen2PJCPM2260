<?php
	function AutoLoad($class){
		require_once($class.".php");
	}
        spl_autoload_register("Autoload");
?>