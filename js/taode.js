document.addEventListener("DOMContentLoaded", function(){
	// BẮT LỖI CÂU HỎI DỄ
	document.getElementById("OpenMess").onkeyup = function(){
		var x = document.getElementById("OpenMess").value;
		var y = /[a-z]+/.test(x);
		if (y == true){
			document.getElementById("An_nut").disabled = "disabled";			
				document.getElementById("Message").style.opacity = 1;
		}
		else{
			document.getElementById("An_nut").disabled = "";
				document.getElementById("Message").style.opacity = 0;
		}
	}

// BẮT LỖI CÂU HỎI TRUNG BÌNH
	document.getElementById("OpenMess2").onkeyup = function(){
		var x = document.getElementById("OpenMess2").value;
		var y = /[a-z]+/.test(x);
		if (y == true){
			document.getElementById("An_nut").disabled = "disabled";			
				document.getElementById("Message2").style.opacity = 1;
		}
		else{
			document.getElementById("An_nut").disabled = "";
				document.getElementById("Message2").style.opacity = 0;
		}
	}

// BẮT LỖI CÂU HỎI KHÓ
	document.getElementById("OpenMess3").onkeyup = function(){
		var x = document.getElementById("OpenMess3").value;
		var y = /[a-z]+/.test(x);
		if (y == true){
			document.getElementById("An_nut").disabled = "disabled";			
				document.getElementById("Message3").style.opacity = 1;
		}
		else{
			document.getElementById("An_nut").disabled = "";
				document.getElementById("Message3").style.opacity = 0;
		}
	}
},false)
//ajax tao de
function loadDoc()	{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php", true);
  xhttp.send();
}