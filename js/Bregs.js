var myInnerHtml = document.getElementById("cont").innerHTML;
var res = myInnerHtml.replace("Requirement B1","<a href=\"http://192.168.1.132/action_page.php#B1\">Requirement B1</a>");
document.getElementById("cont").innerHTML = res;	
console.log(res);

