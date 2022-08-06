<?php

	spl_autoload_register(function($className) {

		require_once( 'module/' . 
			str_replace(
				'\\' , 
				'/' , 
				str_replace('Elcore' , 'ElcoreLang' , $className)
			) . 
			'.php'
		);

	})

?>