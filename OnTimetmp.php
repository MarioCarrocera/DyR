<?php
include_once("OnTimeAllways.php");
include_once("OnTimeContent.php");
include_once("OnTimeConvert.php");
include_once("OnTimeCripto.php");
include_once("OnTimeDateA.php");
include_once("OnTimeDateB.php");
if (file_exists($base."OnTimeDebugB.php")) {
	include_once("OnTimeDebugB.php");
} else {
	include_once("OnTimeDebug.php");
}
include_once("OnTimeFunctions.php");
include_once("OnTimeValid.php");
include_once("OnTimeCoreA.php");
include_once("OnTimeCoreB.php");
include_once("OnTimeGrpsA.php");
include_once("OnTimeGrpsB.php");
include_once("OnTimeBasicA.php");
include_once("OnTimeBasicB.php");
include_once("OnTimeDDD.php");
include_once("OnTimeRecord.php");
include_once("OTiDyR.php");

/*
include_once("OnTimeTableA.php");
include_once("OnTimeTableB.php");

include_once("OnTimePageA.php");
include_once("OnTimePageB.php");
include_once("OnTimeSessionB.php");
include_once("OTicore.php");
include_once("OTitable.php");
include_once("OTipage.php");
include_once("OTiSes.php");
include_once("OTiSql.php");
include_once("OTiNoSql.php");
include_once("OTiJwg.php");
include_once("OnTimeCoreD.php");
include_once("OnTimeCoreP.php");
include_once("OnTimeGrpsD.php");
include_once("OnTimeBasicD.php");
*/


class OnTime{
	use CoreA, CoreB, GrpsA, GrpsB, BasicA, BasicB, DtDc,Record,OTDyR;
	use Allways, Content, Convert, Cripto, DateA, DateB, Debug, Functions, Valid;
//	use TableA, TableB, PageA, PageB, SessionB, OTCore, OTPage, OTTable, OTSesion, OTNoSql, OTSql, OTJwg; 
//	use CoreD, CoreP, GrpsD, BasicD;

}
?>