<li class="header">TRANG QUẢN TRỊ</li>

<li class="{{ Request::segment(2) === '' ? 'active' : null }}">
    <a href="">
        <i class="fa fa-home"></i> <span>Trang chủ</span>
    </a>
</li>
@if(\Auth::user()->can('users.index') || \Auth::user()->isSuperAdmin() || \Auth::user()->can('roles.index'))
<li class="treeview {{ Request::segment(2) === 'users' || Request::segment(2) === 'role'  ? 'active' : null }}">
    <a href="#">
        <i class="fa fa-user" aria-hidden="true"></i> <span>Tài khoản</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        @if(\Auth::user()->can('users.index') || \Auth::user()->isSuperAdmin())
        <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}">
            <a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> User</a>
        </li>
        @endif

        @if(\Auth::user()->can('roles.index') || \Auth::user()->isSuperAdmin())
        <li class="{{ Request::segment(2) === 'role' ? 'active' : null }}">
            <a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Quyền</a>
        </li>
        @endif
    </ul>
</li>
@endif

@if(\Auth::user()->can('calendar.index') || \Auth::user()->isSuperAdmin())
<li class="{{ Request::segment(2) == 'calendar' ? 'active' : null  }}">
    <a href="{{ route('calendar.index') }}">
        <i class="fa fa-calendar"></i> <span>Các trận đấu</span>
    </a>
</li>
@endif

@if(\Auth::user()->can('contests.index') || \Auth::user()->isSuperAdmin())
<li class="{{ Request::segment(2) == 'contests' ? 'active' : null  }}">
    <a href="{{ route('contests.index') }}">
        <i class="fa fa-gamepad"></i> <span>Các giải</span>
    </a>
</li>
@endif

@if(\Auth::user()->can('team.index') || \Auth::user()->isSuperAdmin())
<li class="{{ Request::segment(2) == 'team' ? 'active' : null  }}">
    <a href="{{ route('team.index') }}">
        <i class="fa fa-users"></i> <span>Đội bóng</span>
    </a>
</li>
@endif

@if(\Auth::user()->can('player.index') || \Auth::user()->isSuperAdmin())
<li class="{{ Request::segment(2) == 'player' ? 'active' : null  }}">
    <a href="{{ route('player.index') }}">
        <i class="fa fa-user-secret"></i> <span>Cầu thủ</span>
    </a>
</li>
@endif



<li class="{{ Request::segment(1) == 'media' ? 'active' : null  }}">
    <a href="{{ route('media') }}">
        <i class="fa fa-file" aria-hidden="true"></i> <span>Media</span>
    </a>
</li>


