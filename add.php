<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tags   -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- Adding bootstrap link   -->
	<link rel="stylesheet"  href="bootstrap.min.css">
	<link rel="stylesheet" href="forms.css">
	<title>Data Collection Form</title>
</head>
<body>
	<form method="post">
		<h3 class="align-self-center">DATA COLLECTION FORM</h3>
		<div class="container form-container">
			<div class="form-group row">
				<label class="col-md-2 col-form-label" for="ipNumber">
					I.P No
				</label>
					<input type="number" id="ipNumber" name="ip" class="col-md-4" placeholder="Enter IP Number">
				<label class="col-md-2 col-form-label"  for="docNumber">
					Document No
				</label>
					<input type="text" id="docNumber" name="doc" class="col-md-4" placeholder="Enter Document Number">
			</div>
		</div>


		<label for="DemographicDetails">
			Demographic Details: 
		</label>
		<input type="checkbox" name="DemographicDetails" id="DemographicDetails" value="no" onchange="DemographicFunction()">
		<div class="container form-container" id="Demographic">
			<div class="form-group row">	
				<label class="col-md-2 col-form-label" for="Age">
					Maternal Age
				</label>
					<input type="number" class="col-md-1" id="Age" name="age"> 
				<label class="col-md-2 col-form-label" for="Height">
					Height (cm)
				</label>
					<input type="number" class="col-md-1" id="Height" name="height">
				<label class="col-md-2 col-form-label" for="Weight">
					Weight(kg)
				</label>
					<input type="number" step="any" class="col-md-1" id="Weight" name="weight">
				<label class="col-md-2 col-form-label" for="BMI">
					BMI
				</label>
					<input type="number" class="col-md-1" step="any" id="BMI" name="bmi">
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-2">
					Occupation
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Occ" id="HW">
				<label for="HW" class="form-check-label">House Wife</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Occ" id="Labour">
				<label for="Labour" class="form-check-label">Labourer</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Occ" id="Agri">
				<label for="Agri" class="form-check-label">Agriculture</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Occ" id="Busi">
				<label for="Busi" class="form-check-label">Business</label>
				</div>
				<div class="col-md-1 custom-control-inline">
				<input type="radio" class="form-check-input" name="Occ" id="OT">
				<label for="OT" class="form-check-label">Others</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-3">
					Residence
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Res" id="Urban">
				<label for="Urban" class="form-check-label">Urban</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Res" id="Slum">
				<label for="Slum" class="form-check-label">Slum</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Res" id="Rural">
				<label for="Rural" class="form-check-label">Rural</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-2">
					Education Level
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Edu" id="Illiterate">
				<label for="Illiterate" class="form-check-label">Illiterate</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Edu" id="Primary">
				<label for="Primary" class="form-check-label">Primary</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Edu" id="Secondary">
				<label for="Secondary" class="form-check-label">Secondary</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Edu" id="Graduate">
				<label for="Graduate" class="form-check-label">Graduate</label>
				</div>
				<div class="col-md-1 custom-control-inline">
				<input type="radio" class="form-check-input" name="Edu" id="Post Graduate">
				<label for="Post Graduate" class="form-check-label">Post Graduate</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-2">
					Socio-Economic Status
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Socio" id="Upper">
				<label for="Upper" class="form-check-label">Upper</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Socio" id="Upper-Middle">
				<label for="Upper-Middle" class="form-check-label">Upper-Middle</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Socio" id="Middle">
				<label for="Middle" class="form-check-label">Middle</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Socio" id="Lower-Middle">
				<label for="Lower-Middle" class="form-check-label">Lower-Middle</label>
				</div>
				<div class="col-md-1 custom-control-inline">
				<input type="radio" class="form-check-input" name="Socio" id="Lower">
				<label for="Lower" class="form-check-label">Lower</label>
				</div>
			</div>
		</div>




		<label for="ObstetricsHistory">
			Obstetrics History : 
		</label>
		<input type="checkbox" name="ObstetricsHistory" id="ObstetricsHistory" value="no" onchange="ObstetricsFunction()">
		<div class="container form-container" id="Obstetrics">
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Hypertension in Previous Pregnancy
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="HIPP" id="YesHIPP">
				<label for="YesHIPP" class="form-check-label">Yes</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="HIPP" id="NoHIPP">
				<label for="NoHIPP" class="form-check-label">No</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Previous History of Abortions
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOA" id="YesPHOA">
				<label for="YesPHOA" class="form-check-label">Yes</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOA" id="NoPHOA">
				<label for="NoPHOA" class="form-check-label">No</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Previous History of still births
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOSA" id="YesPHOSA">
				<label for="YesPHOSA" class="form-check-label">Yes</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOSA" id="NoPHOSA">
				<label for="NoPHOSA" class="form-check-label">No</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Previous History of Preterm Delivery
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOPD" id="YesPHOPD">
				<label for="YesPHOPD" class="form-check-label">Yes</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PHOPD" id="NoPHOPD">
				<label for="NoPHOPD" class="form-check-label">No</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Gravidity
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Gradi" id="Primigravida">
				<label for="Primigravida" class="form-check-label">Primigravida</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="Gradi" id="Multigravida">
				<label for="Multigravida" class="form-check-label">Multigravida</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="GestationalAge">
					Gestational Age (in weeks)
				</label>
					<input type="number" name='gest' id="GestationalAge" class="col-md-4" placeholder="Enter your Gestational Age">
			</div>
			<div class="form-group row">
				<label class="col-md-5 col-form-label" for="BloodPressure">
					Blood Pressure (mm/Hg)
				</label>
				<div id="BloodPressure">
					<input type="number" name='bpmm' id="BloodPressuremm" class="col-md-2">/<input name='bphg' class="col-md-2" id="BloodPressurehg" type="number">
				</div>
			</div>
			<h4>Biomarkers</h4>
			<div class="form-group row">
				<label class="col-md-5 col-form-label" for="uric">
					Uric Acid (mg/dL)
				</label>
				<div id="uric">
					<input type="number" id="uricMG" name='uricmg' class="col-md-2">/<input name='uricdl' class="col-md-2" id="uricDL" type="number">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-5 col-form-label" for="LDH">
					LDH (IU/I)
				</label>
				<div id="LDH">
					<input type="number" name='ldhui' id="LDHiu" class="col-md-2">/<input name='ldhi' class="col-md-2" id="LDHi" type="number">
				</div>
			</div>
		</div>


		<label for="PreeclampsiaSymptoms">
			Preeclampsia / Eclampsia Symptoms : 
		</label>
		<input type="checkbox" name="PreeclampsiaSymptoms" id="PreeclampsiaSymptoms" value="no" onchange="SymptomsFunction()">
		<div class="container form-container" id="Symptoms">
			<div class="form-group row offset-1">
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="PESymptom" id="EpiPain">
					<label for="EpiPain" class="form-check-label">Epigastric Pain</label>
				</div>
				<div class="col-md-2 custom-control-inline">
					<input type="radio" class="form-check-input" name="PESymptom" id="BlurVision">
					<label for="BlurVision" class="form-check-label">Blurred Vision</label>
				</div>
				<div class="col-md-2 custom-control-inline">
					<input type="radio" class="form-check-input" name="PESymptom" id="Vomit">
					<label for="Vomit" class="form-check-label">Vomitting</label>
				</div>
				<div class="col-md-2 custom-control-inline">
					<input type="radio" class="form-check-input" name="PESymptom" id="Headache">
					<label for="Headache" class="form-check-label">Headache</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="PESymptom" id="PESOther">
				<label for="PESOther" class="form-check-label">Others</label>
				</div>
			</div>
		</div>

		<label for="MaternalComplication">
			MaternalComplication :
		</label>
		<input type="checkbox" name="MaternalComplication" id="MaternalComplication" value="no" onchange="ComplicationFunction()">
		<div class="container form-container" id="Complication">
			<div class="form-group row offset-1">
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="IsoThrom">
					<label for="IsoThrom" class="form-check-label">Isolated Thrombocytopenia</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="Convulsion">
					<label for="Convulsion" class="form-check-label">Convulsion</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="DIC">
					<label for="DIC" class="form-check-label">Disseminated Intravascular Coagulation</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="RF">
					<label for="RF" class="form-check-label">Renial Failure</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="PE">
					<label for="PE" class="form-check-label">Pulmonary edema</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="CA">
					<label for="CA" class="form-check-label">Cardiorepiratory Arrest</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="PlacentalAbruption">
					<label for="PlacentalAbruption" class="form-check-label">Placental Abruption</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="PostpartumHemorrage">
					<label for="PostpartumHemorrage" class="form-check-label">Postpartum Hemorrage</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="AntepartumHemorrage">
					<label for="AntepartumHemorrage" class="form-check-label">Antepartum Hemorrage</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="Jaundice">
					<label for="Jaundice" class="form-check-label">Jaundice</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="HELLPSyndrome">
					<label for="HELLPSyndrome" class="form-check-label">HELLP Syndrome</label>
				</div>
				<div class="col-md-2 custom-control-inline">	
					<input type="radio" class="form-check-input" name="MComplication" id="ARDS">
					<label for="ARDS" class="form-check-label">Acute Respiratory Distress Syndrome</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="MComplication" id="MCOther">
				<label for="MCOther" class="form-check-label">Others</label>
				</div>
			</div>
		</div>



		<label for="PerinatalOutcome">
			Perinatal Outcome : 
		</label>
		<input type="checkbox" name="PerinatalOutcome" id="PerinatalOutcome" value="no" onchange="OutcomeFunction()">
		<div class="container form-container" id="Outcome">
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Period of Gestation
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="GestPeriod" id="Preterm">
				<label for="Preterm" class="form-check-label">Preterm</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="GestPeriod" id="Term">
				<label for="Term" class="form-check-label">Term</label>
				</div>
			</div>
			<div class="form-group row"> 
				<label class="col-form-label col-md-6">
					Mode of Delivery
				</label>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="DeliveryMode" id="NVD">
				<label for="NVD" class="form-check-label">Normal Vaginal Delivery</label>
				</div>
				<div class="col-md-2 custom-control-inline">
				<input type="radio" class="form-check-input" name="DeliveryMode" id="CaesarenSection">
				<label for="CaesarenSection" class="form-check-label">Caesaren Section</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="BabyWeight">
					Baby Weight (in kgs)
				</label>
					<input type="number" name='bw' step="any" id="BabyWeight" class="col-md-4" placeholder="Enter the Baby's Weight">
			</div>
		</div>



		<div class="container form-container">
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="DataCollector">
					Name
				</label>
				<input type="text" id="DataCollector"name='name' class="col-md-4" placeholder="Enter the Data Collector's Name">
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="DataCollectorDesignation">
					Designation
				</label>
				<input type="text" id="DataCollectorDesignation" name='desg'class="col-md-4" placeholder="Enter the Data Collector's Designation">
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="DataCollectorDept">
					Department
				</label>
				<input type="text" id="DataCollectorDept"name='dept' class="col-md-4" placeholder="Enter the Data Collector's Department">
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label" for="DateCollection">
					Date of Collection
				</label>
				<input type="date" id="DateCollection"name='coll'  class="col-md-4">
			</div>
			<div class="form-group row">
				<label class="col-md-6 col-form-label"  for="DataCollectorSign">
					Signature Image
				</label>
				<input type="file" id="DataCollectorSign" name="DataCollectorSign" accept="image/*" class="col-md-4">
			</div>
        </div>
        <input type="submit" name="add" value="SUBMIT">
	</form>


	<!--  Script File  -->
	<script src="forms.js"></script>
