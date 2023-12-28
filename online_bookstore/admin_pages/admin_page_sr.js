
alert("Welcome to Admin Page....");

document.write("Connected to my Javascript.");

function loadAdminData(name){
	if(name=="btn111"){
		document.getElementById("paraNew").innerHTML = "<b>NAME : Tharusha Sandakelum <br> Gender: MALE <br> Age: 22 <br> Admin ID: ADMIN0002 <b><br>";
		document.getElementById("image11").src = "imgs/adminprofile2.png";
	}
	else if(name=="btn112"){
		document.getElementById("paraNew").innerHTML = "<b>NAME : Dilmi Samaranayaka <br> Gender: FEMALE <br> Age: 22 <br> Admin ID: ADMIN0003 <b><br>";
		document.getElementById("image11").src = "imgs/adminprofile3.png";
	}
	else if(name=="btn113"){
		document.getElementById("paraNew").innerHTML = "<b>NAME : Thenula Hettige <br> Gender: MALE <br> Age: 22 <br> Admin ID: ADMIN0004 <b><br>";
		document.getElementById("image11").src = "imgs/adminprofile4.png";
	}
	else{
		alert("invalid!!!");
	}
}