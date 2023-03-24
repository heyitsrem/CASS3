function myFunction() {
    var x = document.getElementById("id_password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
function changeIcon() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "<i class=\"fa-solid fa-eye\" style=\"cursor: pointer;\" onclick=\"myFunction()\"></i>") {
    x.innerHTML = "<i class=\"fa-solid fa-eye-slash\" style=\"cursor: pointer;\" onclick=\"myFunction()\"></i>";
  } else {
    x.innerHTML = "<i class=\"fa-solid fa-eye\" style=\"cursor: pointer;\" onclick=\"myFunction()\"></i>";
  }
}
function logoutFunction() {
  window.location.href="/CASS";  
}
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
