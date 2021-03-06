<header class="w-100">
    <nav class="navbar navbar-expand-sm" id="navbar">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center " id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item align-self-center">
                        <a class="nav-link text-center align-self-center" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link text-center align-self-center" href="{{ route('articles') }}">Articles</a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item align-self-center">
                        <a class="nav-link text-center" href="{{ route('createArticle') }}">Create new<br>Article</a>
                    </li>
                    @endif
                    <li class="nav-item align-self-center">
                        <a class="nav-link text-center align-self-center" href="{{ route('categories') }}">Categories</a>
                    </li>
                    @hasrole('Super-Admin|Admin')
                    <li class="nav-item align-self-center">
                        <a class="nav-link text-center align-self-center" href="{{ route('control-panel') }}">Admin-Panel</a>
                    </li>
                    @endhasrole
                    <form action="{{ route('search') }}" method="GET" class="align-self-center">
                        <input type="text" name="search" required/>
                        <button name="submit" class="search" id="btnSearch" type="submit">Search</button>
                    </form>

                </ul>
            </div>
            <!-- Settings Dropdown -->
            <div class="">
                <div class="login-drop">
                    <x-dropdown width="48">
                        <x-slot name="trigger">

                            <button class="d-flex flex-row-reverse">
                                <div class="login-Login">{{ Auth::check() ? (Auth::user()->username) : "Log in" }}</div>
                                <div class="login-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" class="dropdown-list" action="{{ route('logout') }}">
                                    @csrf
                                    @if (!Auth::check())
                                    <x-dropdown-link :href="route('login')">
                                        {{ __('Log in') }}
                                    </x-dropdown-link>
                                    <br>
                                    <x-dropdown-link :href="route('register')">
                                        {{ __('Register') }}
                                    </x-dropdown-link>
                                    @else
                                    <x-dropdown-link :href="route('profile')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <br>
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                    @endif
                                </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </nav>
    </header>
