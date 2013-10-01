<?php 

class HTMLElement{

	protected $tag = "div";

	public function __construct($content){
		$this->content = $content;
	}

	public function __toString(){
		return (string) "<{$this->tag}>$this->content</{$this->tag}>";
	}
}


class Heading extends HTMLElement{
	public function __construct($content, $level = 2){
		$this->content = $content;
		$this->tag = "h".$level;
	}
}

class Paragraph extends HTMLElement{
	public function __construct($content){
		$this->content = $content;
		$this->tag = "p";
	}
}