function check()
{
	let email=document.getElementById("username").value;
	let pass=document.getElementById("password").value;
	let doggy=document.getElementById("dog").value;
	let kitty=document.getElementById("cat").value;
	let birdy=document.getElementById("bird").value;
	if(email==null || pass==null || kitty==null || doggy==null || birdy==null || !(document.getElementById("ship1").checked || document.getElementById("ship2").checked || document.getElementById("ship3").checked))
	{
		alert("The entire form must be completed.");
		return false;
	}
	else if(kitty<0 || doggy<0 || birdy<0)
	{
		alert("You can not order negative pets");
		return false;
	}
	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
	{
		alert("The email you entered is not valid");
		return false;
	}
	return true;
}
