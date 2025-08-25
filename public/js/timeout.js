//Alert-box hide with id = alert-success

// setTimeout(function () {
//     const alertBox = document.querySelectorAll(".alert-success");
//     if (alertBox) {
//         alertBox.style.transition = "opacity 0.5s ease";
//         alertBox.style.opacity = "0";

//         setTimeout(() => {
//             alertBox.remove();
//         }, 500);
//     }
// }, 5000);

setTimeout(function () {
    const alerts = document.querySelectorAll(".alert-success");
    alerts.forEach((alertBox) => {
        alertBox.style.transition = "opacity 0.5s ease";
        alertBox.style.opacity = "0";

        setTimeout(() => {
            alertBox.remove();
        }, 500);
    });
}, 5000);
