//displays--
// main-mpesa
// main-paypal
//buttons--
//mpesa for mpesa payment
//paypal for paypal payment

const mpesaForm = document.querySelector(".main-mpesa");
const paypalForm = document.querySelector(".main-paypal");
const mpesaPay = document.querySelectorAll(".mpesa");
const paypalPay = document.querySelectorAll(".paypal");

paypalPay[0].addEventListener("click", () => {
  paypalForm.style.display = "block";
  mpesaForm.style.display = "none";
});
paypalPay[1].addEventListener("click", () => {
  paypalForm.style.display = "block";
  mpesaForm.style.display = "none";
});

mpesaPay[0].addEventListener("click", () => {
  mpesaForm.style.display = "block";
  paypalForm.style.display = "none";
});
mpesaPay[1].addEventListener("click", () => {
  mpesaForm.style.display = "block";
  paypalForm.style.display = "none";
});
