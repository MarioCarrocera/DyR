Trait DDD & Record for ontime

The OnTime framework is designed to be modular, scalable and comprehensive, so that each new feature integrates without difficulty and maintains a unique class definition (OnTime) and all "additional classes" are "trait" that enrich it, in such a way that an integrated system is obtained, not separate programs which do not necessarily have to behave correctly together.
This trait will be need if you wan have advanced and complex tables

Installation in test environment:

1.- Copy all the files in the directory where was instaled ontrime core

2.- With the browser of your preference, locate the directory and enter it

3.- Execute the OntimeInstallerDyR.php file

4.- When executing the file,  the files where moved and the required environment was created

Recommendations:

If you know how to create a subdomain that points to the "demo" directory, it is more comfortable and realistic.

After install

When installing, the necessary environment is defined to define access security, I create a User called "Admin" and that his password is "OT2021Free", this environment left the class prepared for definitions of the data dictionary and records. 

Also include basic validation, like the existence of a field in a basic content feature, field tYpe and field empty, when you define a record validate that just have a key field, but someone is included, validate that all the fields includes in the data suply exist on the record, and if a field in the record, is missing in the data suply have empty option.

The data supply must satisfy the validation in the record and datadictonaty definition

mario.carrocera@hotmail.com

**********+++++++++++
Data dictionary & record Demo
**********+++++++++++

**********
Create Class
**********

basic content exist
**********+++++++++++
Conecting like admin
**********+++++++++++

Connect('admin','OT2021Free')
Connected!!!

**********+++++++++++
Data Dictionary
**********+++++++++++

**********
Show Field Types
**********

**********
Create Basic container for data dictionari
**********

CrtFtrBsc('ddd'))
Created!!!

**********
Create Field Type Container for data dictionari
**********

AddCntIn('type','Field Type','ddd')
Created!!!

**********
Make Field Type Container public
**********

PblBscInAdd('type','ddd')
Asigned!!!

**********
Adding Field Type array in data dictionary
**********

InsCntIn('A','Array','type','ddd')
Created!!!

**********
Adding Field Type string in data dictionary
**********

InsCntIn('S','String','type','ddd')
Created!!!

**********
Adding Field Type integer in data dictionary
**********

InsCntIn('I','Integer','type','ddd')
Created!!!

**********
Adding Field Type float in data dictionary
**********

InsCntIn('F','Float','type','ddd')
Created!!!

**********
Adding Field Type date time in data dictionary
**********

InsCntIn('D','Date Time','type','ddd')
Created!!!

**********
Adding Field Type key in data dictionary
**********

InsCntIn('K','Key Field','type','ddd')
Created!!!

**********
Adding Field Type Time Stamp in data dictionary
**********

InsCntIn('T','TimeStamp','type','ddd')
Created!!!

**********
Adding Field Type Time in data dictionary
**********

InsCntIn('t','Time','type','ddd')
Created!!!

**********
Adding Field Type Date in data dictionary
**********

InsCntIn('d','Date','type','ddd')
Created!!!

**********
Adding Field Type Bool in data dictionary
**********

InsCntIn('B','Logic Value','type','ddd')
Created!!!

**********
Adding Field Type Related to in data dictionary
**********

InsCntIn('R','Relate','type','ddd')
Created!!!

**********
Adding Field Type Varius types to in data dictionary
**********

InsCntIn('V','Not defined','type','ddd')
Created!!!

**********
Show Field Types
**********

ShwCntIn('type','ddd')
1D.- A=>Array
1D.- S=>String
1D.- I=>Integer
1D.- F=>Float
1D.- D=>Date Time
1D.- K=>Key Field
1D.- T=>TimeStamp
1D.- t=>Time
1D.- d=>Date
1D.- B=>Logic Value
1D.- R=>Relate
1D.- V=>Not defined
**********
Stop record validation to can modify ddd record
**********

VldStp() **********
Create field FlDName in data dictionary
**********

DddAddFld('FldNme', array('FldTpe'=>'K','FldDsc'=>'Field name'))
Created!!!

**********
Create field FlDName in data dictionary
**********

DddAddFld('FldDsc', array('FldTpe'=>'S','FldDsc'=>'Field description'))
Created!!!

**********
Create field FlDName in data dictionary
**********

DddAddFld('FldTpe', array('FldTpe'=>'R','FldDsc'=>'Field type','FldVld'=>array('Name'=>'lookin','content'=>'type', 'in'=>'ddd')))
Created!!!

