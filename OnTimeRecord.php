<?php
trait Record{	
	function CrtRcd($record, $desc)
	{
		if ($this->ot_can('create','record')) {
			$this->ot_addin($record,$desc,'index.rcd','record');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}	
	function ChgRcd($record, $desc)
	{
		if ($this->ot_can('change','record')) {
			$this->ot_changein($record,$desc,'index.rcd','record');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function RmvRcd($record)
	{
		if ($this->ot_can('remove','record')) {
			$this->ot_deletein($record,'index.rcd','record');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function RcdAddIn($record, $field, $data)
	{
		if ($this->ot_can('change','record')) {
			if ($this->ot_getinside($record,'index.rcd','record')) {
	   			if ($this->ot_getinside($field,'ddd.tas','ddd')){
	   				$rec = array('ByField'=>$this->retval,'ByRecord'=>$data);
					if ($this->retval['FldTpe']=='K') {
						$this->ot_addchangein('key',$field,$record.'.rcd','record');				
	   				}
				   $this->ot_addin($field, $rec, $record.'.rcd','record');
				   $this->ot_addin('record/'.$record.'.rcd', $this->id, $field.'.nrc','ddd');
	   			}			
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function RcdChgIn($record, $field, $data)
	{
		if ($this->ot_can('change','record')) {
			if ($this->ot_getinside($record,'index.rcd','record')) {
				if ($this->ot_getinside($field,'ddd.tas','ddd')) {
					$rec = array('ByField'=>$this->retval,'ByRecord'=>$data);
					if ($this->retval['FldTpe']=='K') {
						$this->ot_addchangein('key',$field,$record.'.rcd','record');
					}
					$this->ot_changein($field, $rec, $record.'.rcd','record');
					$this->ot_changein('record/'.$record.'.rcd', $this->id, $field.'.nrc','ddd');
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function RcdDltIn($record, $field )
	{
		if ($this->ot_can('change','record')) {
			if ($this->ot_getinside($record,'index.rcd','record')) {
				if ($this->ot_getinside($field,'ddd.tas','ddd')) {
					if ($this->retval['FldTpe']=='K') {
						$this->ot_deletein('key',$record.'.rcd','record');
					}
					$this->ot_deletein($field, $record.'.rcd','record');
					$this->ot_deletein('record/'.$record.'.rcd', $this->id, $field.'.nrc','ddd');
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function ShwRecLst()
	{
		if ($this->ot_can('change','record')) {
			$retval = $this->ot_readif('index.rcd','record');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $retval );
		return $retval;
	}

	function ShwRec($record)
	{
		if ($this->ot_can('change','record')) {
			$tmp = $this->ot_readif($record.'.rcd','record');
			$tmp2 = $this->ot_readif($record.'.ntb','record');
			$retval = array('definition'=>$tmp,'in'=>$tmp2);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $retval );
		return $retval;
	}

}
?>