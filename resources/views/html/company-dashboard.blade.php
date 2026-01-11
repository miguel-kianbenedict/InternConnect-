<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Supervisor Dashboard | InternConnect</title>
    <link rel="stylesheet" href="../css/company.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="company-dashboard">

    <!-- DASHBOARD HEADER -->
    <nav class="dashboard-nav">
        <img src="../images/pup_logo.png" alt="PUP Logo" class="nav-logo">
        <div class="nav-title">
            <h2>InternConnect</h2>
            <h3>On-the-Job Training Information Management System</h3>
        </div>
    </nav>

    <div class="dashboard-layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="user-info">
                <span class="menu-icon">
                    <img src="../images/profile-icon.png" alt="Profile">
                </span>
                <div class="user-text">
                    <strong>Supervisor Name</strong>
                    <span>Company Supervisor</span>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="active" data-page="home">
                    <span class="menu-icon"><img src="../images/home-icon.png" alt="Home"></span>
                    Home
                </li>

                <li data-page="evaluation">
                    <span class="menu-icon"><img src="../images/evaluation-icon.png" alt="Evaluation"></span>
                    Evaluations
                </li>

                <li class="logout">
                    <span class="menu-icon"><img src="../images/logout-icon.png" alt="Log Out"></span>
                    Log Out
                </li>
            </ul>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="dashboard-container">

            <!-- HOME -->
            <section class="page active" id="home">
                <h2>Home</h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>3</h3>
                            <p>Assigned Interns</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/student.png" alt="Interns">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>2</h3>
                            <p>Pending Evaluations</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/pending.png" alt="Pending">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>1</h3>
                            <p>Completed Evaluations</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/complete.png" alt="Completed">
                        </div>
                    </div>
                </div>

                <section class="table-section">
                    <h3>Intern Evaluation Status</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>OJT Period</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>BSIT</td>
                                <td>Jan – Apr 2025</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>Maria Santos</td>
                                <td>BSBA</td>
                                <td>Jan – Apr 2025</td>
                                <td>Submitted</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </section>

            <!-- EVALUATIONS LIST -->
            <section class="page" id="evaluation">
                <h2>Intern Evaluations</h2>

                <section class="table-section">
                    <h3>Assigned Interns</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>OJT Period</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- PENDING -->
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>BSIT</td>
                                <td>Jan – Apr 2025</td>
                                <td>Not Evaluated</td>
                                <td>
                                    <button class="add-btn evaluate-btn">
                                        Evaluate
                                    </button>
                                </td>
                            </tr>

                            <!-- SUBMITTED -->
                            <tr>
                                <td>Maria Santos</td>
                                <td>BSBA</td>
                                <td>Jan – Apr 2025</td>
                                <td>Submitted</td>
                                <td>
                                    <span style="font-weight:700; color:#2e7d32;">
                                        Submitted
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </section>

            <!-- EVALUATION FORM -->
            <section class="page" id="evaluate-form">
                <h2>Intern Evaluation Form</h2>

                <div class="card-section">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;"> 
                        <button class="add-btn back-btn">← Back</button> 
                    </div>
                    <h3>Intern Performance Evaluation</h3>

                    <form class="ojt-form">

                        <!-- Intern Name -->
                        <div class="form-group">
                            <label>Intern Name</label>
                            <input type="text" value="Juan Dela Cruz" disabled>
                        </div>

                        <!-- Ratings Grid -->
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Work Performance</label>
                                <select>
                                    <option>Select Rating</option>
                                    <option>Excellent</option>
                                    <option>Very Good</option>
                                    <option>Good</option>
                                    <option>Fair</option>
                                    <option>Poor</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Attitude and Behavior</label>
                                <select>
                                    <option>Select Rating</option>
                                    <option>Excellent</option>
                                    <option>Very Good</option>
                                    <option>Good</option>
                                    <option>Fair</option>
                                    <option>Poor</option>
                                </select>
                            </div>
                        </div>

                        <!-- Comments -->
                        <div class="form-group">
                            <label>Comments / Remarks</label>
                            <textarea placeholder="Enter comments here..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-actions">
                            <button type="button" class="add-btn">Submit Evaluation</button>
                        </div>

                    </form>
                </div>
            </section>

        </main>
    </div>

    <script src="../jscript/dashboard.js"></script>

</body>
</html>