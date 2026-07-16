const form = document.getElementById("appointmentForm");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const department = document.getElementById("department");
const description = document.getElementById("description");
const result = document.getElementById("result");

let attempts = 0;

form.addEventListener("submit", function(event){

    event.preventDefault();

    document.getElementById("fnameError").innerHTML = "";
    document.getElementById("lnameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("confirmError").innerHTML = "";
    document.getElementById("genderError").innerHTML = "";
    document.getElementById("serviceError").innerHTML = "";
    document.getElementById("departmentError").innerHTML = "";
    document.getElementById("descriptionError").innerHTML = "";

    result.innerHTML = "";

    let valid = true;

    if(fname.value==""){
        document.getElementById("fnameError").innerHTML="First Name is required.";
        valid=false;
    }

    if(lname.value==""){
        document.getElementById("lnameError").innerHTML="Last Name is required.";
        valid=false;
    }

    if(email.value==""){
        document.getElementById("emailError").innerHTML="Email is required.";
        valid=false;
    }
    else if(!email.value.includes("@")){
        document.getElementById("emailError").innerHTML="Invalid Email.";
        valid=false;
    }

    if(password.value==""){
        document.getElementById("passwordError").innerHTML="Password is required.";
        valid=false;
    }

    if(confirmPassword.value==""){
        document.getElementById("confirmError").innerHTML="Confirm your password.";
        valid=false;
    }
    else if(password.value!=confirmPassword.value){
        attempts++;

        document.getElementById("confirmError").innerHTML="Password does not match.";
        alert("Wrong Password Attempt : " + attempts);
        valid=false;

        if(attempts>=3){
            alert("Maximum 3 incorrect password attempts!");
            password.disabled=true;
            confirmPassword.disabled=true;
        }

    }
    const gender=document.querySelector('input[name="gender"]:checked');
    if(gender==null){
        document.getElementById("genderError").innerHTML="Select Gender.";
        valid=false;
    }

    const service=document.querySelectorAll('input[name="service"]:checked');
    if(service.length==0){
        document.getElementById("serviceError").innerHTML="Select at least one service.";
        valid=false;
    }

    if(department.value==""){
        document.getElementById("departmentError").innerHTML="Select Department.";
        valid=false;
    }

    if(description.value==""){
        document.getElementById("descriptionError").innerHTML="Enter Description.";
        valid=false;
    }
    else if(description.value.length<20){
        document.getElementById("descriptionError").innerHTML="Minimum 20 characters required.";
        valid=false;
    }

    if(valid){
        result.innerHTML="Appointment Registration Completed Successfully!";
        result.style.color="green";
        form.reset();
    }

});