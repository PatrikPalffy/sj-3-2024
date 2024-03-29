
  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    
    this.classList.toggle("active");

    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
setCookie =(cName,cValue,expDays)=>{
  let date = new Date();
  date.setTime(date.getTime()+(expDays*24*60*60*1000));
  const expires="expires="+date.toUTCString();
  document.cookie = cName +"=" + cValue +";" + expires + "; path=/";
}

getCookie = (cName)=>{
  const name = cName +"=";
  const cDecoded = decodeURIComponent(document.cookie);
  const cArr = cDecoded.split("; ");
  let value;
  cArr.forEach(val=>{
    if(val.indexOf(name)==0) value =val.substring(name.length);

  })

  return value;
}
document.querySelector("#cookies-btn").addEventListener("click",()=>{document.querySelector("#cookies").style.display="none";
setCookie("cookie",true,30)

})

cookieMessage=()=>{
  if(!getCookie("cookie"))
  document.querySelector("#cookies").style.display="block"
}
window.addEventListener("load",cookieMessage);

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

function validateEmail() {
  const emailInput = document.getElementById('email');
  const emailError = document.getElementById('emailError');
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(emailInput.value)) {
    emailError.textContent = 'Please enter a valid email address';
    return false;
  }

  emailError.textContent = '';
  return true;
}
