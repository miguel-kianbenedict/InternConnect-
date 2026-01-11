<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard | InternConnect</title>
    <link rel="stylesheet" href="../css/student.css">
</head>
<body>

    <!-- DASHBOARD HEADER -->
    <nav class="dashboard-nav">
        <img src="../images/pup_logo.png" alt="PUP Logo" class="nav-logo">

        <div class="nav-title">
            <h2>InternConnect</h2>
            <h3>On-the-Job Training Information Management System</h3>
        </div>
    </nav>

    <!-- DASHBOARD LAYOUT -->
    <div class="dashboard-layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="user-info">
                <span class="menu-icon">
                    <img src="../images/profile-icon.png" alt="Profile">
                </span>
                <div class="user-text">
                    <strong>Student</strong>  
                    <span>Student</span>     
                </div>
            </div>


        <ul class="sidebar-menu">
            <li class="active" data-page="home">
                <span class="menu-icon">
                    <img src="../images/home-icon.png" alt="Home">
                </span>
                Home
            </li>

            <li data-page="ojt">
                <span class="menu-icon">
                    <img src="../images/info-icon.png" alt="OJT Information">
                </span>
                OJT Information
            </li>

            <li data-page="class">
                <span class="menu-icon">
                    <img src="../images/class-icon.png" alt="Class">
                </span>
                Class
            </li>

            <li data-page="files">
                <span class="menu-icon">
                    <img src="../images/files-icon.png" alt="Files">
                </span>
                Downloadable Files
            </li>

            <li class="dropdown">
                <div class="dropdown-toggle">
                    <span class="menu-icon">
                        <img src="../images/moa-icon.png" alt="MOA">
                    </span>
                    MOA
                    <span class="dropdown-arrow">&#9662;</span>
                </div>

                <ul class="dropdown-menu">
                    <li data-page="moa-pending">
                        <span class="menu-icon">
                            <img src="../images/pending-icon.png" alt="Pending MOA">
                        </span>
                        Pending MOA
                    </li>
                    <li data-page="moa-notarized">
                        <span class="menu-icon">
                            <img src="../images/notarized-icon.png" alt="Notarized MOA">
                        </span>
                        Notarized MOA
                    </li>
                </ul>
            </li>

            <li data-page="requirements">
                <span class="menu-icon">
                    <img src="../images/requirements-icon.png" alt="Requirements">
                </span>
                Requirements
            </li>

            <li class="logout">
                <span class="menu-icon">
                    <img src="../images/logout-icon.png" alt="Log Out">
                </span>
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
                            <h3>4</h3>
                            <p>Downloadable Templates</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/files-icon2.png" alt="Downloadable Files">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>Notarized</h3>
                            <p>MOA Status</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/status-icon.png" alt="MOA Status">
                        </div>
                    </div>
                </div>

                <section class="table-section">
                    <h3>Partner Companies</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Test Company</td>
                                <td>Taguig City</td>
                                <td>09123456789</td>
                                <td>test@company.com</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </section>

            <!-- OJT INFO -->
<section class="page" id="ojt">
    <h2>OJT Information</h2>

    <form class="ojt-form" action="{{ route('ojt.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="company_name" placeholder="Enter company name" required>
        </div>

        <div class="form-group">
            <label>Company Address</label>
            <input type="text" name="company_address" placeholder="Enter company address" required>
        </div>

        <div class="form-group">
            <label>Nature of Business</label>
            <textarea name="nature_of_business" placeholder="Describe the nature of business" required></textarea>
        </div>

        <div class="form-group">
            <label>Nature of Networking or Linkages</label>
            <textarea name="networking" placeholder="Describe networking or linkages" required></textarea>
        </div>

        <div class="form-grid">
            <div class="form-group">
                <label>OJT Training Status</label>
                <select name="training_status" required>
                    <option value="">Select status</option>
                    <option value="On-going">On-going</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label>Level</label>
                <select name="level" required>
                    <option value="">Select level</option>
                    <option value="Local">Local</option>
                    <option value="National">National</option>
                    <option value="International">International</option>
                </select>
            </div>
        </div>

        <div class="form-grid">
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" required>
            </div>

            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date">
            </div>
        </div>

        <button type="submit" class="add-btn">Save Information</button>
    </form>
