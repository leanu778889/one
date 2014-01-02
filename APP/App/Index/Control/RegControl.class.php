<?php
class RegControl extends CommonControl{
	public function __auto(){
		$this->db = K('actor');
	}
	public function index(){
		$this->display();
	}
	public function yy_register(){
		if(IS_POST === true){
			p($_POST);
			exit;
		}
		$type = $this->db->getActorType();
		$this->assign('type',$type);
		$this->display();
	}
}
?>