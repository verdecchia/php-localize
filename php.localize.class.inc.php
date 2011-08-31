<?php

class Localize {
	
	//language
	private $translations = NULL;
	private $languageFile = NULL;
	
	//file
	private $filePrefix = "string";
	private $filePrefixSeparator = "-";
	private $fileExtension = "json";
	
	
	
	function __construct($language){
			
		$this->languageFile =  $this->filePrefix . $this->filePrefixSeparator . $language . '.' . $this->fileExtension;
		
		$lang_file_content = file_get_contents($this->languageFile);
		$this->translations = json_decode($lang_file_content, true);
		
	}
	
	function get($phrase){
		$result = $this->translations[$phrase];
		
		if(empty($result)){
			$result = $phrase;
			
		}
		
		return $result;
		
		/*
		return $this->translations[$phrase];
		*/
	}
	
	
	
}








?>