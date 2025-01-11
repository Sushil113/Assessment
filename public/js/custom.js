function toggleDropdown(button) {
    const dropdown = button.nextElementSibling;
    const icon = button.querySelector("#dropdown-icon");
    dropdown.classList.toggle("hidden");
    icon.classList.toggle("rotate-180");
}

function toggleMenu(button) {
    const menu = button.nextElementSibling;
    const arrow = button.querySelector("span:last-child");

    menu.classList.toggle("hidden");    
    arrow.classList.toggle("rotate-180");
}

//for setting the language
function setLanguage(language) {
    window.location.href = `/set-language/${language}`;
}

document.querySelectorAll('.openPersonalInfo').forEach(button => {
    button.addEventListener('click', function() {
        document.getElementById('personalInfoModal').classList.remove('hidden');
    });
});

document.getElementById('closePersonalInfo').addEventListener('click', function() {
    document.getElementById('personalInfoModal').classList.add('hidden');
});

document.getElementById('openReportModal').addEventListener('click', function() {
    document.getElementById('reportModal').classList.remove('hidden');
});

document.getElementById('closeReportModal').addEventListener('click', function() {
    document.getElementById('reportModal').classList.add('hidden');
});
