//Browser Support Code 
function ajaxFunction(){
    var ajaxRequest; // The variable that makes Ajax possible! 
    try{
    // Opera 8.0+, Firefox, Safari 
    ajaxRequest = new XMLHttpRequest();
    } catch (e){
    // Internet Explorer Browsers 
    try{
    jaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) { try{
    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e){
    // Something went wrong 
    alert("Your browser broke!"); return false;
    }
    }
    }
    // Create a function that will receive data sent from the server 
    ajaxRequest.onreadystatechange = function(){ 
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
    {
    document.getElementById("txtHint").innerHTML = ajaxRequest.responseText;
    }
    }
    var id = document.getElementById('id').value;
    var password = document.getElementById('password').value; 
    var queryString = "?id=" + id + "&password=" + password ;
    }
    ajaxRequest.open("GET", "login.php" + queryString, true); ajaxRequest.send();