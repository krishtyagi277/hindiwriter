let emailId = "";

function setEmailId(e) {
    
    emailId = e.target.value;
    console.log(emailId)
 
}

function sendSubscribeEmail(e) {
    e.preventDefault();
    if(validateValue(emailId)){
        alert("!Please fill valid email id")
       return;
    }
    
    fetch(`http://${window.location.hostname}/home/subscribeEmail?email=` + emailId)
        .then(response => response.json())
        .then(data => {
            document.getElementsByClassName('email-alert')[0].style.display = "block";
            emailId = "";
            clearBlock();
        }).catch(error => {
            emailId = "";
            console.log(error)
        });
    }


function sponserEmail(e){
    e.preventDefault();
    let nature = document.getElementById('type');
    let name = document.getElementById('name');
    let contact_num = document.getElementById('phone_no');
    let website = document.getElementById('website');
    let logo = document.getElementById('image')    
    if(validateValue(nature.value)){
        nature.style.border = "1px solid red";
        return;
    }
    
    if(validateValue(name.value)){
        name.style.border = "1px solid red";
        return;
    }
    if(validateValue(emailId)){
        document.getElementById('email').style.border = "1px solid red";
        return;
    }

    if(validateValue(contact_num.value)){
        contact_num.style.border = "1px solid red";
        return;
    }
   

    fetch(`http://${window.location.hostname}/home/sponserEmail?email=${emailId}&&name=${name.value}&&type=${nature.value}&&phone_no=${contact_num.value}&&website=${website.value}&&image=${logo.value}`)
        .then(response => response.json())
        .then(data => {
           
            document.getElementsByClassName('email-alert')[0].style.display = "block";
            emailId = "";
            clearBlock();
            document.getElementById('sponse-form').reset();
            
        }).catch(error => {
            emailId = "";
            console.log(error)
        });
}

function becomeMemberEmail(e){
    e.preventDefault();

    let first_name = document.getElementById('first_name');
    // let first_name_hn = document.getElementById('first_name_hn');
    let last_name= document.getElementById('last_name');
    // let last_name_hn = document.getElementById('last_name_hn');
    let mobile_num =  document.getElementById('phone_no');
    let city = document.getElementById('city');
    let state = document.getElementById('state');
    let country = document.getElementById('country');
    let password = document.getElementById('password');
    let confirm_password = document.getElementById('confirm_password');
    let office_num = document.getElementById('office_no');
    let home_num = document.getElementById('home_no');
    let fax_no = document.getElementById('fax_no');
    let website = document.getElementById('website');
    let blog = document.getElementById('blog');
    let donation_amt = document.getElementById('donation_amount');
    let link = document.getElementById('published_links');

    let author_yes = document.getElementById('author-yes').checked;
    let author_no = document.getElementById('author-no').checked;


    let authorval = "no";  
    if(author_yes){
        authorval = document.getElementById('author-yes').value;
    } else if(author_no){
        authorval = document.getElementById('author-no').value;
    }

    if(validateValue(first_name.value)){
        first_name.style.border = "1px solid red";
        return;
    }

    
    if(validateValue(last_name.value)){
        last_name.style.border = "1px solid red";
        return;
    }
    if(validateValue(emailId)){
        document.getElementById('email').style.border = "1px solid red";
        return;
    }
   
    if(validateValue(mobile_num.value)){
        mobile_num.style.border = "1px solid red";
        return;
    }
    if(validateValue(city.value)){
        city.style.border = "1px solid red";
        return;
    }
    if(validateValue(state.value)){
        state.style.border = "1px solid red";
        return;
    }
    if(validateValue(country.value)){
        country.style.border = "1px solid red";
        return;
    }
   
    if(validateValue(password.value)){
        password.style.border = "1px solid red";
        return;
    }

    if(validateValue(confirm_password.value) || password.value !== confirm_password.value){
        confirm_password.style.border = "1px solid red";
        return;
    }
    
    
    
    fetch(`http://${window.location.hostname}/home/memberEmail?email=${emailId}&&firstname=${first_name.value}&&lastname=${last_name.value}&&number=${mobile_num.value}&&writer=${authorval}&&city=${city.value}&&state=${state.value}&&country=${country.value}&&password=${password.value}&&confirmPassword=${confirm_password.value}&&officenum=${office_num.value}&&homenum=${home_num.value}&&faxnum=${fax_no.value}&&website=${website.value}&&blog=${blog.value}&&donation=${donation_amt.value}&&link=${link.value}` )
        .then(response => response.json())
        .then(data => {
          
            document.getElementsByClassName('email-alert')[0].style.display = "block";
            emailId = "";
            document.getElementById('member_registration').reset()
            clearBlock();
            
        }).catch(error => {
            emailId = "";
            console.log(error)
        });
}

