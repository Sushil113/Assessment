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

document.getElementById('openPersonalInfo').addEventListener('click', function() {
    document.getElementById('personalInfoModal').classList.remove('hidden');
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


document.getElementById('generateReport').addEventListener('click', function() {
    const language = document.getElementById('languages').value;
    const format = document.getElementById('format').value;

    fetch('/generate-report', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                language,
                format
            })
        })
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = 'report.pdf';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.getElementById('reportModal').classList.toggle('hidden');
        });
});