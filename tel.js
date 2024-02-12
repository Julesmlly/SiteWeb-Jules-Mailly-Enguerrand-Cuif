
function pressKey(key) {
    var display = document.getElementById("display");
    display.innerText += key;
}

function clearDial() {
    var display = document.getElementById("display");
    display.innerText = '';
}

function makeCall() {
    var number = document.getElementById("display").innerText;
    if (number) {
        window.open('tel:' + number);
    }
}

document.getElementById("showDialer").addEventListener("click", function() {
    var dialer = document.getElementById("phoneDialer");
    dialer.style.display = dialer.style.display === 'none' ? 'block' : 'none';
});

document.getElementById("showEmailForm").addEventListener("click", function() {
    var emailForm = document.getElementById("emailForm");
    emailForm.style.display = emailForm.style.display === 'none' ? 'block' : 'none';
});
