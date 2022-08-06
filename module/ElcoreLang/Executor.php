<?php

	namespace Elcore;

	class Executor {

		public function __construct() {

		}

		public function compile($sourceDir , $outputFile) {
			$manifest = array(
				'packages' => [] , 
				'buildTime' => date("Y-m-d H:i:s") , 
				'assets' => []
			);

			$packages = glob($sourceDir . "/*/*" , GLOB_ONLYDIR);

			foreach($packages as $package) {
				$manifest['packages'][] = str_replace(
					'/' , 
					'.' , 
					str_replace($sourceDir . '/' , '' , $package)
				);
			}

			@mkdir("build");

			file_put_contents("build/.manifest", json_encode($manifest));



			echo '<pre>';
			var_dump($manifest);
			die();
		}	

	}

?>