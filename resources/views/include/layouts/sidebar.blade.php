<aside class="w-64 bg-white shadow-lg min-h-screen">
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
                    {{ __('messages.dashboard') }}
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="{{ request()->routeIs('home') || request()->routeIs('home') ? '' : 'hidden' }} pl-8 bg-gray-50">
                    <li class="{{ request()->routeIs('home') ? 'bg-blue-100' : '' }}">
                        <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.overview') }}</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">receipt_long</span>
                    {{ __('messages.invoice') }}
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="{{ request()->routeIs('partner.inquire') || request()->routeIs('transaction.history') ? '' : 'hidden' }} pl-8 bg-gray-50">
                    <li>    
                        <a href="{{route('partner.inquire')}}" class="block px-4 py-2 hover:bg-blue-100 {{ request()->routeIs('partner.inquire') ? 'bg-blue-100' : '' }}">{{ __('messages.partner _inquire') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('transaction.history')}}" class="block px-4 py-2 hover:bg-blue-100 {{ request()->routeIs('transaction.history') ? 'bg-blue-100' : '' }}">{{ __('messages.transaction_history') }}</a>
                    </li>
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.crm') }}</a>
                    </li>
                    <li>    
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.merchandise_catalog') }}</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">local_shipping</span>
                    {{ __('messages.supplies') }}
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.item') }}</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">corporate_fare</span>
                    {{ __('messages.company') }}
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.item') }}</a>
                    </li>
                </ul>
            </li>

            <li>
                <button
                    onclick="toggleMenu(this)"
                    class="w-full text-left px-4 py-2 flex items-center hover:bg-blue-100">
                    <span class="material-icons-outlined mr-2">person</span>
                    {{ __('messages.contact_person') }}
                    <span class="ml-auto material-icons-outlined transition-transform">
                        expand_more
                    </span>
                </button>
                <ul class="hidden pl-8 bg-gray-50">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-100">{{ __('messages.item') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>