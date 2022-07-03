

	function validate(){
		let username = document.getElementByID('username').value;
		if(username=""){
             document.getElementByID('head').innerHTML= "NULL data....";
		}else{
			 document.getElementByID('head').innerHTML= "good to go....";
		}
	}