</body>
</html>
<?php
    require_once "pdo.php";
	//session_start();
	//echo($_POST['ip']);
	echo('<a href="disp.php"><button > BACK </button></a>');
    if(isset($_POST['ip'])  &&  isset($_POST['doc'])){
		//echo("yes");
        $stmt = $pdo->prepare('INSERT INTO patients
        (ip_no,document_no,age,height,weight,bmi,occupation,residence,edulevel,se_status,hp_in_prevpreg,prev_his_abort,prev_his_sb,prev_his_pre_deli,gravidity,gest_age,bp_mm,bp_hg,uricacid_mg,uricacid_dl,ldh_iu,ldh_l,pes,mc,period_gest,baby_weight,mode_deli) 
        VALUES ( :ip, :dc, :ag, :ht, :wt, :bmi, :oc, :re, :ed, :so, :hi, :pa, :ps, :pd, :gr, :ge, :bm, :bg, :ug, :ul, :lui, :li, :pes, :mc, :gp, :bw, :dm)');
      $stmt->execute(array(
        ':ip' => htmlentities($_POST['ip']),
        ':dc' =>   htmlentities($_POST['doc'])  ,
        ':ag' =>  htmlentities($_POST['age'])   ,
        ':ht' =>   htmlentities($_POST['height'])   ,
        ':wt' =>   htmlentities($_POST['weight'])   ,
        ':bmi' =>    htmlentities($_POST['bmi'])  ,
        ':oc' =>    htmlentities($_POST['Occ'])  ,
        ':re' =>    htmlentities($_POST['Res'])  ,
        ':ed' =>    htmlentities($_POST['Edu'])  ,
        ':so' =>    htmlentities($_POST['Socio'])  ,
        ':hi' =>   htmlentities($_POST['HIPP'])  ,
        ':pa' =>     htmlentities($_POST['PHOA']),
        ':ps' =>     htmlentities($_POST['PHOS']),
        ':pd' =>    htmlentities($_POST['PHOPD']) ,
        ':gr' =>    htmlentities($_POST['Gradi']) ,
        ':ge' =>    htmlentities($_POST['gest']) ,
        ':bm' =>    htmlentities($_POST['bpmm']) ,
        ':bg' =>    htmlentities($_POST['bphg']) ,
        ':ug' =>     htmlentities($_POST['uricmg']),
        ':ul' =>     htmlentities($_POST['uricdl']),
        ':lui' =>    htmlentities($_POST['ldhui']) ,
        ':li' =>    htmlentities($_POST['ldhi']) ,
        ':pes' =>     htmlentities($_POST['PESymptom']) ,
        ':mc' =>    htmlentities($_POST['MComplication'])  ,
        ':gp' =>     htmlentities($_POST['GestPeriod']) ,
        ':bw' =>     htmlentities($_POST['bw']) ,
        ':dm' =>    htmlentities($_POST['DeliveryMode'])  
        )
	  );
	  
		
	}
	if(isset($_POST['dept'])&&isset($_POST['name'])){
		$stmts = $pdo->prepare('INSERT INTO dept
  (name,desgn,dept,date,img) VALUES ( :nm, :id, :dg, :dp, :dt, :im)');
$stmts->execute(array(
  ':nm' =>htmlentities($_POST['name']),
  ':dg' =>htmlentities($_POST['desg']),
  ':dp' =>htmlentities($_POST['dept']),
  ':dt' =>htmlentities($_POST['coll']),
  ':im' =>htmlentities($_POST['DataCollectorSign']))
);
	}
	?>