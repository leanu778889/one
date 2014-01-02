<?php
class ActorModel extends Model{
	public $table = 'actor';
	public function getActorType(){
		return $this->table('type')->field('t_id,t_name')->select();
	}
}
?>