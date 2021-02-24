function DemographicFunction() {
	if (document.getElementById('DemographicDetails').checked) {
		document.getElementById('Demographic').style.display="inline";
	}
	else{
		document.getElementById('Demographic').style.display="none";		
	}
}
function ObstetricsFunction() {
	if (document.getElementById('ObstetricsHistory').checked) {
		document.getElementById('Obstetrics').style.display="inline";
	}
	else{
		document.getElementById('Obstetrics').style.display="none";
	}	
}
function SymptomsFunction(){
	if (document.getElementById('PreeclampsiaSymptoms').checked) {
		document.getElementById('Symptoms').style.display="inline";
	}
	else{
		document.getElementById('Symptoms').style.display="none";
	}
}
function ComplicationFunction() {
	if (document.getElementById('MaternalComplication').checked) {
		document.getElementById('Complication').style.display="inline";
	}
	else{
		document.getElementById('Complication').style.display="none";		
	}
}
function OutcomeFunction() {
	if (document.getElementById('PerinatalOutcome').checked) {
		document.getElementById('Outcome').style.display="inline";
	}
	else{
		document.getElementById('Outcome').style.display="none";		
	}
}