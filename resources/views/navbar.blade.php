<!--  Header Area Start  -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!--  Logo Start  -->
                    <a href="/" class="logo">
                        <img src="assets/images/chamber-logo.jfif" align="klassy cafe html template" height="80px" width="170px">
                    </a>
                    <!--  Logo End  -->
                    <!--  Menu Start  -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="/about">About</a></li>
                        <li class="scroll-to-section"><a href="/menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="/chefs">Chefs</a></li> 
                        <li class="scroll-to-section"><a href="/contact">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="singup.html">Cart[0]</a></li>
                        <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                                @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
            
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif</li>
                         
                        {{-- <li class="scroll-to-section"><a href="signin.html">Log In</a></li> --}}
                    </ul>
                    
                    <!--  Menu End  -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!--  Header Area End  -->