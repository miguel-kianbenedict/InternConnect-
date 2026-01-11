<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coordinator Dashboard | InternConnect</title>
    <link rel="stylesheet" href="../css/coor.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="coordinator-dashboard">

    <nav class="dashboard-nav">
        <img src="../images/pup_logo.png" alt="PUP Logo" class="nav-logo">
        <div class="nav-title">
            <h2>InternConnect</h2>
            <h3>On-the-Job Training Information Management System</h3>
        </div>
    </nav>

    <div class="dashboard-layout">

        <aside class="sidebar">
            <div class="user-info">
                <span class="menu-icon">
                    <img src="../images/profile-icon.png" alt="Profile">
                </span>
                <div class="user-text">
                    <strong>Coordinator</strong>
                    <span>OJT Coordinator</span>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="active" data-page="home">
                    <span class="menu-icon"><img src="../images/home-icon.png" alt="Home"></span>
                    Home
                </li>
                <li data-page="students">
                    <span class="menu-icon"><img src="../images/student_white.png" alt="Students"></span>
                    Students
                </li>
                <li data-page="professors">
                    <span class="menu-icon"><img src="../images/professor_white.png" alt="Professors"></span>
                    Professors
                </li>
                <li data-page="templates">
                    <span class="menu-icon"><img src="../images/files-icon.png" alt="Upload Templates"></span>
                    Upload Templates
                </li>
                <li data-page="maintenance">
                    <span class="menu-icon"><img src="../images/maintenance-icon.png" alt="Maintenance"></span>
                    Maintenance
                </li>
                <li data-page="moa">
                    <span class="menu-icon"><img src="../images/moa-icon.png" alt="MOA"></span>
                    MOA
                </li>
                <li class="dropdown">
                    <div class="dropdown-toggle">
                        <span class="menu-icon">
                            <img src="../images/reports-icon.png" alt="MOA">
                        </span>
                        Reports
                        <span class="dropdown-arrow">&#9662;</span>
                    </div>

                    <ul class="dropdown-menu">
                        <li data-page="reports-ojt">
                            <span class="menu-icon">
                                <img src="../images/info-icon.png" alt="OJT Reports">
                            </span>
                            Student OJT Information
                        </li>
                        <li data-page="reports-expired">
                            <span class="menu-icon">
                                <img src="../images/expired-icon.png" alt="Expired MOA">
                            </span>
                            Expired MOA
                        </li>
                    </ul>
                </li>
                <li data-page="evaluation">
                    <span class="menu-icon"><img src="../images/evaluation-icon.png" alt="Evaluation"></span>
                    Evaluation
                </li>
                <li class="logout">
                    <span class="menu-icon"><img src="../images/logout-icon.png" alt="Log Out"></span>
                    Log Out
                </li>
            </ul>
        </aside>

        <main class="dashboard-container">

            <section class="page active" id="home">
                <h2>Home</h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>50</h3>
                            <p>Students</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/student.png" alt="Students">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>8</h3>
                            <p>Professors</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/professor.png" alt="Professors">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>12</h3>
                            <p>Uploaded Templates</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/files-icon2.png" alt="Templates">
                        </div>
                    </div>
                </div>

                <div class="table-section"> <h3>Create Announcement</h3>
                    <div class="ojt-form">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" placeholder="Enter announcement title">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea placeholder="Write announcement content"></textarea>
                        </div>
                        <button type="button" class="add-btn">Create Announcement</button>
                    </div>
                </div>
            </section>

            <!--STUDENTS-->
            <section class="page" id="students">
                <h2>Students List</h2>
                <div class="card-section">
                    <div class="table-header">
                        <h3 style="margin-bottom: 0;">Generate Report</h3>
                    </div>
                    <div class="table-header">
                        <div class="form-group" style="flex-direction: row; align-items: center; gap: 10px;">
                            <label>Course:</label>
                            <select style="width: 300px;">
                                <option value="" disabled selected hidden>Choose Course</option>
                                
                                <option>Bachelor of Science in Information Technology</option>
                                <option>Bachelor of Science in Mechanical Engineering</option>
                                <option>Bachelor of Science in Electronic Engineering</option>
                            </select>
                        </div>
                        <button class="add-btn">Generate Report</button>
                    </div>
                </div>
                
                <div class="card-section">
                    <div class="table-header">
                        <h3 style="margin-bottom: 0;">Active Student List</h3>
                        
                        <div class="table-controls">
                            <input type="text" placeholder="Search student...">
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year & Section</th>
                                <th>Professor's Name</th>
                                <th>Subject Code</th>
                                <th>Personal Info</th>
                                <th>OJT Info</th>
                                <th>MOA Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alex J. Rivers</td>
                                <td>BSIT</td>
                                <td>4-1</td>
                                <td>Dr. Sarah Jenkins</td>
                                <td>INTE 40016</td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">Edit Status</button></td>
                                <td><button class="add-btn">Notify</button></td>
                            </tr>
                            <tr>
                                <td>Sam K. Sterling</td>
                                <td>BSIT</td>
                                <td>4-1</td>
                                <td>Dr. Sarah Jenkins</td>
                                <td>INTE 40016</td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">Edit Status</button></td>
                                <td><button class="add-btn">Notify</button></td>
                            </tr>
                            <tr>
                                <td>Jordan M. Vance</td>
                                <td>BSIT</td>
                                <td>4-1</td>
                                <td>Dr. Sarah Jenkins</td>
                                <td>INTE 40016</td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">Edit Status</button></td>
                                <td><button class="add-btn">Notify</button></td>
                            </tr>
                            <tr>
                                <td>Casey L. Thorne</td>
                                <td>BSIT</td>
                                <td>4-1</td>
                                <td>Dr. Sarah Jenkins</td>
                                <td>INTE 40016</td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">Edit Status</button></td>
                                <td><button class="add-btn">Notify</button></td>
                            </tr>
                            <tr>
                                <td>Morgan B. Hayes</td>
                                <td>BSIT</td>
                                <td>4-1</td>
                                <td>Dr. Sarah Jenkins</td>
                                <td>INTE 40016</td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">View</button></td>
                                <td><button class="add-btn">Edit Status</button></td>
                                <td><button class="add-btn">Notify</button></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 5 of 5 entries
                    </div>
                </div>
            </section>

            </section>

            <!--PROFESSORS-->
            <section class="page" id="professors">
                <h2>Professors</h2>

                <div class="card-section">
                    <div class="table-header">
                        <div class="table-actions">
                            <button class="add-btn" id="add-professor">+ Add New Professor</button>
                        </div>
                        
                        <div class="table-controls">
                            <input type="text" placeholder="Search professor...">
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Prof. Emerson J. Vance</td>
                                <td>evance.ojtims@university.edu.ph</td>
                                <td>INTE 40016</td>
                                <td>Practicum (600 HOURS)</td>
                                <td style="text-align: center;">
                                    <button class="add-btn">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Helena S. Thorne</td>
                                <td>hthorne.ojtims@university.edu.ph</td>
                                <td>INTE401</td>
                                <td>OJT</td>
                                <td style="text-align: center;">
                                    <button class="add-btn">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Prof. Julian R. Sterling</td>
                                <td>jsterling.ojtims@university.edu.ph</td>
                                <td>INTEE401</td>
                                <td>PRACTICUM</td>
                                <td style="text-align: center;">
                                    <button class="add-btn">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Marcus L. Hayes</td>
                                <td>mhayes.ojtims@university.edu.ph</td>
                                <td>INTEE401</td>
                                <td>PRACTICUM</td>
                                <td style="text-align: center;">
                                    <button class="add-btn">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 4 of 4 entries
                    </div>
                </div>
            </section>

            <!-- ADD PROFESSOR PAGE -->
            <section class="page" id="add-professor-page">
                <h2>Add New Professor</h2>

                <!-- PROFESSOR ACCOUNT -->
                <div class="card-section">
                    <h3>Professor Account</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="professor@university.edu.ph">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Enter temporary password">
                        </div>
                    </div>
                </div>

                <!-- PROFESSOR INFORMATION -->
                <div class="card-section">
                    <h3>Professor Information</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" placeholder="Prof. Juan Dela Cruz">
                        </div>

                        <div class="form-group">
                            <label>Subject Code</label>
                            <input type="text" placeholder="INTE 40016">
                        </div>

                        <div class="form-group">
                            <label>Subject Description</label>
                            <input type="text" placeholder="Practicum (600 HOURS)">
                        </div>
                    </div>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="form-actions">
                    <button class="add-btn">Save Professor</button>
                    <button class="add-btn back-btn">Back</button>
                </div>
            </section>

            <!-- UPLOAD TEMPLATES -->
            <section class="page" id="templates">
                <h2>Upload Templates</h2>

                <div class="table-section">

                    <div class="table-header">
                        <h3>Uploaded Templates</h3>
                    </div>

                    <div class="table-header">
                        <div class="table-actions">
                            <button class="add-btn" id="template">Upload New Template</button>
                        </div>
                        
                        <div class="table-controls">
                            <input type="text" placeholder="Search template...">
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
                                    <button class="add-btn download">Download</button>
                                    <button class="add-btn remove">Remove</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Consent Form</td>
                                <td>1705577509.docx</td>
                                <td>2024-02-22 04:52</td>
                                <td>Coordinator</td>
                                <td>
                                    <button class="add-btn download">Download</button>
                                    <button class="add-btn remove">Remove</button>
                                </td>
                            </tr>

                            <tr>
                                <td>MOA Template</td>
                                <td>1705246089.docx</td>
                                <td>2023-12-14 07:57</td>
                                <td>Coordinator</td>
                                <td>
                                    <button class="add-btn download">Download</button>
                                    <button class="add-btn remove">Remove</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Student Information</td>
                                <td>1740456844.docx</td>
                                <td>2024-04-25 12:03</td>
                                <td>Professor</td>
                                <td>
                                    <button class="add-btn download">Download</button>
                                    <button class="add-btn remove">Remove</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 4 of 4 entries
                    </div>

                </div>
            </section>

            <section class="page" id="maintenance">
    <h2>Maintenance</h2>

    <div class="card-section">
        <div class="table-header">
            <h3 style="margin-bottom: 0;">Courses</h3>
        </div>

        <div class="table-header">
            <div class="table-actions">
                <button class="add-btn" id="toggleCourseForm">+ Add Course</button>
            </div>
            
            <div class="table-controls">
                <input type="text" placeholder="Search course...">
            </div>
        </div>

        <div id="courseFormContainer" style="padding: 20px; border-bottom: 1px solid #eee; display: none; background-color: #f9f9f9;">
            <form action="{{ route('courses.store') }}" method="POST" style="display: flex; gap: 10px; align-items: flex-end;">
                @csrf
                <div class="form-group" style="flex: 2;">
                    <label style="display:block; margin-bottom:5px; font-weight: bold;">Course Name</label>
                    <input type="text" name="course_name" placeholder="Enter course name" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div class="form-group" style="flex: 1;">
                    <label style="display:block; margin-bottom:5px; font-weight: bold;">Acronym</label>
                    <input type="text" name="acronym" placeholder="Enter acronym" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <button type="submit" class="add-btn" style="height: fit-content; padding: 10px 20px;">Save Course</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Acronym</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>

            <tbody>
                @if(isset($courses) && count($courses) > 0)
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->acronym }}</td>
                            <td style="text-align: center;">
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="add-btn" style="background-color: #dc3545;">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" style="text-align:center;">No courses found in the database.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="table-footer">
            Showing {{ count($courses) }} entries
        </div>
    </div>
