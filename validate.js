document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let message = document.getElementById("message").value.trim();
  let errorMessage = "";

  if (name === "") {
    errorMessage = "Name is required!";
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    errorMessage = "Enter a valid email!";
  } else if (!/^\d{7,15}$/.test(phone)) {
    errorMessage = "Phone must be 7–15 digits!";
  } else if (message.length < 5) {
    errorMessage = "Message must be at least 5 characters!";
  }

  let formMessage = document.getElementById("formMessage");
  if (errorMessage) {
    formMessage.style.color = "red";
    formMessage.textContent = errorMessage;
  } else {
    formMessage.style.color = "green";
    formMessage.textContent = "Form submitted successfully!";
    document.getElementById("contactForm").reset();
  }
});
