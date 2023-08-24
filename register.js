const form = document.querySelector(".register form");
const registerbutton = form.querySelector(".registerbtn input");

form.onsubmit = (e) => {
    e.preventDefault();
}

registerbutton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "welcome.php";
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}