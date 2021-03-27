<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
$AdminPassword='OT2021Free';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "**********+++++++++++ <br> Data dictionary & record Demo <br> **********+++++++++++ <br> <br>";
echo "********** <br> Create Class  <br> ********** <br> <br>";
$demo->ot_error('basic content exist').'<br>';
echo "**********+++++++++++ <br> Conecting like admin <br> **********+++++++++++ <br> <br>";
echo "Connect('admin','OT2021Free') ";
$demo->Connect('admin',$AdminPassword);
echo  "<br>";$demo->ot_error("Connected!!!");echo "<br>";
echo "**********+++++++++++ <br> Data Dictionary <br> **********+++++++++++ <br> <br>";
echo "********** <br> Show Field Types <br> ********** <br> <br>";
echo "********** <br> Create Basic container for data dictionari <br> ********** <br> <br>";
echo "CrtFtrBsc('ddd')) ";
$demo->CrtFtrBsc('ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> Create Field Type Container for data dictionari <br> ********** <br> <br>";
echo "AddCntIn('type','Field Type','ddd') ";
$demo->AddCntIn('type','Field Type','ddd') ;
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> Make Field Type Container public <br> ********** <br> <br>";
echo "PblBscInAdd('type','ddd') ";
$demo->PblBscInAdd('type','ddd') ;
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";
echo "********** <br> Adding Field Type  array in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('A','Array','type','ddd')";
$demo->InsCntIn('A','Array','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type  string in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('S','String','type','ddd')";
$demo->InsCntIn('S','String','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type integer in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('I','Integer','type','ddd')";
$demo->InsCntIn('I','Integer','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type float in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('F','Float','type','ddd')";
$demo->InsCntIn('F','Float','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type date time in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('D','Date Time','type','ddd')";
$demo->InsCntIn('D','Date Time','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type key in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('K','Key Field','type','ddd')";
$demo->InsCntIn('K','Key Field','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Time Stamp in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('T','TimeStamp','type','ddd')";
$demo->InsCntIn('T','TimeStamp','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Time in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('t','Time','type','ddd')";
$demo->InsCntIn('t','Time','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Date in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('d','Date','type','ddd')";
$demo->InsCntIn('d','Date','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Bool in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('B','Logic Value','type','ddd')";
$demo->InsCntIn('B','Logic Value','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Related to in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('R','Relate','type','ddd')";
$demo->InsCntIn('R','Relate','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Adding Field Type Varius types to in data dictionary <br> ********** <br> <br>";
echo "InsCntIn('V','Not defined','type','ddd')";
$demo->InsCntIn('V','Not defined','type','ddd');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Show Field Types <br> ********** <br> <br>";
echo "ShwCntIn('type','ddd') ";
$demo->ot_show($demo->ShwCntIn('type','ddd'));

echo "********** <br> Stop record validation to can modify ddd record <br> ********** <br> <br>";
echo "VldStp() ";
$demo->VldStp();

echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldNme', array('FldTpe'=>'K','FldDsc'=>'Field name'))";
$demo->DddAddFld('FldNme', array('FldTpe'=>'K','FldDsc'=>'Field name'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldDsc', array('FldTpe'=>'S','FldDsc'=>'Field description'))";
$demo->DddAddFld('FldDsc', array('FldTpe'=>'S','FldDsc'=>'Field description'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldTpe', array('FldTpe'=>'R','FldDsc'=>'Field type','FldVld'=>array('Name'=>'lookin','content'=>'type', 'in'=>'ddd')))";
$demo->DddAddFld('FldTpe', array('FldTpe'=>'R','FldDsc'=>'Field type','FldVld'=>array('Name'=>'lookin','content'=>'type', 'in'=>'ddd')));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldVld', array('FldTpe'=>'A','FldDsc'=>'Field validation'))";
$demo->DddAddFld('FldVld', array('FldTpe'=>'A','FldDsc'=>'Field validation'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldLen', array('FldTpe'=>'I','FldDsc'=>'Field length'))";
$demo->DddAddFld('FldLen', array('FldTpe'=>'I','FldDsc'=>'Field length'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldEmp', array('FldTpe'=>'B','FldDsc'=>'Field bool'))";
$demo->DddAddFld('FldEmp', array('FldTpe'=>'B','FldDsc'=>'Field bool'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Create field FlDName in data dictionary <br> ********** <br> <br>";
echo "ShwCntIn('type','ddd') ";
$demo->DddAddFld('FldFmt', array('FldTpe'=>'S','FldDsc'=>'Field format'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Crete field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldCap', array('FldTpe'=>'S','FldDsc'=>'Field caption'))";
$demo->DddAddFld('FldCap', array('FldTpe'=>'S','FldDsc'=>'Field caption'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Crete field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldTtt', array('FldTpe'=>'S','FldDsc'=>'Field tool tip text'))";
$demo->DddAddFld('FldTtt', array('FldTpe'=>'S','FldDsc'=>'Field tool tip text'));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Crete field FlDName in data dictionary <br> ********** <br> <br>";
echo "DddAddFld('FldDfl', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))";
$demo->DddAddFld('FldDfl', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Star record validation after modify ddd record <br> ********** <br> <br>";
echo "VldStr() ";
$demo->VldStr();

echo "********** <br> Show Data Dictionary<br> ********** <br> <br>";
echo "ShwDdd() ";
$demo->ot_show($demo->ShwDdd());
echo "********** <br> Show Field<br> ********** <br> <br>";
echo "ShwFld('FldTpe') ";
$demo->ot_show($demo->ShwFld('FldTpe'));


echo "********** <br> Create record <br> ********** <br> <br>";
echo "CrtRcd('ddd','Data Dictionary')";
$demo->CrtRcd('ddd','Data Dictionary');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";


echo "********** <br> Add Field to record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldNme', array('FldEmp'=>FALSE))";
$demo->RcdAddIn('ddd','FldNme', array('FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Add Field to  record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldDsc', array('FldEmp'=>FALSE))";
$demo->RcdAddIn('ddd','FldDsc', array('FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Add Field to  record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldTpe', array('FldLen'=>1,'FldEmp'=>FALSE)";
$demo->RcdAddIn('ddd','FldTpe', array('FldLen'=>1,'FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Add Field to  record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldVld', array('FldEmp'=>TRUE))";
$demo->RcdAddIn('ddd','FldVld', array('FldEmp'=>TRUE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Add Field to  record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldLen', array('FldLen'=>10,'FldEmp'=>TRUE))";
$demo->RcdAddIn('ddd','FldLen', array('FldLen'=>10,'FldEmp'=>TRUE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";
echo "********** <br> Add Field to  record <br> ********** <br> <br>";
echo "RcdAddIn('ddd','FldEmp', array('FldLen'=>10,'FldEmp'=>TRUE)";
$demo->RcdAddIn('ddd','FldEmp', array('FldLen'=>10,'FldEmp'=>TRUE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> Show record list <br> ********** <br> <br>";
echo "ShwRecLst() ";
$demo->ot_show($demo->ShwRecLst());

echo "********** <br> Show record  <br> ********** <br> <br>";
echo "ShwRec('FldTpe') ";
$demo->ot_show($demo->ShwRec('FldTpe'));

echo "********** <br> Get  record information  <br> ********** <br> <br>";
echo "ShwRec('FldTpe') ";
$demo->ot_show($demo->ShwRec('FldTpe'));


echo "********** <br> Create field sample with validation record Active <br> ********** <br> <br>";
echo "DddAddFld('sample', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))";
$demo->DddAddFld('sample', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> change field sample with validation record Active <br> ********** <br> <br>";
echo "DddChgFld('sample', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))";
$demo->DddChgFld('sample', array('FldTpe'=>'V','FldDsc'=>'Other value','FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> Delete field sample with validation record Active <br> ********** <br> <br>";
echo "DddDltFld('sample')";
$demo->DddDltFld('sample');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";


echo "********** <br> Create sample record <br> ********** <br> <br>";
echo "CrtRcd('sample','Record Sample')";
$demo->CrtRcd('sample','Record Sample');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";


echo "********** <br> change sample record <br> ********** <br> <br>";
echo "ChgRcd('sample','New Desc')";
$demo->ChgRcd('sample','New Desc');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> Add Field to record <br> ********** <br> <br>";
echo "RcdAddIn('sample','FldNme', array('FldEmp'=>FALSE))";
$demo->RcdAddIn('sample','FldNme', array('FldEmp'=>FALSE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> change Field to record <br> ********** <br> <br>";
echo "RcdChgIn('sample','FldNme', array('FldEmp'=>TRUE))";
$demo->RcdChgIn('sample','FldNme', array('FldEmp'=>TRUE));
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";

echo "********** <br> delete Field to record <br> ********** <br> <br>";
echo "RcdDltIn('sample','FldNme')";
$demo->RcdDltIn('sample','FldNme');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";




echo "********** <br> delete sample record <br> ********** <br> <br>";
echo "RmvRcd('sample','Record Sample')";
$demo->RmvRcd('sample','New Desc');
echo  "<br>";$demo->ot_error("Created!!!");echo "<br>";



echo "**********+++++++++++ <br> Demo Finish<br> **********+++++++++++ <br> <br>";
?>
