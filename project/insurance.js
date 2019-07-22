//selection of the type os oser logging in 

var displayform  = document.getElementById("displayafter");

displayform.children[1].style.display = "none";

// var agentloginip1 = document.createElement("INPUT");
// 	agentloginip1.setAttribute("type","text");
// var agentloginip2 = document.createElement("INPUT");
// 	agentloginip2.setAttribute("type","password");


// window.onload = 

function handleChange(event)
{
	var selectedoption = document.getElementById("optionselected").value ;
	
	displayform.children[1].style.display = "none";
	displayform.children[0].style.display = "none";


	if(selectedoption == "AGENT"){
		displayform.children[1].style.display = "none";
		if (displayform.children[0].style.display == "none") {
			displayform.children[0].style.display = "block";
		}
	}
	else{
		displayform.children[0].style.display = "none";
		if (displayform.children[1].style.display == "none") {
			displayform.children[1].style.display = "block";
		}
	}
}

function submitforms(){

	console.log(displayform.children[0].style.display);
	console.log(displayform.children[1].style.display);


	if(displayform.children[0].style.display)
		document.getElementById("agentLOGIN").submit();
	else if(displayform.children[1].style.display)
		document.getElementById("customerLOGIN").submit();
	else
		alert('select something');

}