</section>

            <!-- ADD COURSE MODAL -->
            <div id="addCourseModal" class="modal">
                <div class="modal-content">
                    <h3>Add New Course</h3>
                    <form id="addCourseForm">
                        <div class="form-group">
                            <label>Course Name</label>
                            <input type="text" id="courseName" placeholder="Enter course name" required>
                        </div>
                        <div class="form-group">
                            <label>Acronym</label>
                            <input type="text" id="courseAcronym" placeholder="Enter acronym" required>
                        </div>
                        <div class="modal-actions">
                            <button type="submit" class="add-btn">Add Course</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- COMPANY -->
            <section class="page" id="moa">
                <h2>Memorandum of Agreement</h2>

                <div class="card-section">
                    <div class="table-header">
                        <h3 style="margin-bottom: 0;">Companies</h3>
                    </div>

                    <div class="table-header">
                        <div class="table-actions">
                            <button class="add-btn" id="add-company">+ Add New Company</button>
                        </div>
                        <div class="table-controls">
                            <input type="text" placeholder="Search company...">
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Company Contact No.</th>
                                <th>Company Email</th>
                                <th>School Year</th>
                                <th>Status</th>
                                <th style="text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Test Company</td>
                                <td>12345678</td>
                                <td>eyo@gmail.com</td>
                                <td>2023-2024</td>
                                <td>Active</td>
                                <td style="text-align: center; white-space: nowrap;">
                                    <button class="add-btn">View</button>
                                    <button class="add-btn">Download</button>
                                    <button class="add-btn">Send</button>
                                    <button class="add-btn">Print</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Racing R Corporation</td>
                                <td>09978780187</td>
                                <td>fmcsanncruz@gmail.com</td>
                                <td>2023-2024</td>
                                <td>Active</td>
                                <td style="text-align: center; white-space: nowrap;">
                                    <button class="add-btn">View</button>
                                    <button class="add-btn">Download</button>
                                    <button class="add-btn">Send</button>
                                    <button class="add-btn">Print</button>
                                </td>
                            </tr>
                            <tr>
                                <td>MDC</td>
                                <td>09197287563</td>
                                <td>mdc@mdc.com.ph</td>
                                <td>2023-2024</td>
                                <td>Active</td>
                                <td style="text-align: center; white-space: nowrap;">
                                    <button class="add-btn">View</button>
                                    <button class="add-btn">Download</button>
                                    <button class="add-btn">Send</button>
                                    <button class="add-btn">Print</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 3 of 3 entries
                    </div>
                </div>
            </section>

            <!-- ADD COMPANY PAGE -->
            <section class="page" id="add-company-page">
                <h2>Add New Company</h2>

                <!-- COMPANY ACCOUNT -->
                <div class="card-section">
                    <h3>Company Account</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="company@example.com">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Enter temporary password">
                        </div>
                    </div>
                </div>

                <!-- COMPANY INFORMATION -->
                <div class="card-section">
                    <h3>Company Information</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" placeholder="Enter company name">
                        </div>

                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" placeholder="Enter contact number">
                        </div>

                        <div class="form-group">
                            <label>School Year</label>
                            <input type="text" placeholder="2025-2026">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select>
                                <option value="">Select status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="form-actions" style="margin-top:15px;">
                    <button class="add-btn" id="saveCompanyBtn">Save Company</button>
                    <button class="add-btn back-btn">Back</button>
                </div>
            </section>

            <!-- REPORTS -->
            <section class="page" id="reports-ojt">
                <h2>Reports</h2>

                <div class="card-section">
                    <div class="table-header report-controls">
                        <div class="filter-row">
                            <div class="form-group form-group-inline">
                                <label>Start Date:</label>
                                <input type="date" class="input-date">
                            </div>
                            <div class="form-group form-group-inline">
                                <label>End Date:</label>
                                <input type="date" class="input-date">
                            </div>
                        </div>

                        <div class="form-group form-group-inline">
                            <label>Course:</label>
                            <select class="select-course">
                                <option value="" disabled selected hidden>Choose Course</option>
                                <option>Bachelor of Science in Information Technology</option>
                                <option>Bachelor of Science in Mechanical Engineering</option>
                                <option>Bachelor of Science in Electronic Engineering</option>
                            </select>
                        </div>
                        <button class="add-btn">Generate Report</button>
                    </div>

                    <div class="table-header">
                        <h3>Student OJT Information</h3>
                        <div class="table-controls">
                            <input type="text" placeholder="Search report data...">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table-ojt">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Company Name</th>
                                    <th>Company Address</th>
                                    <th>Nature of Business</th>
                                    <th>Nature of Networking</th>
                                    <th>Level</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Reporting Time</th>
                                    <th>Contact Name</th>
                                    <th>Position</th>
                                    <th>Contact Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Dela Cruz, Juan A.</strong></td>
                                    <td>Sample Tech Solutions Corp.</td>
                                    <td>123 Placeholder St., Business District, City Name</td>
                                    <td>Information Technology</td>
                                    <td>Private Sector Partnership</td>
                                    <td>National</td>
                                    <td>2024-01-01</td>
                                    <td>2024-04-01</td>
                                    <td>8:00 AM - 5:00 PM (Mon-Fri)</td>
                                    <td>Jane Doe</td>
                                    <td>HR Manager</td>
                                    <td>(02) 8888-0000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-footer">
                        Showing 1 to 1 of 1 entries
                    </div>
                </div>
            </section>

            <!-- EXPIRED MOAS -->
            <section class="page" id="reports-expired">
                <h2>Reports</h2>

                <div class="card-section">
                    <div class="table-header report-controls">
                        <div class="filter-row">
                            <label>School Year:</label>
                            <select style="width: 120px;"> <option>Select Year</option>
                                <option>2023</option>
                                <option>2024</option>
                            </select>
                            <span>-</span>
                            <select style="width: 120px;">
                                <option>Select Year</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </div>

                        <div class="form-group form-group-inline">
                            <label>Course:</label>
                            <select class="select-course">
                                <option value="" disabled selected hidden>Choose Course</option>
                                <option>Bachelor of Science in Information Technology</option>
                                <option>Bachelor of Science in Mechanical Engineering</option>
                            </select>
                        </div>
                        <button class="add-btn">Generate Report</button>
                    </div>

                    <div class="table-header">
                        <h3>Expired Memorandum of Agreement</h3>
                        <div class="table-controls">
                            <input type="text" placeholder="Search...">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table-expired">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Company Address</th>
                                    <th>Company Representative</th>
                                    <th>Company Contact No.</th>
                                    <th>Company Email</th>
                                    <th>School Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Sample Industry Partners</strong></td>
                                    <td>456 Virtual Loop, Innovation Park, City Name</td>
                                    <td>Mr. John Smith</td>
                                    <td>0912-345-6789</td>
                                    <td>contact@samplepartner.ph</td>
                                    <td style="text-align: center;">2023-2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-footer">
                        Showing 1 to 1 of 1 entries
                    </div>
                </div>
            </section>

            <!-- EVALUATION -->
            <section class="page" id="evaluation">
                <h2>Evaluation Management</h2>

                <!-- EVALUATION CONTROL -->
                <div class="card-section">
                    <h3>Evaluation Period Control</h3>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Evaluation Type</label>
                            <input type="text" value="Company Supervisor Evaluation" disabled>
                        </div>

                        <div class="form-group">
                            <label>OJT Term</label>
                            <input type="text" value="AY 2025–2026" disabled>
                        </div>

                        <div class="form-group">
                            <label>Evaluation Status</label>
                            <input type="text" value="Active" disabled>
                        </div>
                    </div>

                    <div class="evaluation-actions" style="margin-top: 15px;">
                        <button class="add-btn">Disable Evaluation</button>
                    </div>
                </div>

                <!-- EVALUATION MONITORING -->
                <div class="card-section">
                    <h3>Evaluation Submission Status</h3>

                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Company</th>
                                    <th>Supervisor</th>
                                    <th>Evaluation</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Juan Dela Cruz</td>
                                    <td>ABC Corporation</td>
                                    <td>Maria Santos</td>
                                    <td>
                                        <button class="add-btn">View</button>
                                    </td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Anne Reyes</td>
                                    <td>XYZ Solutions</td>
                                    <td>John Lim</td>
                                    <td>
                                        <button class="add-btn">View</button>
                                    </td>
                                    <td><span class="status submitted">Submitted</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
        </main>
    </div>

    <script src="../jscript/dashboard.js"></script>
</body>
</html>