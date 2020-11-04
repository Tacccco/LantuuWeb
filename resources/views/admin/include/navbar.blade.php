<?php use App\Models\Admin; ?>

<header class="header">
    <ul>
        <li>
            <a class="notif" href="{{ url('/admin/dashboard/') }}"><span class="notif__text">{{ config('app.name', 'Laravel') }}</span></a>
        </li>
        <li>
            <section class="search">
                <form class="search__form">
                <label class="search__label" for="search"></label>
                <input class="search__text" id="search" type="text" placeholder="Search"/>
                <button class="search__button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
                </form>
            </section>
        </li>
        <li>
            <a class="notif" href="#"><span class="notif__text">Notifications</span><span class="notif__badge">+10</span></a>
        </li>
        <li>
            <section>
                <div class="dropdown"> 
                    <span class="notif__text" style="font-size: 17px;"><?php if (Auth::check()) {  $aid = Auth::user()->id; $n = Admin::find($aid); echo strtoupper($n->login);  } else { return redirect('/'); } ?></span>
                    <div class="dropdown-content">
                        <a class="" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="notif__text">{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </section>
        </li>
    </ul>
</header>
    