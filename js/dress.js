const showPopupButton = document.getElementById("showPopup");
const popup = document.getElementById("popup");
const closePopup = document.getElementById("closePopup");

showPopupButton.addEventListener("click", () => {
    popup.style.display = "block";
});

closePopup.addEventListener("click", () => {
    popup.style.display = "none";
});