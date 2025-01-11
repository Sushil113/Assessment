<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">{{ isset($title) ? $title : __('messages.admin_panel') }}</h1>
    <div class="flex items-center space-x-10">
        <div class="relative">
            <div class="flex items-center space-x-2 rounded border p-2 cursor-pointer">
                <span class="material-icons-outlined">language</span>
                <select id="language" class="p-2 " onchange="setLanguage(this.value)">
                    <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>{{ __('messages.english_us') }}</option>
                    <option value="jp" {{ app()->getLocale() === 'jp' ? 'selected' : '' }}>{{ __('messages.japanese_jpn') }}</option>
                </select>
            </div>
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
                <li class="px-4 py-2 hover:bg-blue-100 cursor-pointer">{{ __('messages.profile') }}</li>
                <li class="px-4 py-2 hover:bg-blue-100 cursor-pointer">{{ __('messages.logout') }}</li>
            </ul>
        </div>
    </div>
</header>