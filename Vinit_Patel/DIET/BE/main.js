function validateForm() {
    var emailfilter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var x = emailfilter.test(document.forms["my-form"]["Working-Email"].value);
    if (x == false) {
        alert("Please Enter valid email id..");
        return false;
    }
}
function phone() {
    var phoneno = /^\d{10}$/;
    var y = phoneno.test(document.forms["my-form"]["Phone"].value)
    if (y == false) {
        alert("Please Enter Valid  Phone Number like'1234567890'");
        return false;
    }
}
var form = document.getElementById("my-form");
async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("status");
    var data = new FormData(event.target);
    fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            status.innerHTML = "Thanks for your submission!";
            form.reset()
        } else {
            response.json().then(data => {
                if (Object.hasOwn(data, 'errors')) {
                    status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
                } else {
                    status.innerHTML = "Oops! There was a problem submitting your form"
                }
            })
        }
    }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
    });
}
form.addEventListener("submit", handleSubmit)
form.addEventListener("submt", validateForm)
form.addEventListener("submit", phone)