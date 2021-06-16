
let container = document.getElementById("container");
let input = document.getElementById("input");
let checkbox = document.getElementById("checkbox");
let button = document.getElementById("button");


button.addEventListener("click", function (e) {
    e.preventDefault();
    if (!input.value){
        container.innerHTML = "<p>Email address is required</p>"
    } else if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(input.value)) {
        container.innerHTML = "<p>Please provide a valid e-mail address</p>"
    } else if (!checkbox.checked) {
        container.innerHTML = "<p>You must accept the terms and conditions</p>"
    } else if (input.value.endsWith(".co")) {
        container.innerHTML = "<p>We are not accepting subscriptions from Colombia emails</p>.";
    } else {
        container.innerHTML = "";
        document.querySelector(".winput").classList.add("divnone");
        document.querySelector(".noinput").classList.remove("divnone");
        document.querySelector(".hline").setAttribute("id", "newvline");
        document.querySelector(".social").setAttribute("id", "newsocial");
    }
})
