<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Professor Dashboard | InternConnect</title>
    <link rel="stylesheet" href="../css/professor.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="professor-dashboard">

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
                    <strong>Professor</strong>
                    <span>OJT Adviser</span>
                </div>
            </div>

            <ul class="sidebar-menu">

                <li class="active" data-page="home">
                    <span class="menu-icon">
                        <img src="../images/home-icon.png" alt="Home">
                    </span>
                    Home
                </li>

                <li data-page="class">
                    <span class="menu-icon">
                        <img src="../images/class-icon.png" alt="Class">
                    </span>
                    Class
                </li>

                <li data-page="templates">
                    <span class="menu-icon">
                        <img src="../images/requirements-icon.png" alt="Upload Templates">
                    </span>
                    Upload Templates
                </li>

                <li data-page="moa">
                    <span class="menu-icon">
                        <img src="../images/moa-icon.png" alt="MOA">
                    </span>
                    MOA
                </li>

                <li data-page="maintenance">
                    <span class="menu-icon">
                        <img src="../images/maintenance-icon.png" alt="Maintenance">
                    </span>
                    Maintenance
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
                            <h3>38</h3>
                            <p>Number of Students</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/student.png" alt="Students">
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-left">
                            <h3>4</h3>
                            <p>Downloadable Templates</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../images/files-icon2.png" alt="Templates">
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

            <!-- CLASS -->
            <section class="page" id="class">
                <h2>Class</h2>

                <div class="card-section">

                    <!-- HEADER ROW -->
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                        <h3>Rooms</h3>

                        <div style="display:flex; gap:10px; align-items:center;">
                            <input
                                type="text"
                                placeholder="Search room..."
                                style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;"
                            >
                        </div>
                    </div>

                    <!-- ROOMS TABLE -->
                    <table>
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Subject Code</th>
                                <th>Description</th>
                                <th>Semester</th>
                                <th>Schedule</th>
                                <th>Academic Year</th>
                                <th>Needing Approval</th>
                                <th>Students List</th>
                                <th>Add Announcement</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>BSIT</td>
                                <td>INTE 40016</td>
                                <td>Practicum</td>
                                <td>2nd Semester</td>
                                <td>Saturday · 7:30–10:30 AM</td>
                                <td>2025–2026</td>

                                <td>
                                    <button class="add-btn view-approval" style="padding:6px 12px;">View</button>
                                </td>

                                <td>
                                    <button class="add-btn view students-list-view" style="padding:6px 12px;">View</button>
                                </td>

                                <td>
                                    <button class="add-btn" style="padding:6px 12px;">Add</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </section>

            <!-- NEEDING APPROVAL DETAILS -->
            <section class="page" id="approval-details">
                <h2>Needing Approval</h2>

                <div class="card-section">
                    
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                        <button class="add-btn back-btn">← Back</button>

                        <div style="display:flex; gap:10px; align-items:center;">
                            <input
                                type="text"
                                placeholder="Search student..."
                                style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;"
                            >
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year & Section</th>
                                <th>Approve</th>
                                <th>Deny</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>Bachelor of Science in Information Technology</td>
                                <td>4-1</td>
                                <td>
                                    <button class="add-btn approve-btn">Approve</button>
                                </td>
                                <td>
                                    <button class="add-btn deny-btn">Deny</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- STUDENT LIST -->
            <section class="page" id="students-list-details">
                <h2>Students List</h2>

                <div class="card-section">
                    
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                        <button class="add-btn back-btn">← Back</button>

                        <div style="display:flex; gap:10px; align-items:center;">
                            <input
                                type="text"
                                placeholder="Search student..."
                                style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;"
                            >
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year & Section</th>
                                <th>Personal Info</th>
                                <th>OJT Info</th>
                                <th>Requirements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>Bachelor of Science in Information Technology</td>
                                <td>4-1</td>
                                <td><button class="add-btn view">View</button></td>
                                <td><button class="add-btn view">View</button></td>
                                <td><button class="add-btn view">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- UPLOAD TEMPLATES -->
            <section class="page" id="templates">
                <h2>Upload Templates</h2>

                <div class="table-section">

                    <div class="table-header">
                        <h3>Uploaded Templates</h3>

                        <div class="table-controls">
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                                <button class="add-btn">Upload New Template</button>

                                <div style="display:flex; gap:10px; align-items:center;">
                                    <input
                                        type="text"
                                        placeholder="Search template..."
                                        style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;"
                                    >
                                </div>
                            </div>
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

            <!-- MOA PAGE -->
            <section class="page" id="moa">
                <h2>Memorandum of Agreement</h2>

                <div class="table-section">

                    <!-- Filters + Generate Report -->
                    <div class="table-header">
                        <h3>MOA Records</h3>

                        <div class="table-controls" style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                            
                            <!-- Filters -->
                            <div style="display:flex; gap:15px; align-items:center;">
                                <div>
                                    <label for="sy-start">School Year:</label>
                                    <select id="sy-start">
                                        <option>2025</option>
                                        <option>2024</option>
                                        <option>2023</option>
                                    </select>
                                    -
                                    <select id="sy-end">
                                        <option>2026</option>
                                        <option>2025</option>
                                        <option>2024</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="course">Course:</label>
                                    <select id="course">
                                        <option>BSIT</option>
                                        <option>BSECE</option>
                                        <option>BSME</option>
                                    </select>
                                </div>

                                <button class="add-btn">Generate Report</button>
                            </div>

                            <!-- Search -->
                            <div>
                                <input type="text" placeholder="Search MOAs..." style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;">
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Company Address</th>
                                <th>Company Representative</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>School Year Validity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ABC Corp</td>
                                <td>123 Main St.</td>
                                <td>John Doe</td>
                                <td>09123456789</td>
                                <td>abc@example.com</td>
                                <td>2025-2026</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>XYZ Inc</td>
                                <td>456 Elm St.</td>
                                <td>Jane Smith</td>
                                <td>09987654321</td>
                                <td>xyz@example.com</td>
                                <td>2024-2025</td>
                                <td>Expired</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 2 of 2 entries
                    </div>

                </div>
            </section>

            <!-- MAINTENANCE -->
            <section class="page" id="maintenance">
                <h2>Maintenance</h2>

                <div class="table-section">

                    <div class="table-header">
                        <h3>Requirement Categories</h3>

                        <div class="table-controls">
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
                                <button class="add-btn" id="addCategoryBtn">Add File Category</button>

                                <div style="display:flex; gap:10px; align-items:center;">
                                    <input
                                        type="text"
                                        placeholder="Search category..."
                                        style="padding:8px 12px; border-radius:6px; border:1px solid #ccc;"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
    @if(isset($categories) && count($categories) > 0)
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                        class="add-btn remove-category" 
                        style="background-color: #dc3545;"
                        onclick="return confirm('Are you sure you want to delete this category?')">
                    Remove
                    </button>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
        <tr><td colspan="2" style="text-align:center;">No categories found.</td></tr>
    @endif
</tbody>
                    </table>

                    <div class="table-footer">
                        Showing 1 to 10 of 10 entries
                    </div>

                </div>
            </section>

            <!-- ADD CATEGORY MODAL -->
            <div class="modal" id="addCategoryModal">
    <div class="modal-content">
        <h3>Add New File Category</h3>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="name" placeholder="Enter category name" required>
            </div>

            <div class="modal-actions">
                <button type="submit" class="add-btn">Add</button>
                <button type="button" class="add-btn" id="closeModalBtn" style="background:#666;">Cancel</button>
            </div>
        </form>
    </div>
</div>


    <script src="../jscript/dashboard.js"></script>
</body>
</html>