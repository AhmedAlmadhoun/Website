<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('site.dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudent"
            aria-expanded="true" aria-controls="collapseStudent">
            <i class="fas fa-fw fa-tags"></i>
            <span>{{ __('site.students') }}</span>
        </a>
        <div id="collapseStudent" class="collapse {{ str_contains(request()->url(), 'students') ? 'show' : '' }} " aria-labelledby="headingTwo" data-parent="#collapseStudent">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.students.index') ? 'active' : '' }}" href="{{ route('admin.students.index') }}">{{ __('site.All_students') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.students.create') ? 'active' : '' }}" href="{{ route('admin.students.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecoache"
            aria-expanded="true" aria-controls="collapsecoache">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.coaches') }}</span>
        </a>
        <div id="collapsecoache" class="collapse {{ str_contains(request()->url(), 'coaches') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.coaches.index') ? 'active' : '' }}" href="{{ route('admin.coaches.index') }}">{{ __('site.All_coaches') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.coaches.create') ? 'active' : '' }}" href="{{ route('admin.coaches.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecourse"
            aria-expanded="true" aria-controls="collapsecourse">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.courses') }}</span>
        </a>
        <div id="collapsecourse" class="collapse {{ str_contains(request()->url(), 'courses') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.courses.index') ? 'active' : '' }}" href="{{ route('admin.courses.index') }}">{{ __('site.All_Courses') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.courses.create') ? 'active' : '' }}" href="{{ route('admin.courses.create') }}"> {{ __('site.Add_New') }} </a>
                <a class="collapse-item {{ request()->routeIs('admin.courses.trash') ? 'active' : '' }}" href="{{ route('admin.courses.trash') }}">{{ __('site.Trash') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedegree"
            aria-expanded="true" aria-controls="collapsedegree">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.degrees') }}</span>
        </a>
        <div id="collapsedegree" class="collapse {{ str_contains(request()->url(), 'degrees') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.degrees.index') ? 'active' : '' }}" href="{{ route('admin.degrees.index') }}">{{ __('site.All_degrees') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.degrees.create') ? 'active' : '' }}" href="{{ route('admin.degrees.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenew"
            aria-expanded="true" aria-controls="collapsenew">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.news') }}</span>
        </a>
        <div id="collapsenew" class="collapse {{ str_contains(request()->url(), 'news') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.news.index') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">{{ __('site.All_news') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.news.create') ? 'active' : '' }}" href="{{ route('admin.news.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseslider"
            aria-expanded="true" aria-controls="collapseslider">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.sliders') }}</span>
        </a>
        <div id="collapseslider" class="collapse {{ str_contains(request()->url(), 'sliders') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.sliders.index') ? 'active' : '' }}" href="{{ route('admin.sliders.index') }}">{{ __('site.All_sliders') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.sliders.create') ? 'active' : '' }}" href="{{ route('admin.sliders.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesuggested"
            aria-expanded="true" aria-controls="collapsesuggested">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.suggesteds') }}</span>
        </a>
        <div id="collapsesuggested" class="collapse {{ str_contains(request()->url(), 'suggesteds') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.suggesteds.index') ? 'active' : '' }}" href="{{ route('admin.suggesteds.index') }}">{{ __('site.All_suggesteds') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.suggesteds.create') ? 'active' : '' }}" href="{{ route('admin.suggesteds.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapadvertsings"
            aria-expanded="true" aria-controls="collapadvertsings">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('site.advertsings') }}</span>
        </a>
        <div id="collapadvertsings" class="collapse {{ str_contains(request()->url(), 'advertsings') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.advertsings.index') ? 'active' : '' }}" href="{{ route('admin.advertsings.index') }}">{{ __('site.All_advertsings') }}</a>
                <a class="collapse-item {{ request()->routeIs('admin.advertsings.create') ? 'active' : '' }}" href="{{ route('admin.advertsings.create') }}">{{ __('site.Add_New') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    {{--  <hr class="sidebar-divider my-0">  --}}

    {{--  <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>{{ __('site.orders') }}</span></a>
    </li>  --}}

    <!-- Divider -->
    {{--  <hr class="sidebar-divider my-0">  --}}

    {{--  <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>{{ __('site.payments') }}</span></a>
    </li>  --}}

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('site.users') }}</span></a>
    </li>
    <!-- Divider -->
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('admin.subscripe.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.subscripe.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('site.subscripe') }}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('admin.message.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.message.index') }}">
            <i class="fas fa-fw fa-pen"></i>
            <span>{{ __('site.notes') }}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
