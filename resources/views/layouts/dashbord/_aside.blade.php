

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class=" mt-2 pb-3 mb-1" style="max-width: 100%;">
            <div class="image" style="width: 50%;margin: auto;margin-bottom: 10px;">
                <img src="{{ url('/') }}/productimages/{{ Auth::user()->image}}" class="img-circle elevation-2 w-100 h-100" alt="User Image">
            </div>
            <div class="info font-weight-bold font-size-4 text-capitalize text-center" style="width:90%;margin: auto">
                @guest
                    <a class="d-block">no login</a>
                @else
                    <a href="{{ route('dashboard.index') }}" class="d-block">{{auth()->user()->name}}</a>
                @endguest

            </div>
        </div>
        <hr style="width: 50%;display: block;margin: auto;height: 3px;background-color: #09c"/>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--           @auth--}}
{{--                @if(auth()->user()->hasRole('super_admin'))--}}
{{--                        <li class="nav-item"><a  class="nav-link active text-center text-uppercase font-weight-bold"><p>Admin</p></a></li>--}}
{{--                @elseif(auth()->user()->hasRole('user'))--}}
{{--                        <li class="nav-item"><a  class="nav-link active text-center text-uppercase font-weight-bold"><p>Not Admin</p></a></li>--}}
{{--                @endif--}}
{{--           @endauth--}}
{{--*****************************body of aside********************************************************--}}
        @auth
{{--            @if(auth()->user()->hasRole('super_admin'))--}}
                        {{--*************users***********************--}}
                            <li class="nav-item">
                                <a href="{{ route('dashboard.users.index')}}" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    <p>@lang('site.users')</p>
                                </a>
                            </li>
                        {{--*************settings***********************--}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        @lang('site.settings')
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right">1</span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{ route('dashboard.settings.index')}}" class="nav-link">--}}
{{--                                            <i class="far fa-circle nav-icon"></i>--}}
{{--                                            <p>@lang('site.settings')</p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </li>
{{--            @endif--}}
         {{--*************pages***********************--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                @lang('site.pages')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">7</span>
                            </p>
                        </a>
                  {{--  ******************clients**************   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.clients.index')}}" class="nav-link">
                                    <i class="fa fa-users "></i>
                                    <p>@lang('site.clients')</p>
                                </a>
                            </li>
                        </ul>
                        {{--  ******************country**************   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.countries.index')}}" class="nav-link">
                                    <i class="fa fa-plane-departure "></i>
                                    <p>@lang('site.countries')</p>
                                </a>
                            </li>
                        </ul>
                        {{--   ***cities****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.cities.index')}}" class="nav-link">
                                    <i class="fa fa-city"></i>
                                    <p>@lang('site.cities')</p>
                                </a>
                            </li>
                        </ul>
                        {{--   ***hotels****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.hotels.index')}}" class="nav-link">
                                    <i class="fa fa-hotel"></i>
                                    <p>@lang('site.hotels')</p>
                                </a>
                            </li>
                        </ul>
                        {{--  *******Rooms*****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.room_types.index')}}" class="nav-link">
                                    <i class="fa fa-bed "></i>
                                    <p>@lang('site.room_type')</p>
                                </a>
                            </li>
                        </ul>
                        {{--  *******Rooms*****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.room.index')}}" class="nav-link">
                                    <i class="fa fa-hotel  "></i>
                                    <p>@lang('site.room')</p>
                                </a>
                            </li>
                        </ul>
                        {{--  *******meals*****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.meals.index')}}" class="nav-link">
                                    <i class="fa fa-medal  "></i>
                                    <p>@lang('site.meals')</p>
                                </a>
                            </li>
                        </ul>
                        {{--  *******meals*****   --}}
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.seasons.index')}}" class="nav-link">
                                    <i class="fa fa-poo"></i>
                                    <p>@lang('site.seasons')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
        @endauth
        </nav>
    </div>
</aside>
