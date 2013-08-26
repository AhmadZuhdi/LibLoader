<?php

	
	class LibLoaderSetting{

		var $Folder = [];
		var $auto_create_folder = false;

	}

	class libloader extends LibLoaderSetting{

		var $ListFile = [];
		var $JSFile = [];
		var $CSSFile = [];

		var $JSContent = [];
		var $CSSContent = [];

		function load(){

			$this->checkFolder();

			$this->LoadAllFile();

			foreach($this->ListFile as $key => $value):

				foreach($value as $_key => $_value):

					$this->checkExtFile($_value);

				endforeach;

			endforeach;

			foreach($this->CSSFile as $key => $value):

				$this->CSSContent[] = $this->getFileContent($value);

			endforeach;

			foreach ($this->JSFile as $key => $value) :
				
				$this->JSContent[] = $this->getFileContent($value);

			endforeach;

			if(file_exists('lib\libloader.js')):

				unlink('lib\libloader.js');

				(!file_exists('lib')) ? mkdir('lib') : "";

				$fh = fopen('lib\libloader.js','a');

				foreach($this->JSContent as $key => $value):

					fwrite($fh, $value);

				endforeach;

				fclose($fh);

			else:

				(!file_exists('lib')) ? mkdir('lib') : "";

				$fh = fopen('lib\libloader.js','a');

				foreach($this->JSContent as $key => $value):

					fwrite($fh, $value);

				endforeach;

				fclose($fh);

			endif;

			if(file_exists('lib\libloader.css')):

				unlink('lib\libloader.css');

				(!file_exists('lib')) ? mkdir('lib') : "";

				$fh = fopen('lib\libloader.css','a');

				foreach($this->CSSContent as $key => $value):

					fwrite($fh, $value);

				endforeach;

				fclose($fh);

			else:

				(!file_exists('lib')) ? mkdir('lib') : "";

				$fh = fopen('lib\libloader.css','a');

				foreach($this->CSSContent as $key => $value):

					fwrite($fh, $value);

				endforeach;

				fclose($fh);

			endif;

			$loader = '<link rel="stylesheet" type="text/css" href="lib/libloader.css" />';

			$loader .= '<script type="text/javascript" src="lib/libloader.js"></script>';

			return $loader;

		}

		function checkFolder(){

			foreach ($this->Folder as $key => $value):

				if(!file_exists($value)):

					if($this->auto_create_folder == true):

						mkdir($value);

					endif;

				endif;

			endforeach;

		}

		function loadAllFile(){

			$i = 0;

			foreach ($this->Folder as $key => $value):

				$Folder = $this->Folder[$i];

				$File = scandir($value);

				array_splice($File, 0,2);

				foreach($File as $_key => $_value):

					$_File[] = $Folder.$_value;

				endforeach;

				$this->ListFile[] = $_File;

				$i++;

			endforeach;

		}

		function checkExtFile($File){

			$sFile = explode('.', $File);

			$ext = strtolower(array_pop($sFile));

			switch ($ext) :

				case 'css':
					
					$this->CSSFile[] = $File;

					break;
				
				case 'js':

					$this->JSFile[] = $File;

					break;

				default:
					# code...
					break;

			endswitch;

		}

		function getFileContent($File){

			return file_get_contents($File);

		}

	}


?>