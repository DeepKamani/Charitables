var contactData = document.getElementById("submitId");

contactData.addEventListener('click', contactFunction, false);

function contactFunction(e){
	e.preventDefault();
	var myRequest = new XMLHttpRequest;
	myRequest.onreadystatechange = function(){
		// console.log(myRequest.readyState);
		if(myRequest.readyState === 4){
			// console.log(myRequest.responseText);// modify or populate html elements based on response.
			var responseObj = JSON.parse(myRequest.responseText);
			console.log(responseObj.success);

		}
	};

	// var removeForm = document.getElementById("bodyId");
	// var contactInput = document.getElementById("formId");


	var fullname = document.getElementById("contact-name");
	var email = document.getElementById("contact-email");
	var subject = document.getElementById("contact-subject");
	var message = document.getElementById("contact-message");


	myRequest.open("POST", "Process-Contact.php", true); //true means it is asynchronous // Send urls through the url
	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	myRequest.send("name=" + fullname.value+
					"&email=" + email.value+
					"&subject=" + subject.value+
					"&message=" + message.value);

	// removeForm.removeChild(contactInput);
	removeForm();
	thankYou();
}

function removeForm(){
	var erase = document.getElementById("contact-page");
	erase.style.display = "none";
}

function thankYou(){
	var abc= document.getElementById("thanks");
		abc.innerHTML="We Will Get Back To You"

}
// var contactData = document.getElementById("submitId");

// contactData.addEventListener('click', contactFunction, false);

// function contactFunction(e){
// 	e.preventDefault();
// 	var myRequest = new XMLHttpRequest;
// 	myRequest.onreadystatechange = function(){
// 		// console.log(myRequest.readyState);
// 		if(myRequest.readyState === 4){
// 			console.log(myRequest.responseText);// modify or populate html elements based on response.
// 			var responseObj = JSON.parse(myRequest.responseText);
// 			 console.log(responseObj.success);

// 		}
// 	};

// 	// var removeForm = document.getElementById("bodyId");
// 	// var contactInput = document.getElementById("formId");


// 	var fname = document.getElementById("fname");
// 	var lname = document.getElementById("lname");
// 	var email = document.getElementById("email");
// 	var category = document.getElementById("category");
// 	var role = document.getElementById("role");

// 	myRequest.open("POST", "process-contact.php", true); //true means it is asynchronous // Send urls through the url
// 	myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// 	myRequest.send("fname="+ fname.value+
// 					"&lname="+ lname.value+
// 					"&email="+ email.value+
// 					"&category="+ category.value+
// 					"&role="+ role.value);

// 	// removeForm.removeChild(contactInput);
// 	removeForm();
// 	thankYou();
// }

// function removeForm(){
// 	var erase = document.getElementById("contact-page");
// 	erase.style.display = "none";
// }

// function thankYou(){

// 	document.getElementById("thanks").innerHTML="Thank You";
// }