**********
Create field FlDName in data dictionary
**********

DddAddFld('FldVld', array('FldTpe'=>'A','FldDsc'=>'Field validation'))
Created!!!

**********
Create field FlDName in data dictionary
**********

DddAddFld('FldLen', array('FldTpe'=>'I','FldDsc'=>'Field length'))
Created!!!

**********
Create field FlDName in data dictionary
**********

DddAddFld('FldEmp', array('FldTpe'=>'B','FldDsc'=>'Field bool'))
Created!!!

**********
Create field FlDName in data dictionary
**********

ShwCntIn('type','ddd')
Created!!!

**********
Crete field FlDName in data dictionary
**********

DddAddFld('FldCap', array('FldTpe'=>'S','FldDsc'=>'Field caption'))
Created!!!

**********
Crete field FlDName in data dictionary
**********

DddAddFld('FldTtt', array('FldTpe'=>'S','FldDsc'=>'Field tool tip text'))
Created!!!

**********
Crete field FlDName in data dictionary
**********

DddAddFld('FldDfl', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))
Created!!!

**********
Star record validation after modify ddd record
**********

VldStr() **********
Show Data Dictionary
**********

ShwDdd()
1.- FldNme :

2D.- FldTpe=>K
2D.- FldDsc=>Field name
1.- FldDsc :

2D.- FldTpe=>S
2D.- FldDsc=>Field description
1.- FldTpe :

2D.- FldTpe=>R
2D.- FldDsc=>Field type
2.- FldVld :

3D.- Name=>lookin
3D.- content=>type
3D.- in=>ddd
1.- FldVld :

2D.- FldTpe=>A
2D.- FldDsc=>Field validation
1.- FldLen :

2D.- FldTpe=>I
2D.- FldDsc=>Field length
1.- FldEmp :

2D.- FldTpe=>B
2D.- FldDsc=>Field bool
1.- FldFmt :

2D.- FldTpe=>S
2D.- FldDsc=>Field format
1.- FldCap :

2D.- FldTpe=>S
2D.- FldDsc=>Field caption
1.- FldTtt :

2D.- FldTpe=>S
2D.- FldDsc=>Field tool tip text
1.- FldDfl :

2D.- FldTpe=>V
2D.- FldDsc=>Default Value
2D.- FldEmp=>
**********
Show Field
**********

ShwFld('FldTpe')
**********
Create record
**********

CrtRcd('ddd','Data Dictionary')
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldNme', array('FldEmp'=>FALSE))
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldDsc', array('FldEmp'=>FALSE))
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldTpe', array('FldLen'=>1,'FldEmp'=>FALSE)
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldVld', array('FldEmp'=>TRUE))
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldLen', array('FldLen'=>10,'FldEmp'=>TRUE))
Created!!!

**********
Add Field to record
**********

RcdAddIn('ddd','FldEmp', array('FldLen'=>10,'FldEmp'=>TRUE)
Created!!!

**********
Show record list
**********

ShwRecLst()
1D.- ddd=>Data Dictionary
**********
Show record
**********

ShwRec('FldTpe')
1.- definition :

1.- in :

**********
Get record information
**********

ShwRec('FldTpe')
1.- definition :

1.- in :

**********
Create field sample with validation record Active
**********

DddAddFld('sample', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))

C0010M008.-Error not defined

**********
change field sample with validation record Active
**********

DddChgFld('sample', array('FldTpe'=>'V','FldDsc'=>'Default Value','FldEmp'=>FALSE))

C0010M008.-Error not defined

**********
Delete field sample with validation record Active
**********

DddDltFld('sample')

C0010M008.-Error not defined

**********
Create sample record
**********

CrtRcd('sample','Record Sample')
Created!!!

**********
change sample record
**********

ChgRcd('sample','New Desc')
Created!!!

**********
Add Field to record
**********

RcdAddIn('sample','FldNme', array('FldEmp'=>FALSE))
Created!!!

**********
change Field to record
**********

RcdChgIn('sample','FldNme', array('FldEmp'=>TRUE))
Created!!!

**********
delete Field to record
**********

RcdDltIn('sample','FldNme')

C0010M008.-Error not defined

**********
delete sample record
**********

RmvRcd('sample','Record Sample')
Created!!!

**********+++++++++++
Demo Finish
**********+++++++++++

