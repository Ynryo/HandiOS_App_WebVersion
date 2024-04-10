const modal = document.getElementById("account-modal");
const accountPicture = document.getElementById("account-picture");

accountPicture.addEventListener("click", () => {
    const computedStyle = window.getComputedStyle(modal);
    const display = computedStyle.getPropertyValue("display");
    
    if (display === "none") {
        modal.style.display = "flex";
    } else {
        modal.style.display = "none";
    }
});