</section>

            <!-- CLASS -->
            <section class="page" id="class">
                <h2>Class</h2>

                <div class="card-section">
                    <h3>Rooms</h3>

                    <div class="class-card">
                        <div class="class-grid">
                            <div>
                                <span class="label">Course</span>
                                <p>BS in Information Technology</p>
                            </div>
                            <div>
                                <span class="label">Subject Code</span>
                                <p>INTE 40016</p>
                            </div>
                            <div>
                                <span class="label">Description</span>
                                <p>Practicum (500 Hours)</p>
                            </div>
                            <div>
                                <span class="label">Academic Year</span>
                                <p>2025–2026</p>
                            </div>
                            <div>
                                <span class="label">Semester</span>
                                <p>2nd Semester</p>
                            </div>
                            <div>
                                <span class="label">Schedule</span>
                                <p>Saturday · 7:30–10:30 AM</p>
                            </div>
                        </div>

                        <div class="class-action joined">
                            Already Joined
                        </div>
                    </div>
                </div>

                <!-- ANNOUNCEMENTS -->
                <div class="card-section">
                    <h3>Announcements</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Announced By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hello Everyone</td>
                                <td>Welcome to your OJT class.</td>
                                <td>2025-10-10</td>
                                <td>OJT Coordinator</td>
                            </tr>
                            <tr>
                                <td>Registration</td>
                                <td>Please complete your requirements.</td>
                                <td>2025-02-05</td>
                                <td>OJT Adviser</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- FILES -->
            <section class="page" id="files">
                <h2>Downloadable Files</h2>

                <div class="table-section">

                    <div class="table-header">
                        <h3>Downloadable Files</h3>

                        <div class="table-controls">
                            <input type="text" placeholder="Search files...">
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>File Code</th>
                                <th>Date & Time Submitted</th>
                                <th>Uploader Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>BSIT OJT Recommendation Letter</td>
                                <td>1705644560.docx</td>
                                <td>2024-03-05 13:50</td>
                                <td>Coordinator</td>
                                <td>
                                    <button class="add-btn">Download</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Consent Form</td>
                                <td>1705577509.docx</td>
                                <td>2024-02-22 04:52</td>
                                <td>Coordinator</td>
                                <td>
                                    <button class="add-btn">Download</button>
                                </td>
                            </tr>

                            <tr>
                                <td>MOA Template</td>
                                <td>1705246089.docx</td>
                                <td>2023-12-14 07:57</td>
                                <td>Coordinator</td>
                                <td>
                                    <button class="add-btn">Download</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Student Information</td>
                                <td>1740456844.docx</td>
                                <td>2024-04-25 12:03</td>
                                <td>Professor</td>
                                <td>
                                    <button class="add-btn">Download</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 4 of 4 entries
                    </div>

                </div>
            </section>

            <!-- MOA -->
            <section class="page" id="moa-pending">
                <h2>Memorandum of Agreement</h2>

                <div class="card-section">
                    <h3>Pending for Approval MOA</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Company Contact No.</th>
                                <th>Company Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" style="text-align:center;">
                                    No data available
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="page" id="moa-notarized">
            <h2>Memorandum of Agreement</h2>

            <div class="card-section">
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <h3>Notarized MOA</h3>
                    <button class="add-btn">Add Notarized MOA</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Company Contact No.</th>
                            <th>Company Email</th>
                            <th>School Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample Corporation</td>
                            <td>09123456789</td>
                            <td>sample@corp.com</td>
                            <td>2024–2025</td>
                            <td>
                                <button class="add-btn">Download</button>
                                <button class="add-btn">View Company</button>
                                <button class="add-btn">MOA Tracker</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- REQUIREMENTS -->
        <section class="page" id="requirements">
            <h2>File Requirements</h2>

            <div class="card-section">
                <div class="table-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <div class="table-actions">
                        <button class="add-btn" id="openUploadModal">Upload Document</button>
                    </div>
                    
                    <div class="table-controls">
                        <input type="text" placeholder="Search requirements..." style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 13px; width: 250px;">
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>File Name</th>
                            <th>Status</th>
                            <th>Date Submitted</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Acceptance Letter</td>
                            <td>acceptance_letter.pdf</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>2025-03-08 12:45</td>
                            <td><button class="add-btn">Remove</button></td>
                        </tr>
                        <tr>
                            <td>Medical Clearance</td>
                            <td>medical_clearance.pdf</td>
                            <td><span class="status completed">Approved</span></td>
                            <td>2025-03-05 09:30</td>
                            <td><button class="add-btn">Remove</button></td>
                        </tr>
                    </tbody>
                </table>

                <div class="table-footer">
                    Showing 1 to 2 of 2 entries
                </div>
            </div>
        </section>

        </main>
        <!-- UPLOAD REQUIREMENTS MODAL -->
        <div class="modal" id="uploadModal">
            <div class="modal-content">
                <h3>Submit File</h3>

                <form class="upload-form">
                    <div class="form-group">
                        <label>Category</label>
                        <select>
                            <option>Select Category</option>
                            <option>Resume</option>
                            <option>Acceptance Letter</option>
                            <option>Consent Form</option>
                            <option>Recommendation Letter</option>
                            <option>Training Partner Sheet</option>
                            <option>Student Information Sheet</option>
                            <option>Weekly Accomplishment Report</option>
                            <option>Daily Time Record</option>
                            <option>Video Resume</option>
                            <option>Medical Clearance</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Choose File</label>
                        <input type="file">
                    </div>

                    <div class="modal-actions">
                        <button type="button" class="add-btn" id="closeUploadModal">Cancel</button>
                        <button type="submit" class="add-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    <script src="../jscript/dashboard.js"></script>
</body>
</html>