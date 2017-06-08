<?php

class Tag extends FormComponent {

	static $reservedTags = [
			'loop',
			'endloop',
			'option'
		];
	static function isReserved($tag){
		if(in_array(Self::reservedTags, $tag)){
			return true;
		}
		return false;
	}

}