
/* Include this form per campign page */
var LeadForm = function(){};

LeadForm.sending = false;

LeadForm.validate = function() {

    var form = getElement("LeadForm");

    var formData = new FormData(form);
    formData.append("op", "add");
    formData.append("Url", window.location.href);
    formData.append("Terms", getElement("Terms").checked);
    trace(formData);
    var TermsChecked = getElement("Terms").checked;

    //var dateString = getElement("DD").value+"/"+getElement("MM").value+"/"+getElement("YYYY").value;
    //trace("DS " + dateString);
    trace("Country is: " + getElement("Country").options[getElement("Country").selectedIndex].value);
    
    if (getElement("Company").value === "") {
        alert("Please enter your company name");
        getElement("Company").focus();
        return false;
    }else if (getElement("FirstName").value === "") {
        alert("Please enter your name");
        getElement("FirstName").focus();
        return false;
    } else if (getElement("Surname").value === "") {
        alert("Please enter your surname");
        getElement("Surname").focus();
        return false;
    } else if (!LeadForm.isEmail(getElement("Email").value)) {
        alert("Please enter your email address");
        getElement("Email").focus();
        return false;
    } else if (!LeadForm.isContactNumber(getElement("CellNumber").value)) {
        alert("Please enter your contact number");
        getElement("CellNumber").focus();
        return false;
    } else if (getElement("City").value === "") {
        alert("Please enter your city");
        getElement("City").focus();
        return false;
    }else if (getElement("Country").options[getElement("Country").selectedIndex].value === "") {
        alert("Please enter your country");
        getElement("Country").focus();
        return false;
    }else if (!TermsChecked) {
        alert("Please agree to the Terms");
        getElement("Terms").focus();
        return false;
    }else {
        Data.sendForm(formData, "/data/LeadForm.php", LeadForm.onSendComplete);
        LeadForm.sending = true;
    }
}
// International Numbers
LeadForm.isContactNumber = function(value){
    //trace([value.slice(0, 2),value.slice(0, 1)==="27",value.length===11])
    //value.slice(0, 2) ==="27"
    if(value.length > 8){
          return true;
    }else{
        return false;
    }
};

LeadForm.isEmail = function(value){
    var re = /(\w+)\@(\w+)\.[a-zA-Z]/g;
    return re.test(value);
};

LeadForm.checkAge = function(birthDateString){
    
    var today = new Date();
    var birthDate = new Date(birthDateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    if(age >= 18) {
        return true;
    }else{
        return false;
    }
};

LeadForm.onSendComplete = function(response) {
    LeadForm.sending = false;
    
    var url = window.location.href;
    
    if(url.indexOf("index.php") === -1){
        window.location.href = window.location + "/form-complete/";
    }else{
        var newurl = url.replace("index.php","");
        window.location = newurl + "form-complete/";
    }
};

LeadForm.start = function(){
    trace("Leadform initialised");
    var form = getElement("LeadForm");
    form.addEventListener("submit",function(e){
        e.preventDefault()
    });
    
    var submitButton = getElement("SubmitButton");
    submitButton.addEventListener("click", function (e) {
        if(!LeadForm.sending) {
            trace("clicked");
            LeadForm.validate();
        }
    });
};

window.addEventListener("load",LeadForm.start);