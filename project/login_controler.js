var agO = document.getElementById("left");
var agtemp = agO.innerHTML; 
var cusO = document.getElementById("right");
var custemp = cusO.innerHTML;

function agentlogin() {
    cusO.innerHTML = custemp; 
    //var newlap = "<br/><br/><form style='width: 100px;margin: 20px auto;border - radius: 6px;box - shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);vertical-align: middle ;' id='agentLOGIN' method='GET' action='actionform1.php'>SSN:  <input type='textarea' name='agentID' /><br /><br /><input type='submit'/></form>";
    //console.log(ag.innerHTML);
    //agO.innerHTML = "";
    var x = document.createElement("FORM");
    var inputofx = document.createElement("INPUT");
    x.setAttribute("type","text");
    x.appendChild(inputofx);
    console.log(x);
    agO.appendChild(x);
}

function customerlogin() {
    agO.innerHTML = agtemp;
    var newlap2 = "<form style='width: 100px;margin: 20px auto;border - radius: 6px;box - shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);vertical-align: middle ;' id='agentLOGIN' method='GET' action='actionform2.php'>SSN:  <input type='textarea' name='agentID' /><br />Password:  <input type='password' name='agentPASS' /><br /></form>";
    //console.log(ag.innerHTML);
    cusO.innerHTML = newlap2;
}
