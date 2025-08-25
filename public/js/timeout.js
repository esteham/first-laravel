setTimeout(function () {
    const alertBox = document.getElementById("alert-success");
    if (alertBox) {
        alertBox.style.transition = "opacity 0.5s ease";
        alertBox.style.opacity = "0";

        setTimeout(() => {
            alertBox.remove();
        }, 500);
    }
}, 5000);
