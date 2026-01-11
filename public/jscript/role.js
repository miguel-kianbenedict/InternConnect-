// role.js

// Redirect to dashboard with delay
function selectRole(role) {
    // Optional: fade out the page before redirect
    document.body.style.transition = "opacity 0.5s";
    document.body.style.opacity = "0";

    // Delay redirect by 500ms (0.5s)
    setTimeout(() => {
        switch(role) {
            case 'student':
                window.location.href = "/student/dashboard";
                break;
            case 'coordinator':
                window.location.href = "/coordinator/dashboard";
                break;
            case 'professor':
                window.location.href = "/professor/dashboard";
                break;
            case 'company':
                window.location.href = "/company/dashboard";
                break;
            default:
                alert('Role not recognized!');
                document.body.style.opacity = "1"; // revert opacity if error
        }
    }, 500); // 500ms delay
}

// Swap icons on hover
document.querySelectorAll('.role-card').forEach(card => {
    const icon = card.querySelector('.role-icon');
    const originalSrc = icon.src;
    const whiteSrc = icon.dataset.white;

    card.addEventListener('mouseenter', () => { icon.src = whiteSrc; });
    card.addEventListener('mouseleave', () => { icon.src = originalSrc; });
});
