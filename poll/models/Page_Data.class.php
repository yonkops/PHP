<?php
class Page_Data {
	public $title = "";
	public $content = "";
	public $css = "";
	public $embeddedStyle = "";
	public $scriptElements ="";
//declare new method
	public function addScript ( $src ) {
		$this->scriptElements .= "<script src='$src'></script>";
	}
	public function addCSS ( $href ) {
		$this->css .= "<link href='$href' rel='stylesheet' />";
	}
}
?>