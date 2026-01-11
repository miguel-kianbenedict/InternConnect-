document.addEventListener("DOMContentLoaded", () => {

    /* ========== PAGE NAVIGATION ========= */
    const pageItems = document.querySelectorAll(".sidebar-menu li[data-page]");
    const pages = document.querySelectorAll(".page");
    const logoutBtn = document.querySelector(".logout");

    pageItems.forEach(item => {
        item.addEventListener("click", () => {
            pageItems.forEach(i => i.classList.remove("active"));
            pages.forEach(p => p.classList.remove("active"));

            item.classList.add("active");
            const target = document.getElementById(item.dataset.page);
            if (target) target.classList.add("active");
        });
    });

    /* ========= MOA DROPDOWN ========= */
    const dropdown = document.querySelector(".dropdown");
    const dropdownToggle = document.querySelector(".dropdown-toggle");

    if (dropdown && dropdownToggle) {
        dropdownToggle.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("open");
        });

        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove("open");
            }
        });
    }

    /* ======= UPLOAD MODAL (REQUIREMENTS) ======= */
    const uploadModal = document.getElementById("uploadModal");
    const openUploadBtn = document.getElementById("openUploadModal");
    const closeUploadBtn = document.getElementById("closeUploadModal");

    if (openUploadBtn && uploadModal) {
        openUploadBtn.addEventListener("click", () => {
            uploadModal.classList.add("show");
        });
    }

    if (closeUploadBtn && uploadModal) {
        closeUploadBtn.addEventListener("click", () => {
            uploadModal.classList.remove("show");
        });
    }

    if (uploadModal) {
        uploadModal.addEventListener("click", (e) => {
            if (e.target === uploadModal) {
                uploadModal.classList.remove("show");
            }
        });
    }

    /* ======= VIEW NEEDING APPROVAL ======= */
    const viewApprovalBtns = document.querySelectorAll(".view-approval");
    const approvalPage = document.getElementById("approval-details");
    const classPage = document.getElementById("class");

    viewApprovalBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            classPage.classList.remove("active");
            if (approvalPage) approvalPage.classList.add("active");
        });
    });

    /* ======== STUDENTS LIST VIEW ======== */
    const studentViewBtns = document.querySelectorAll(".students-list-view");
    const studentsListPage = document.getElementById("students-list-details");

    studentViewBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            classPage.classList.remove("active");
            if (studentsListPage) studentsListPage.classList.add("active");
        });
    });

    /* ================= ADD PROFESSOR PAGE ================= */
    const addProfessorBtn = document.getElementById("add-professor");
    const professorsPage = document.getElementById("professors");
    const addProfessorPage = document.getElementById("add-professor-page"); 

    if (addProfessorBtn && professorsPage && addProfessorPage) {
        addProfessorBtn.addEventListener("click", () => {
            pages.forEach(p => p.classList.remove("active"));
            addProfessorPage.classList.add("active");
        });
    }

    /* ======== ADD COMPANY PAGE ======== */
    const addCompanyBtn = document.getElementById("add-company");
    const addCompanyPage = document.getElementById("add-company-page");

    if (addCompanyBtn && addCompanyPage) {
        addCompanyBtn.addEventListener("click", () => {
            pages.forEach(p => p.classList.remove("active"));
            addCompanyPage.classList.add("active");
        });
    }

    /* ======== ADD COURSE MODAL ======== */
    const addCourseBtn = document.getElementById("courses");
    const addCourseModal = document.getElementById("addCourseModal");
    const addCourseForm = document.getElementById("addCourseForm");
    const coursesTableBody = document.querySelector("#maintenance table tbody");

    if (addCourseBtn && addCourseModal) {
        addCourseBtn.addEventListener("click", () => {
            addCourseModal.classList.add("show");
        });
    }

    /* ======== ADD CATEGORY MODAL ======== */
    const addCategoryBtn = document.getElementById("addCategoryBtn");
    const addCategoryModal = document.getElementById("addCategoryModal");

    if (addCategoryBtn && addCategoryModal) {
        addCategoryBtn.addEventListener("click", () => {
            addCategoryModal.classList.add("show");
        });
    }

    if (addCategoryModal) {
        addCategoryModal.addEventListener("click", (e) => {
            if (e.target === addCategoryModal) {
                addCategoryModal.classList.remove("show");
            }
        });
    }

    if (addCourseModal) {
        addCourseModal.addEventListener("click", (e) => {
            if (e.target === addCourseModal) {
                addCourseModal.classList.remove("show");
                addCourseForm.reset();
            }
        });
    }

    if (addCourseForm) {
        addCourseForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const name = document.getElementById("courseName").value.trim();
            const acronym = document.getElementById("courseAcronym").value.trim();
            if (name && acronym) {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${name}</td>
                    <td>${acronym}</td>
                    <td style="text-align:center;"><button class="add-btn remove-course">Remove</button></td>
                `;
                coursesTableBody.appendChild(row);
                addCourseModal.classList.remove("show");
                addCourseForm.reset();
            }
        });
    }

    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("remove-course")) {
            e.target.closest("tr").remove();
        }
    });

    /* ======== BACK BUTTONS ======== */
    const backBtns = document.querySelectorAll(".back-btn");
    let pageHistory = [];

    pages.forEach(p => {
        const observer = new MutationObserver(() => {
            if (p.classList.contains("active") && pageHistory[pageHistory.length - 1] !== p.id) {
                pageHistory.push(p.id);
            }
        });
        observer.observe(p, { attributes: true, attributeFilter: ["class"] });
    });

    backBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            if (pageHistory.length > 1) {
                pageHistory.pop(); 
                const prevPageId = pageHistory.pop(); 
                pages.forEach(p => p.classList.remove("active"));
                const prevPage = document.getElementById(prevPageId);
                if (prevPage) prevPage.classList.add("active");
            }
        });
    });

    /* ======= APPROVE / DENY ACTIONS ======= */
    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("approve-btn")) {
            alert("Student approved successfully!");
            e.target.closest("tr").remove();
        }
        if (e.target.classList.contains("deny-btn")) {
            alert("Student denied.");
            e.target.closest("tr").remove();
        }
    });

    /* ======== EVALUATION FORM VIEW ======== */
    const evaluateBtns = document.querySelectorAll(".evaluate-btn");
    const evaluationFormPage = document.getElementById("evaluate-form");

    evaluateBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            // FIX: Removed 'const pages' here because it is already declared at the top
            pages.forEach(p => p.classList.remove("active"));
            if (evaluationFormPage) evaluationFormPage.classList.add("active");
        });
    });

    /* ======== LOGOUT ========= */
    if (logoutBtn) {
        logoutBtn.addEventListener("click", () => {
            localStorage.removeItem("userRole");
            window.location.href = "index.html";
        });
    }

});
// coordinator maintenance course
    document.getElementById('toggleCourseForm').addEventListener('click', function() {
        var form = document.getElementById('courseFormContainer');
        if (form.style.display === 'none') {
            form.style.display = 'block';
            this.textContent = '× Close Form'; 
        } else {
            form.style.display = 'none';
            this.textContent = '+ Add Course';
        }
    });

// professor maintenance course
    document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('addCategoryModal');
    const openBtn = document.getElementById('addCategoryBtn');
    const closeBtn = document.getElementById('closeModalBtn');

    // 1. Open the modal
    if (openBtn) {
        openBtn.onclick = function() {
            modal.style.display = "flex"; // Use 'flex' or 'block' depending on your CSS
        }
    }

    // 2. Close the modal when clicking 'Cancel'
    if (closeBtn) {
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }
    }

    // 3. Close the modal if the user clicks the dark area outside the box
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});


    
