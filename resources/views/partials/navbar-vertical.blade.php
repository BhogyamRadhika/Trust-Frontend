<nav class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[20%] overflow-y-auto text-center bg-gray-900">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="{{ asset(' index') }}">
            <img src="{{ asset(' assets/images/brand/logo/logo.svg') }}" alt="" class="mx-auto h-10" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex flex-col mt-4 space-y-4">
            <!-- Dashboard Item -->
            <li class="nav-item">
                <a class="nav-link flex items-center text-gray-300 hover:text-white @@if (context.page === 'dashboard') { 'text-white' }" href="{{ asset(' index') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <div class="text-gray-400 text-xs uppercase">Layouts & Pages</div>
            </li>

            <li class="nav-item">
                <a class="nav-link flex items-center justify-between text-gray-300 hover:text-white" href="#!" @click="openPages = !openPages">
                    <div class="flex items-center">
                        <i data-feather="layers" class="nav-icon icon-xs me-2"></i>
                        <span>Pages</span>
                    </div>
                    <svg class="w-4 h-4" :class="{ 'rotate-180': openPages }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div x-show="openPages" class="ml-4 mt-2 space-y-2">
                    <ul class="space-y-2">
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'profile') { 'text-white' }" href="{{ asset(' pages/profile') }}">Profile</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'settings') { 'text-white' }" href="{{ asset(' pages/settings') }}">Settings</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'billing') { 'text-white' }" href="{{ asset(' pages/billing') }}">Billing</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'pricing') { 'text-white' }" href="{{ asset(' pages/pricing') }}">Pricing</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === '404error') { 'text-white' }" href="{{ asset(' pages/404-error') }}">404 Error</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link flex items-center justify-between text-gray-300 hover:text-white" href="#!" @click="openAuth = !openAuth">
                    <div class="flex items-center">
                        <i data-feather="lock" class="nav-icon icon-xs me-2"></i>
                        <span>Authentication</span>
                    </div>
                    <svg class="w-4 h-4" :class="{ 'rotate-180': openAuth }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div x-show="openAuth" class="ml-4 mt-2 space-y-2">
                    <ul class="space-y-2">
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'signin') { 'text-white' }" href="{{ asset(' pages/sign-in') }}">Sign In</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'signup') { 'text-white' }" href="{{ asset(' pages/sign-up') }}">Sign Up</a>
                        </li>
                        <li>
                            <a class="nav-link text-gray-300 hover:text-white @@if (context.page === 'forgetpassword') { 'text-white' }" href="{{ asset(' pages/forget-password') }}">Forget Password</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link flex items-center text-gray-300 hover:text-white @@if (context.page === 'layouts') { 'text-white' }" href="{{ asset(' pages/layout') }}">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2"></i>
                    <span>Layouts</span>
                </a>
            </li>

            <li class="nav-item">
                <div class="text-gray-400 text-xs uppercase">UI Components</div>
            </li>

            <li class="nav-item">
                <a class="nav-link flex items-center text-gray-300 hover:text-white" href="{{ asset(' docs/accordions') }}">
                    <i data-feather="package" class="nav-icon icon-xs me-2"></i>
                    <span>Components</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
