<?php use App\Models\Admin; ?>

<header class="header">
    <ul class="header_ul">
        <li class="header_li">
            <a class="notif" href="{{ url('/admin/dashboard/') }}"><span class="notif__text">{{ config('app.name', 'Laravel') }}</span></a>
        </li>
        <li style="float: right;" class="header_li">
            <a class="notif" href="#" style="margin-left: 15px;"><span class="notif__text"><?php if (Auth::check()) {  $aid = Auth::user()->id; $n = Admin::find($aid); echo $n->login;  } else { return redirect('/'); } ?></span></a>
            <input type="checkbox" class="dropdown_trigger">
            <ul class="dropdown_menu">
                <li><a href="#">Settings</a></li>
                <li>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
        <li style="float: right;" class="header_li">
            <a class="notif" href="#"><span class="notif__text">Мэдэгдэл</span><span class="notif__badge">+10</span></a>
        </li>
    </ul>
</header>


    