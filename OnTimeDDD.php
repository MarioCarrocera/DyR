<?php
trait DtDc{
	function DddAddFld($field, $data)
	{
		if ($this->ot_can('create','ddd')) {
			if ($this->ot_valid($field,$data,'ddd')) {
				$this->ot_addin($field,$data,'ddd.tas','ddd');
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	function DddDltFld($field)
	{
		if ($this->ot_can('remove','ddd')) {
			$this->ot_deletein($field,'ddd.tas','ddd');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function DddChgFld($field, $data)
	{
		if ($this->ot_can('change','ddd')) {
			if ($this->ot_valid($field,$data,'ddd')) {
				$this->ot_changein($field,$data,'ddd.tas','ddd');
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function DddGetFld($field)
	{
		if ($this->ot_can('change','ddd')) {
			$this->ot_getinside($field,'ddd.tas',$in);
		}
	}
	
	function ShwDdd()
	{
		$retval=[];
		if ($this->ot_can('change','ddd')) {
			$retval = $this->ot_readif('ddd.tas','ddd');
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $retval );
		return $retval;
	}

	function ShwFld($field)
	{
		$retval=[];
		if ($this->ot_can('change','ddd')) {
			if ($this->ot_safety('ddd','t','ddd')) {
				$tmp = $this->ot_in($field,$this->ot_readif('ddd.tas','ddd'));
				$tmp2 = $this->ot_readif($field.'.nrc','ddd');
				$retval = array('definition'=>$tmp,'in'=>$tmp2);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $retval );
		return $retval;
	}
}
	
	
	
?>