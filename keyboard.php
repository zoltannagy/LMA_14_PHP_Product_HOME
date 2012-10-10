<?php
	class Keyboard extends Product{
	private $language="";
	private $multimedia=false;
	private $wireless=false;
	private $color="";
	private $connect=array();
	
	public function __construct($name,$brand,$specification,$price,$store,$description,$guarantee,$language,$multimedia,$wireless,$color,$connect){
		parent::__construct($name,$brand,$specification,$price,$store,$description,$guarantee);
		$this->setLanguage($language);
		$this->setMultimedia($multimedia);
		$this->setWireless($wireless);
		$this->setColor($color);
		$this->setConnect($connect);
		}
	 
	public function getLanguage() { return $this->language; } 
	public function getMultimedia() { return $this->multimedia; } 
	public function getWireless() { return $this->wireless; } 
	public function getColor() { return $this->color; } 
	public function getConnect() { return $this->connect; }
	 
	protected function getLanguage($language) { $this->language=$language; } 
	protected function getMultimedia($multimedia) { $this->multimedia=$multimedia; } 
	protected function getWireless($wireless) { $this->wireless=$wireless; } 
	protected function getColor($color) { $this->color=$color; } 
	protected function getConnect($connect) { $this->connect=$connect; }
	
	public function __toString(){
			return parent::__toString()."<br/>".
				   "Kapacitás: ".$this->getCapacity()." MB<br/>".
				   "Fordulatszám: ".$this->getRpm()." RPM<br/>".
				   "Elhelyezkedés: ".$this->getExternal()."<br/>".
				   "Méret: ".$this->getSize()." inch<br/>".
				   "Csatlakozások: ".$this->getConnect()."<br/><br/>";
			}
	 
 }

?>