let emailId = "";

function setEmailId(e) {
    
    emailId = e.target.value;
    console.log(emailId)
 
}

function sendSubscribeEmail(e) {
    e.preventDefault();
    fetch('http://hindiwriter.localhost/home/subscribeEmail?email=' + emailId)
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
    
    fetch('http://hindiwriter.localhost/home/sponserEmail?email=' + emailId)
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

function becomeMemberEmail(e){
    e.preventDefault();
    
    fetch('http://hindiwriter.localhost/home/memberEmail?email=' + emailId)
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

function donationEmail(e){
    e.preventDefault();
    
    fetch('http://hindiwriter.localhost/home/donationEmail?email=' + emailId)
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

function contactUsEmail(e){
    e.preventDefault();
    
    fetch('http://hindiwriter.localhost/home/contactusEmail?email=' + emailId)
        .then(response => response.json())
        .then(data => {
          
            document.getElementsByClassName('email-alert')[0].style.display = "block";
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