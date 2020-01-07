
	function validateForm(){
				var w=document.forms["form1"]["name"].value;
                var x=document.forms["form1"]["author"].value;
                var y=document.forms["form1"]["year"].value;
				var z=document.forms["form1"]["price"].value;
		if (w == ""||x == ""||y==""||z==""){
                      
			alert("Please fill the fields");
			return false;	
		}
	}
