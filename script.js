// script.js

// Validate Login Form
document.querySelector("form").addEventListener("submit", function (e) {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username === "" || password === "") {
        alert("All fields are required.");
        e.preventDefault();
    }
});

// Validate Register Form
document.querySelectorAll("form")[1]?.addEventListener("submit", function (e) {
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username === "" || email === "" || password === "") {
        alert("All fields are required.");
        e.preventDefault();
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Please enter a valid email address.");
        e.preventDefault();
    }
});
