<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @if (!empty( Auth::user()->image ))
                    <img src="{{ Auth::user()->image }}" class="user-image" alt=""/>
                @else
                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="user-image" alt=""/>
                @endif
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>Admin</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            @include('backend.layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>