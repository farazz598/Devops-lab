// setTimeout(() => {
//     document.body.style.backgroundImage = "url('../images/background/bg1.jpg')";
// }, 3000);

const chk = document.getElementById('chk');
const scroll = document.querySelector("#scroll");
const navbar = document.querySelector("#navbar");


chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
});

function openNav() {
    document.getElementById("sidebar").style.width = "30%";
    document.body.style = "background-color: rgba(0, 0, 0, 0.5);";
}

function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.body.style = "opacity:1;";
}

function openNav2() {
    document.getElementById("sidebar2").style.width = "30%";
    document.body.style = "background-color: rgba(0, 0, 0, 0.5);";
}

function closeNav2() {
    document.getElementById("sidebar2").style.width = "0";
    document.body.style = "opacity:1;";
}

function chkEmail() {
    var c = document.getElementById("emailid");
    if (c.value == "") {
        alert("Please enter your email address and try again");
        return;
    }
    var d = c.value.search(/bmsce.ac.in|gmail.com|outlook.com|hotmail.com|yahoo.com/i);
    if (d == -1) {
        alert("Please enter your valid email address and try again");
    } else {
        alert("Thank you for subscribing");
    }
}

function chkPhone() {
    var num = document.getElementById("pnum");
    if (num.value == "") {
        alert("Please enter your phone number and try again");
        return;
    }
    var d = num.value.search(/^[0-9]{10}$/);
    if (d == -1) {
        alert("Please enter your valid phone number and try again");
    } else {
        alert("Thank you for subscribing");
    }
}

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 500) {
        scroll.style.display = "block"
        navbar.style.height = "100px"
    } else {
        scroll.style.display = "none"
        navbar.style.height = "120px"
    }
})


var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;

    console.log("Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude)
  }