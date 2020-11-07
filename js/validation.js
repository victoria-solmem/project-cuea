// LOGIN INPUT VALIDATION
function loginValidation() {
    var userEmail = document.forms["loginForm"]["userEmail"].value;
    var userPassword = document.forms["loginForm"]["userPassword"].value;
    if(userEmail =='') {
        alert( "Email is required." );
        document.loginForm.userEmail.focus() ;
        return false;
    } else if(userPassword=='') {
        alert("Password is required.");
        document.loginForm.userPassword.focus() ;
        return false;
    }
}


// FORGOT PASSWORD INPUT VALIDATION
function forgotPasswordValidation() {
    var userEmail = document.forms["forgotPasswordForm"]["userEmail"].value;
    if(userEmail =='') {
        alert( "Email is required." );
        document.forgotPasswordForm.userEmail.focus() ;
        return false;
    }
}


// CREATE ACCOUNT INPUT VALIDATION
function createAccountValidation() {
    var userEmail    = document.forms["createAccountForm"]["firstName"].value;
    var userPassword = document.forms["createAccountForm"]["lastName"].value;
    var userPassword = document.forms["createAccountForm"]["userEmail"].value;
    var userPassword = document.forms["createAccountForm"]["userPassword"].value;
    var userPassword = document.forms["createAccountForm"]["confirmUserPassword"].value;
    if(userEmail =='') {
        alert( "Email is required." );
        document.createAccountForm.userEmail.focus() ;
        return false;
    } else if(userPassword=='') {
        alert("Password is required.");
        document.createAccountForm.userPassword.focus() ;
        return false;
    }
}


// CONTACT INPUT VALIDATION
function contactValidation() {
    var firstName = document.forms["contactForm"]["firstName"].value;
    var lastName  = document.forms["contactForm"]["lastName"].value;
    var email     = document.forms["contactForm"]["email"].value;
    var subject   = document.forms["contactForm"]["subject"].value;
    var message   = document.forms["contactForm"]["message"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.contactForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.contactForm.lastName.focus() ;
        return false;
    } else if(email == '') {
        alert("Email is required.");
      document.contactForm.email.focus() ;
       return false;
   } else if(subject == '') {
        alert("Subject is required.");
      document.contactForm.subject.focus() ;
       return false;
   } else if(message == '') {
       alert("Message is required.");
       document.contactForm.message.focus() ;
       return false;
    }
}