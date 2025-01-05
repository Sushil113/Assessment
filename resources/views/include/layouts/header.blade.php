<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">{{ isset($title) ? $title : 'Admin Panel' }}</h1>
    <div class="flex items-center space-x-10">
        <div class="relative">
            <div
                onclick="toggleDropdown(this)"
                class="flex items-center space-x-2 rounded border p-2 cursor-pointer">
                <span class="material-icons-outlined">language</span>
                <span>English (US)</span>
                <span
                    class="ml-auto material-icons-outlined transition-transform"
                    id="dropdown-icon">
                    expand_more
                </span>
            </div>
            <ul
                id="dropdown-menu"
                class="absolute hidden mt-2 w-full bg-white border rounded shadow-lg text-gray-700">
                <li
                    class="px-4 py-2 hover:bg-blue-100 cursor-pointer"
                    onclick="setLanguage('English (US)')">
                    English (US)
                </li>
                <li
                    class="px-4 py-2 hover:bg-blue-100 cursor-pointer"
                    onclick="setLanguage('Japanese (JPN)')">
                    Japanese (JPN)
                </li>
            </ul>
        </div>

        <div class="relative">
            <div
                onclick="toggleDropdown(this)"
                class="flex items-center space-x-2 cursor-pointer">
                <div class="w-10 h-10 rounded-full border flex items-center justify-center">
                    <span class="material-icons-outlined">person</span>
                </div>
                <span>Michael Clark</span>
                <span
                    class="ml-2 material-icons-outlined transition-transform"
                    id="dropdown-icon">
                    expand_more
                </span>
            </div>
            <ul
                id="profile-dropdown"
                class="absolute hidden right-0 mt-2 w-40 bg-white border rounded shadow-lg text-gray-700">
                <li class="px-4 py-2 hover:bg-blue-100 cursor-pointer">Profile</li>
                <li class="px-4 py-2 hover:bg-blue-100 cursor-pointer">Logout</li>
            </ul>
        </div>
    </div>
</header>

<script>
    function toggleDropdown(button) {
        const dropdown = button.nextElementSibling;
        const icon = button.querySelector("#dropdown-icon");
        dropdown.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
    }

    //for setting the language
    function setLanguage(language) {
        const buttonText = document.querySelector(
            ".flex.items-center.space-x-2 span:nth-child(2)"
        );
        buttonText.textContent = language;
        document.getElementById("dropdown-menu").classList.add("hidden"); 
    }
</script>