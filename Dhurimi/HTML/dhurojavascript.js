function shtonetabele()
{
    var isbn = document.getElementById("isbn").value;
    var titulli = document.getElementById("titull").value;
    var autori = document.getElementById("autor").value;
    var pershkrim = document.getElementById("pershkrim").value;
    var e = document.getElementById("zhanri");
    var zhanrilibrit = e.options[e.selectedIndex].value;
    var cmimi = document.getElementById("cmimi").value;


    alert( isbn );
}