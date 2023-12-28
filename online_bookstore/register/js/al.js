function sign(){
    alert('sign in successful!!')
}


function enableButton(){
    if(document.getElementById("checkbox").checked){
        document.getElementById("submitBtn").disabled=false;
        alert("hiii");
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
}