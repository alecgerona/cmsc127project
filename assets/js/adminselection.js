var $BTN = $('#export-btn');
var $TABLE = $('#ordertable');

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
// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {

  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().replace(/ /g,''));
  });

  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  document.getElementById("orderlist").value = JSON.stringify(data);
});