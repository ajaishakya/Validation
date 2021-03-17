function validate() 
{
    var fname=document.getElementById("fname").value;	
    var lname=document.getElementById("lname").value;
    var uname=document.getElementById("uname").value;
    var password=document.getElementById("password").value;
    var cpassword=document.getElementById("cpassword").value;
    var address=document.getElementById("address").value;
    var phone=document.getElementById("phone").value;
    var email=document.getElementById("email").value;


    // First Name validation
    if(fname=="")
    {
        alert("First Name is empty");
        return false;
    }

    if (fname.match(/[0-9]/)) 
    {
        alert("First name cannot have number");
        return false;
    }

    if(fname.length<3)
    {
        alert("First Name is too short");
        return false;
    }

    if(fname.length>20)
    {
        alert("First Name is too long");
        return false;
    }

    // Last Name Validation
    if(lname=="")
    {
        alert("Last Name is empty");
        return false;
    }

    if (lname.match(/[0-9]/)) 
    {
        alert("Last name cannot have number");
        return false;
    }

    if(lname.length<3)
    {
        alert("Last Name is too short");
        return false;
    }

    if(lname.length>20)
    {
        alert("Last Name is too long");
        return false;
    }

    // User Name Validation
    if(uname=="")
    {
        alert("User Name is empty");
        return false;
    }

    if(uname.length<2)
    {
        alert("User Name is too short");
        return false;
    }

    if(uname.length>20)
    {
        alert("User Name is too long");
        return false;
    }

    // Password Validation
    if (password=="") 
    {
        alert("Password is empty");
        return false;
    }

    if(password.length<2)
    {
        alert("Password is too short");
        return false;
    }

    // Confirm Password Validation
    if (cpassword!=password) 
    {
        alert("Confirm Password should be similar to password");
        return false;
    }

    // Address Validation
    if (address=="")
    {
        alert("Address is Empty");
        return false;
    }

    // Phone number Validation
    if (phone=="")
    {
        alert("Phone number is empty");
        return false;
    }

    if (phone.length!=10)
    {
        alert("Phone number should have 10 digits");
        return false;
    }

    // Email Validation
    if(email=="")
    {
        alert("Email is empty");
        return false;
    }
}