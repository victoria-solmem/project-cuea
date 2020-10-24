// CompanyDetails INPUT VALIDATION
function companyDetailsValidation() {
    var companyName = document.forms["companyDetailsForm"]["companyName"].value;
    var userEmail     = document.forms["companyDetailsForm"]["userEmail"].value;
    var phoneNumber   = document.forms["companyDetailsForm"]["phoneNumber"].value;
    var address   = document.forms["companyDetailsForm"]["address"].value;
    var CostPerKgWatt   = document.forms["companyDetailsForm"]["CostPerKgWatt"].value;
    if(companyName =='') {
        alert("Name is required.");
        document.companyDetailsForm.companyName.focus() ;
        return false;
    } else if(userEmail == '') {
        alert("Email is required.");
      document.companyDetailsForm.userEmail.focus() ;
       return false;
   } else if(phoneNumber == '') {
        alert("Telephone is required.");
      document.companyDetailsForm.phoneNumber.focus() ;
       return false;
   } else if(address == '') {
       alert("Address is required.");
       document.companyDetailsForm.address.focus() ;
       return false;
    } else if(CostPerKgWatt == '') {
        alert("Costperkgwatt is required.");
        document.companyDetailsForm.CostPerKgWatt.focus() ;
        return false;
 }
     
}

// PROFILE INPUT VALIDATION
function profileValidation() {
    var firstName = document.forms["profileForm"]["firstName"].value;
    var lastName  = document.forms["profileForm"]["lastName"].value;
    var userEmail     = document.forms["profileForm"]["userEmail"].value;
    var phoneNumber   = document.forms["profileForm"]["phoneNumber"].value;
    var userAddress   = document.forms["profileForm"]["userAddress"].value;
    if(firstName =='') {
        alert( "First Name is required." );
        document.profileForm.firstName.focus() ;
        return false;
    } else if(lastName=='') {
         alert("Last Name is required.");
       document.profileForm.lastName.focus() ;
        return false;
    } else if(userEmail == '') {
        alert("Email is required.");
      document.profileForm.userEmail.focus() ;
       return false;
   } else if(isNaN(phoneNumber)) {
        alert("Telephone is required.");
      document.profileForm.phoneNumber.focus() ;
       return false;
   } else if(userAddress == '') {
       alert("Adress is required.");
       document.profileForm.userAddress.focus() ;
       return false;
    }
}
// UPDATE-METER-BOX INPUT VALIDATION
function UpdateMeterBoxValidation() {
    var user = document.forms["UpdateMeterBoxForm"]["user"].value;
    var meterBoxActive  = document.forms["UpdateMeterBoxForm"]["meterBoxActive"].value;
    var electricityActive     = document.forms["UpdateMeterBoxForm"]["electricityActive"].value;
    if(user =='') {
        alert( "user is required." );
        document.UpdateMeterBoxForm.user.focus() ;
        return false;
    } else if(meterBoxActive =='') {
         alert("meterBoxActive is required.");
       document.UpdateMeterBoxForm.meterBoxActive.focus() ;
        return false;
    } else if(electricityActive == '') {
        alert("electricityActive is required.");
      document.UpdateMeterBoxForm.electricityActive.focus() ;
       return false;
    }
}

// ADD-METER-BOX INPUT VALIDATION
function AddMeterBoxValidation() {
    var user = document.forms["AddMeterBoxForm"]["Select a user"].value;
    var meterBoxActive  = document.forms["AddMeterBoxForm"]["meterBoxActive"].value;
    var electricityActive     = document.forms["AddMeterBoxForm"]["electricityActive"].value;
    if(user =='') {
        alert( "Select a user is required." );
        document.AddMeterBoxForm.user.focus() ;
        return false;
    } else if(meterBoxActive =='') {
         alert("meterBoxActive is required.");
       document.AddMeterBoxForm.meterBoxActive.focus() ;
        return false;
    } else if(electricityActive == '') {
        alert("electricityActive is required.");
      document.AddMeterBoxForm.electricityActive.focus() ;
       return false;
    }
}
