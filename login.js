// Select form and input fields
const form = document.querySelector('form');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  const email = emailInput.value.trim();
  const password = passwordInput.value.trim();

  // Basic email format validation
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert('Please enter a valid email address.');
    event.preventDefault(); // Prevent form submission
    return;
  }

  // Password length validation
  if (password.length < 6) {
    alert('Password must be at least 6 characters long.');
    event.preventDefault(); // Prevent form submission
    return;
  }

  // If validations pass, form submission continues
  console.log('Form submitted:', { email, password });
});