function donationEmail(e){
    e.preventDefault();
   
    let formToSubmit = document.getElementById('donation_form');
    let full_name=  document.getElementById('full_name');
    let contact_num = document.getElementById('phone_no');
    let donation_amt = document.getElementById('amount');
    let currency = document.getElementById('currency');


    if(validateValue(full_name.value)){
        full_name.style.border = "1px solid red";
        return;
    }
    if(validateValue(emailId)){
        document.getElementById('email').style.border = "1px solid red";
        return;
    }
    if(validateValue(currency.value)){
        currency.style.border = "1px solid red";
        return;
    }
    if(validateValue(contact_num.value)){
        contact_num.style.border = "1px solid red";
        return;
    }
    if(validateValue(donation_amt.value) || isNaN(donation_amt.value)){
        alert("!Amout must not be empty and contains only number")
        donation_amt.style.border = "1px solid red";
        return;
    }

     formToSubmit.submit();
    // fetch(`http://${window.location.hostname}/home/donationEmail?email=` + emailId)
    //     .then(response => response.json())
    //     .then(data => {
          
    //         document.getElementsByClassName('email-alert')[0].style.display = "block";
    //         emailId = "";
    //         clearBlock();
            
    //     }).catch(error => {
    //         emailId = "";
    //         console.log(error)
    //     });
}

function contactUsEmail(e){
    e.preventDefault();
    let name = document.getElementById('full_name');
    let contact_num = document.getElementById('phone_no');
    let subject = document.getElementById('subject');
    let message =  document.getElementById('message');
    
    if(validateValue(name.value) ){
        name.style.border = "1px solid red";
        return;
    }
    if(validateValue(emailId) ){
        document.getElementById('email').style.border = "1px solid red";
        return;
    }
    if(validateValue(contact_num.value) || isNaN(contact_num.value)){
        contact_num.style.border = "1px solid red";
        return;
    }
    
    fetch(`http://${window.location.hostname}/home/contactusEmail?email=${emailId}&&name=${name.value}&&number=${contact_num.value}&&subject=${subject.value}&&message=${message.value}`)
        .then(response => response.json())
        .then(data => {
          
            document.getElementsByClassName('email-alert')[0].style.display = "block";
            emailId = ""
            document.getElementById('contact_us').reset();
            clearBlock();
            
        }).catch(error => {
            emailId = "";
            console.log(error)
        });
}

function clearBlock () {
    setInterval(()=>{
        document.getElementsByClassName('email-alert')[0].style.display = "none";
    }, 5000) 
    
}


if(window.innerWidth > 992) {
    let navLinksArr = document.querySelectorAll(".nav-link.dropdown-toggle.mega-menu-main-heading");
    for(let navlink of navLinksArr){
        navlink.removeAttribute("data-toggle");
    }
} else{
    let navLinksArr = document.querySelectorAll(".nav-link.dropdown-toggle.mega-menu-main-heading");
    for(let navlink of navLinksArr){
        navlink.setAttribute("data-toggle", "dropdown");
    }
}

window.onscroll = function() {myFunction()};

let header = document.getElementById("nav-bar");
let sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


function validateValue(data) {
    if(data === "" || data ===  undefined || data === null){
        return true;
    }
    return false;
}

function validateImage() {
    var formData = new FormData();
    var file = document.getElementById("image").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("image").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("image").value = '';
        return false;
    }
    return true;
}