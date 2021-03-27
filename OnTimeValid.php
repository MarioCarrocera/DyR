<?php
trait Valid{
	public $errvalid = array();
	public $datareview = array();
	public $retarr = array();
	public $tstring = ' SKRa';
	public $num = 0;
	public $force = FALSE;
	

	protected function ot_valid($field, $data, $record){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		if ($this->force) {
			return TRUE;
		}
		$this -> errvalid  = [];
		$this -> datareview  = [];
		$this -> retarr  = [];
		$retval = TRUE;
	    $this->num = 0;
		if ($this->ot_exist($record.'rcd','record')) {	    
	    	$keys = 0;
			$read = $this->ot_readif($record.'rcd' , 'record');
			if ( $this->ot_getinside('key',$record.'rcd' , 'record')){
				$keyfield = $this->retval;
				$data = array_merge ($data,array($keyfield=>$field));
				foreach ($read as $key=>$value) {
					$ByField = array_merge ($value['ByRecord'],$value['ByField']);
					$espec = $this->ot_in($key,$data);
					if ($this->retval) {
						$this -> datareview = array_merge ($this -> datareview, array($key => $espec));
						foreach ($ByField as $name => $inner) {
							if ($name=='FldVld'){
								if ($inner['Name']=='lookin') {
									if (!$this->ot_getinside($espec,$inner['content'].'.bas',$inner['in'])) {
										$this -> ot_ae($this->err,$record,$key,$espec);
										$this -> ot_ae('C0010M052',$record,$key,$espec);
									}
								} elseif ($inner['Name']=='minvalue') {
								} elseif ($inner['Name']=='maxvalue') {
								} elseif ($inner['Name']=='betwen') {
								} elseif ($inner['Name']=='just') {
								} else {
									$this -> ot_ae('C0010M051',$record,$key,$espec);
								}
							}
							if ($name=='FldLen') {
							}
							if ($name=='FldEmp') {
								if ($inner) {
									if (empty($espec)) {
										$this -> ot_ae('C0010M050',$record,$key,$espec,'Value');
									}
								}
							}
							if ($name=='FldTpe') {
								if (strpos($this->tstring,$inner)) {
									if ($inner=='K') {
										$keys += 1;
									}
									if (!is_string ( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'String');
								} elseif ($inner=='I'){
									if (!is_int( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Integer');
								} elseif ($inner=='F'){
									if (!is_float( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Float');
								} elseif ($inner=='A'){
									if (!is_array( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Array');
								} elseif ($inner=='B'){
									if (!is_bool( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Bool');
								} elseif ($inner=='D'){
									if (!$this -> DatTmeVal( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Date Time');
								} elseif ($inner=='t'){
									if (!$this -> TmeVal( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Time');
								} elseif ($inner=='d'){
									if (!$this -> DatVal( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Date');
								} elseif ($inner=='V'){
									if (!$this -> DatVal( $espec ))
										$this -> ot_ae($this->err,$record,$key,$espec,'Date');
								} else {
									$this -> ot_ae('C0010M049',$record,$key,$inner);
								}
							}
						}
					} else {
						if (!$ByField['FldEmp']) {
							$this -> ot_ae($this->err,$record,$key);
						}
					}
				}
				foreach ($data as $field=>$value) {
					$espec = $this->ot_in($field,$read);
					if (!$this->retval) {
						$this -> ot_ae('C0010M053',$record,$field,$value,$espec);
					}
				}
				if ($keys<1) {
					ot_ae('C0010M040',$record,$field,$value,$espec);}
				if ($keys>1) {
					ot_ae('C0010M041',$record,$field,$value,$espec);}
			} else {
				ot_ae('C0010M040',$record,$field,$value,$espec);
			}
		} else {
			$this -> ot_ae('C0010M039',$record); 
		}
		
		if (count($this -> errvalid)>0){
			return FALSE;
		} else {
			$this->retarr['key']=$this -> datareview[$keyfield];
			unset($this -> datareview[$keyfield]);
			$this->retarr['record']=$this -> datareview;
			return TRUE;			
		}
	}
	function ot_ae($error,$record,$key = 'N/A',$value='N/A',$spec='N/A'){
		$this -> errvalid[$this->num] = array('Error'=>$error,'Record'=> $record,'field'=> $key,'value'=> $value, 'Spected'=>$spec); 
		$this->num = $this->num+1;	
	}
	function VldStp(){
		if ($this->id='admin'){
			$this -> force = TRUE;
		}
	}
	function VldStr(){
		if ($this->id='admin'){
			$this -> force = FALSE;
		}
	}

}	
