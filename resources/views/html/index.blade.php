<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Role | InternConnect</title>
    <link rel="stylesheet" href="../css/role.css">
</head>

<body>
    <div class="overlay"></div>

    <div class="role-container">
        <img src="../images/pup_logo.png" alt="PUP Logo" class="logo">

        <h1>InternConnect</h1>
        <h3>On-the-Job Training Information Management System</h3>
        <p class="subtitle">Select your role to continue</p>

        <div class="role-cards">

            <div class="role-card" onclick="selectRole('student')">
                <img src="../images/student.png" data-white="../images/student_white.png" alt="Student Icon" class="role-icon">
                <h2>Student</h2>
                <p>OJT Trainee Access</p>
            </div>

            <div class="role-card" onclick="selectRole('coordinator')">
                <img src="../images/coordinator.png" data-white="../images/coordinator_white.png" alt="Coordinator Icon" class="role-icon">
                <h2>Coordinator</h2>
                <p>OJT System Management</p>
            </div>

            <div class="role-card" onclick="selectRole('professor')">
                <img src="../images/professor.png" data-white="../images/professor_white.png" alt="Professor Icon" class="role-icon">
                <h2>Professor</h2>
                <p>Adviser</p>
            </div>

            <div class="role-card" onclick="selectRole('company')">
                <img src="../images/company.png" data-white="../images/company_white.png" alt="Company Icon" class="role-icon">
                <h2>Company</h2>
                <p>Supervisor Access</p>
            </div>

        </div>
    </div>

    <footer>
        © 2025 InternConnect | PUP Taguig | All Rights Reserved
    </footer>

    <script src="../jscript/role.js"></script>
    <script>
        // Swap icons on hover
        document.querySelectorAll('.role-card').forEach(card => {
            const icon = card.querySelector('.role-icon');
            const originalSrc = icon.src;
            const whiteSrc = icon.dataset.white;

            card.addEventListener('mouseenter', () => { icon.src = whiteSrc; });
            card.addEventListener('mouseleave', () => { icon.src = originalSrc; });
        });
    </script>
</body>
</html>