function checkPssword(){
    if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value)
    {
        alert("Password Missmatched!");
        return false;
    }
    else{
        alert("Success");
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkbox").checked){
        document.getElementById("submitBtn").disabled=false;
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
}