// Get selected role
const role = localStorage.getItem("userRole");

document.addEventListener("DOMContentLoaded", () => {

    // Show selected role
    const roleLabel = document.getElementById("selectedRole");
    if (role && roleLabel) {
        roleLabel.textContent = "Logging in as: " + role.charAt(0).toUpperCase() + role.slice(1);
    }

    const loginForm = document.getElementById("loginForm");
    if (!loginForm) return;

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // STUDENT
        if (role === "student" && username === "student" && password === "1234") {
            window.location.href = "student-dashboard.html";
        }

        // COORDINATOR
        else if (role === "coordinator" && username === "coordinator" && password === "1234") {
            window.location.href = "coordinator-dashboard.html";
        }

        // PROFESSOR
        else if (role === "professor" && username === "professor" && password === "1234") {
            window.location.href = "professor-dashboard.html";
        }

        // COMPANY
        else if (role === "company" && username === "company" && password === "1234") {
            window.location.href = "company-dashboard.html";
        }

        // NO ROLE / WRONG LOGIN
        else {
            alert("Invalid login or role not selected.");
        }
    });
});