
  function showErrorMessage(message) {
    var errorContainer = document.getElementById("error-container");
    errorContainer.innerHTML = '<div class="w3-panel w3-pale-red w3-border nomargin"><p>' + message + '</p></div>';
    errorContainer.style.display = "block";
  }

  // newly added code
  function showErrorMessageYellow(message) {
    var errorContainer = document.getElementById("error-container");
    errorContainer.innerHTML = '<div class="w3-panel w3-pale-yellow w3-border nomargin"><p>' + message + '</p></div>';
    errorContainer.style.display = "block";
  }

  function hideErrorMessage() {
    var errorContainer = document.getElementById("error-container");
    errorContainer.style.display = "none";
  }
  function hideerror()
  {
    hideErrorMessage();
  }
  function validateName() {
    var nameInput = document.getElementById("name");
    var name = nameInput.value;
    var letters = /^[A-Za-z\s]*$/;
    
    if (!letters.test(name)) {
        showErrorMessage("Please enter a valid first name");
        nameInput.value = ""; // Clear the input
        return false;
    }
    
    hideErrorMessage();
    return true;
}

function validContact() {
    var contactInput = document.getElementById("contact");
    var contact = contactInput.value;
    var contactPattern = /^\d{10}$/;
    
    if (!contactPattern.test(contact)) {
        showErrorMessage("1 Please enter a valid contact number");  
        contactInput.value = ""; // Clear the input
        return false;
    }
    
    hideErrorMessage();
    return true;
}

function validContact1() {
    var contactInput = document.getElementById("contact1");
    var contact = contactInput.value;
    var contactPattern = /^\d{10}$/;
    if (!contactPattern.test(contact) && contactInput.value.trim() !== "") {
        showErrorMessageYellow("2 Please enter a valid contact number");
        contactInput.value = ""; // Clear the input
        return false;
    }
    hideErrorMessage();
    return true;
}
function validContact2() {
  var contactInput = document.getElementById("contact2");
  var contact = contactInput.value;
  var contactPattern = /^\d{11}$/;
  if (!contactPattern.test(contact) && contactInput.value.trim() !== "") {
    showErrorMessageYellow("2 Please enter a valid contact number");
    contactInput.value = ""; // Clear the input
    return false;
}
hideErrorMessage();
return true;
}

function validEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value;
    var mailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!mailPattern.test(email)) {
        showErrorMessage("1 You have entered an invalid email address!");
        emailInput.value = ""; // Clear the input
        return false;
    }
    hideErrorMessage();
    return true;
}

function validEmail1() {
    var emailInput = document.getElementById("email1");
    var email = emailInput.value;
    var mailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!mailPattern.test(email) && emailInput.value.trim() !== "") {
        showErrorMessageYellow("2 You have entered an invalid email address!");
        emailInput.value = ""; // Clear the input
        return false;
    }
    hideErrorMessage();
    return true;
}
// !email === null && 
function validRefno1() {
  var refno1Input=document.getElementById("refno1");
  var refno1 = refno1Input.value;
 if(refno1===""){
  showErrorMessage("Please enter reference number!");
  return false;
 }
 hideErrorMessage();
 return true;
}
  

  function formSubmission() {

var name = document.getElementById("name").value;
// var gender = document.querySelector('input[name="gender"]:checked');
var contactFields1 = document.getElementById("contact").value;
var contactFields2 = document.getElementById("contact1").value;
var contactFields3 = document.getElementById("contact2").value;
var email = document.getElementById("email").value;
var email1 = document.getElementById("email1").value;
var refno1 = document.getElementById("refno1");
// var refno2 = document.querySelector('input[name="refno2"]:checked');
var type = document.querySelector('input[name="type"]:checked');

var genderElement = document.querySelector('input[name="gender"]:checked');
var gender;

if (genderElement !== null) {
  gender = genderElement.value;
} else {
  gender = ""; // Set a default value or handle the absence of selection in the way you need.
}


// Check for empty values in required fields
if (name === "") {
  showErrorMessage("Please fill your Full Name!");
  return false;
}

if (!gender) {
  showErrorMessage("Please select Your Gender!");
  return false;
}

if (!contactFields1) {
  showErrorMessage("Please enter atleast 1 Contact Number!");
  return false;
}

if (email === "") {
  showErrorMessage("Please enter an Email Address!");
  return false;
}

// if (!email) {
  //   showErrorMessage("You have entered an invalid email address!");
//   return false;
// }

// if (email1 === "") {
  //   showErrorMessage("Please enter an alternate email address");
  //   return false;
  // }
  
  
  if (!type) {
    showErrorMessage("Please select an Enquiry type!");
    return false;
  }
  
  if (refno1==="") {
    showErrorMessage("Please fill atleast 1 Reference no.!");
    return false;
  }
  
  // if (refno1 === "") {
    //   showErrorMessage("Please select a reference for field 1");
    //   return false;
    // }
    
    
    // if (!refno2) {
      //   showErrorMessage("Please select a reference for field 2");
      //   return false;
      // }
      
      return true;
    }
  

// to prevent form resubmission
 if(window.history.replaceState)
 {
  window.history.replaceState(null,null,window.location.href);
 }

 // prevent accepting more than 10 digits
 // newly added code
 function isNumber1(evt) {
  var iKeyCode = (evt.which) ? evt.which : evt.keyCode
if ( iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
    return false;
return true;
}   
// prevent inserting numbers
function onlyAlphabets(event) {
  var keyPressed = event.key;
  
  // Check if the pressed key is an alphabet (A-Z or a-z) or a space
  if (/^[A-Za-z ]$/.test(keyPressed)) {
    return true;
  }
  
  return false;
}


//newly added code for restrictin only alpha characters for name field

// function alphaOnly(event) {
//   var key;
  
//   // Check if the event object exists
//   if (event) {
//     // Use either event.key or event.which depending on the browser
//     key = event.key || event.which || event.keyCode;
//   }
  
//   // Check if the pressed key is an alphabetic character
//   return (key >= 65 && key <= 90) || (key >= 97 && key <= 122) || key === 8; // Allow backspace (key code 8)
// }


  //   var key = event.key || event.which || event.keyCode;

//   // Check if the pressed key is an alphabetic character (A-Z or a-z)
//   if ((key >= 65 && key <= 90) || (key >= 97 && key <= 122)) {
//     return true;
//   } else {
//     event.preventDefault(); // Prevent input of non-alphabetic characters
//     return false;
//   }
// }

