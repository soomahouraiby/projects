{{--Start Navbar--}}

<nav class="navbar navbar-expand-md sticky-top flex-md-nowrap shadow">
    <div class="container m-0">
        <a class="navbar-brand col-md-3 col-lg-2 m-0 " href="{{ url('/') }}">
            نــظــام إدارة الــبـلاغــات
        </a>
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 68%;">
            <!-- Left Side Of Navbar -->
{{--            <ul class="navbar-nav mr-auto">--}}

{{--            </ul>--}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>
                    @if (Route::has('register'))
                        <li >
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user text-light ml-3"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                               تسجيل الخروج
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


{{--End Navbar--}}
