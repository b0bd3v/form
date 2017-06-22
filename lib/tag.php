<?php

class Tag extends FormComponent {

	private $reservedTags = [
			'loop',
			'endloop',
			'option'
		];

	public function __construct($tag){
		$this->tag = $tag;
	}		

	function isReserved(){
		if(in_array($this->reservedTags, $this->tag)){
			return true;
		}
		return false;
	}

	public function getLabel()
	{
		return  ucfirst(str_replace('{{', '', str_replace('}}', '', $this->tag)));
	}

}