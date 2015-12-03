function editselection(adminname, adminusername, adminpassword, adminid){
	document.getElementById("inputadminname").value = adminname;
	document.getElementById("inputadminusername").value = adminusername;
	document.getElementById("inputadminpassword").value = adminpassword;
	document.getElementById("inputadminadminid").value = adminid;
}

function deleteadmin(adminname, adminid){
	document.getElementById("deleteadminname").innerHTML = "Delete " + adminname + "'s account?";
	document.getElementById("deleteadminadminid").value = adminid;
}

function editUser(username, userusername, userpassword, userid){
	document.getElementById("editusername").value = username;
	document.getElementById("edituserusername").value = userusername;
	document.getElementById("edituserpassword").value = userpassword;
	document.getElementById("edituseruserid").value = userid;
}

function changeday(){
	var day = document.getElementById("dayselect").value; //Get the value from the day select
	document.getElementById("daychange").value = day; //Change the input value to the selected value
}

function changemonth(){
	var month = document.getElementById("monthselect").value; //Get the value from the month select
	document.getElementById("monthchange").value = month; //Change the input value to the selected value
}

function changeyear(){
	var year = document.getElementById("yearselect").value; //Get the value from the year select
	document.getElementById("yearchange").value = year; //Change the input value to the selected value
}