//var pass= document.getElementById('form_password').val();


function enkripto()
{

    var pass = $("#form_password").val();

var length =pass.length;
var gjysma=length/2;
var gjysmapare=pass.substring(0, gjysma);
var gjysmadyte=pass.substring(gjysma, length);

 var gjysmaparmbrapsh=reverseString(gjysmapare);
 var gjysmadytembrapsh=reverseString(gjysmadyte); 

var passperfundimtar=gjysmaparmbrapsh.concat(gjysmadytembrapsh);

$("#hidenpassword").val(JSON.stringify(passperfundimtar));
//localStorage.setItem("password",JSON.stringify(passperfundimtar));
 
//return passperfundimtar;

}


function reverseString(str) {
    var splitString = str.split("");
    var reverseArray = splitString.reverse();
    var joinArray = reverseArray.join("");
    return joinArray;
}