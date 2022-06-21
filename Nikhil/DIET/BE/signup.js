function validation()
{
    var emailfilter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var x = emailfilter.test(document.forms["signup"]["Username"].value);
    if (x == false) {
        alert("Please Enter valid email id..");
        return false;
    }
}
function password(){
    var passwordfilter =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/
    var y = passwordfilter.test(document.forms["signup"]["Password"].value);
    if(y==false){
        alert("To check a password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character");
        return false;
    }
}

function check(){
  
    if(validation() == false){
      if(password() == false){
        return false;
      }
      else{
        return false;
      }
    }else{
      if(password() == false){
        return false;
      }
      else{
        return true;
      }
    }
  
  }