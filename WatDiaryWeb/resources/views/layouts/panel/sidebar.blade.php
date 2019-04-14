<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('panel/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="@lang('component.search')">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">@lang('component.sidebar_menu_title')</li>
            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>
                    <span>@lang('pages.menu_dashboard')</span></a></li>
            <li><a href="#"><i class="fa fa-money"></i> <span>@lang('pages.menu_income')</span></a></li>
            <li><a href="#"><i class="fa fa-clock-o"></i> <span>@lang('pages.menu_work_day')</span></a></li>
            <li><a href="#"><i class="fa fa-sticky-note-o"></i> <span>@lang('pages.menu_note')</span></a></li>
            <li><a href="#"><i class="fa fa-check-square-o"></i> <span>@lang('pages.menu_todo')</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
