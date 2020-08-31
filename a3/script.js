/* Insert your javascript here */

if (localStorage.remember == 'true') {
  document.getElementById('name').value = localStorage.name;
  document.getElementById('EmailID').value = localStorage.EmailID;
  document.getElementById('MobileNum').value = localStorage.MobileNum;
}

function validator() {
  nameValidation();
  mobileValidation();
  nameValidation();
  tickBox();
}

function nameValidation() {
  const Name = document.getElementById('Name')
  const Email = document.getElementById('Email')
  const Mobile = document.getElementById('Mobile')
  const Subject = document.getElementById('Subject')
  const Message = document.getElementById('Message')
  const ContactUsForm = document.getElementById('ContactUsForm')
  const errorElement = document.getElementById('error')

  form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '') {
      messages.push('Name is required')
    }


  })
}

function mobileValidation() {
  const errorElement = document.getElementById('error')
  var mobileNum = document.getElementById('MobileNum').value;
  var phoneRGEX = ^ (\+ ? \(61\) | \(\+ ? 61\) | \+ ? 61 | \(0[1 - 9]\) | 0[1 - 9]) ? ( ? - ? [0 - 9]) {
    7,
    9
  }
  $;
  var phoneResult = phoneRGEX.test(phoneNumber);
  alert("phone:" + phoneResult);

  if (phoneResult == false) {
    messages.push('Name is required');
    return false;
  }

}

function nameValidation() {
  var letters = /^[A-Za-z]+$/;
  var nameChar = document.getElementById('name').value;
  if (!nameChar.value.match(letters)) {
    messages.push('Please input alphabet characters only');
    return false;
  }
}


function tickBox() {
  if (document.getElementById('rememberMe').checked) {
    localStorage.name = document.getElementById('name').value;
    localStorage.name = document.getElementById('EmailID').value;
    localStorage.name = document.getElementById('MobileNum').value;
  }
  if (document.getElementById('remember').checked !== true) {
    localStorage.removeItem('name');
    localStorage.removeItem('EmailID');
    localStorage.removeItem('MobileNum');
  }
}
  }
