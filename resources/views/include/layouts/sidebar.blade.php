<aside class="w-64 bg-white shadow-lg">
    <div class="p-4 text-lg font-bold text-blue-500">
        Company Name
    </div>
    <nav>
        <ul class="space-y-2 text-gray-700">
            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">dashboard</span>
                    Dashboard
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">item1</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">receipt_long</span>
                    Invoice
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">Business Partner Inquire</a>
                    </li>
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">Transaction History</a>
                    </li>
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">CRM</a>
                    </li>
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">Merchandise Catalog</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">local_shipping</span>
                    Supplies
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">item1</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">corporate_fare</span>
                    Company 
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">item1</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">person</span>
                    Contact Person
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">item1</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<script>
    function toggleMenu(button) {
        const menu = button.nextElementSibling;
        const arrow = button.querySelector("span:last-child");

        menu.classList.toggle("hidden");
        arrow.classList.toggle("rotate-180");
    }
</script>