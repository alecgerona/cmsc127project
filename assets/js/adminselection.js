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