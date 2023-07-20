function toggleColor(button) {
    if (button.style.color === "red") {
        button.style.color = "grey";
    } else {
        button.style.color = "red";
    }
}

// Get all elements with the class "toggle-btn"
var buttons = document.getElementsByClassName("heartBtn");

// Loop through each button and attach the event listener
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        toggleColor(this);
    });
}
