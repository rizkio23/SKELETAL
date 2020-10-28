{{-- Header --}}
<div id="kt_header" class="header {{ Metronic::printClasses('header', false) }}" {{ Metronic::printAttrs('header') }}>

    {{-- Container --}}
    <div class="container-fluid d-flex align-items-center justify-content-between">
        @if (config('layout.header.self.display'))

        @php
        $kt_logo_image = 'logo-light.png';
        @endphp

        @if (config('layout.header.self.theme') === 'light')
        @php $kt_logo_image = 'logo-dark.png' @endphp
        @elseif (config('layout.header.self.theme') === 'dark')
        @php $kt_logo_image = 'logo-light.png' @endphp
        @endif

        {{-- Header Menu --}}
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            @if(config('layout.aside.self.display') == false)
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img alt="Logo" src="{{ asset('media/logos/'.$kt_logo_image) }}" />
                </a>
            </div>
            @endif

            <div id="kt_header_menu"
                class="header-menu header-menu-mobile {{ Metronic::printClasses('header_menu', false) }}">
                <ul class="menu-nav ">
                    @foreach ($navbar as $menu)
                    <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
                        <a href="#" class="menu-link menu-toggle"><span class="menu-text">{{$menu->groupmenu}}</span><i
                                class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left"
                            data-hor-direction="menu-submenu-left">
                            @foreach($menu->getSubmenu as $sub)
                            <ul class="menu-subnav">
                                <li class="menu-item " aria-haspopup="true">
                                    <a href="" class="menu-link ">
                                        <span class="menu-text">{{$sub->menucaption}}</span>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @else
        <div></div>
        @endif

        <div class="dropdown dropdown-inline">
            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Metronic::getSVG("media/svg/icons/Files/File-plus.svg", "svg-icon-success svg-icon-2x") }}
            </a>
            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                {{-- Navigation --}}
                <ul class="navi navi-hover">
                    <li class="navi-header font-weight-bold">
                        Hi, Admin
                    </li>
                    <li class="navi-separator mb-3"></li>

                    <li class="navi-footer">
                        <a class="btn btn-light-primary font-weight-bolder btn-lg btn-block" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
