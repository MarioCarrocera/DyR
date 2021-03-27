<?php
trait OTDyR{

	function InstallDDD()
	{
		$name='ddd';
		$this->ot_create($name);
		$this->ot_addchangein('admin','owner','users.json',$name);
		$this->ot_addchangein($name,$name,'features.json');
		$this->ot_addchangein($name,'owner','features.json','usr/admin');
		$this->ot_addchangein($name,array('Name'=>'Data dictionary feature','limit'=>0,'OnUse'=>0),'container.json');
		$this->ot_array(array('nick'=>$name,'name'=>'Data dictionary feature'), 'admin.json', TRUE,$name);

		$name='record';
		$this->ot_create($name);
		$this->ot_addchangein('admin','owner','users.json',$name);
		$this->ot_addchangein($name,$name,'features.json');
		$this->ot_addchangein($name,'owner','features.json','usr/admin');
		$this->ot_addchangein($name,array('Name'=>'Record feature','limit'=>0,'OnUse'=>0),'container.json');
		$this->ot_array(array('nick'=>$name,'name'=>'Record feature'), 'admin.json', TRUE,$name);

		$this-> ErrAdd('C0010M049',"Unkwow field type");
		$this-> ErrAdd('C0010M050',"Not value suplied");
		$this-> ErrAdd('C0010M051',"Unkwow falidation");
		$this-> ErrAdd('C0010M052',"Validation fail");
		$this-> ErrAdd('C0010M053',"Field not in record");	
	}
}
?>