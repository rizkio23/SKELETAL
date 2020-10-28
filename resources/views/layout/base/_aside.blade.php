{{-- Aside --}}

@php
$kt_logo_image = 'logo-light.png';
@endphp

@if (config('layout.brand.self.theme') === 'light')
@php $kt_logo_image = 'logo-dark.png' @endphp
@elseif (config('layout.brand.self.theme') === 'dark')
@php $kt_logo_image = 'logo-light.png' @endphp
@endif

<div class="aside aside-left {{ Metronic::printClasses('aside', false) }} d-flex flex-column flex-row-auto"
    id="kt_aside">

    {{-- Brand --}}
    <div class="brand flex-column-auto {{ Metronic::printClasses('brand', false) }}" id="kt_brand">
        <div class="brand-logo">
            <a href="{{ url('/') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}" />
            </a>
        </div>

        @if (config('layout.aside.self.minimize.toggle'))
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            {{ Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl") }}
        </button>
        @endif

    </div>

    {{-- Aside menu --}}
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        @if (config('layout.aside.self.display') === false)
        <div class="header-logo">
            <a href="{{ url('/') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}" />
            </a>
        </div>
        @endif

        <div id="kt_aside_menu" class="aside-menu my-4 {{ Metronic::printClasses('aside_menu', false) }}"
            data-menu-vertical="1" {{ Metronic::printAttrs('aside_menu') }}>

            <ul class="menu-nav {{ Metronic::printClasses('aside_menu_nav', false) }}">
                {{--ASIDE MENU--}}
                @foreach ($aside as $a)
                <li class="menu-item menu-item-submenu" aria-haspopup="false" data-menu-toggle="hover">
                    <span class="menu-icon"><i class="{{$a->iconclass}}"></i></span>
                    <a href="#" class="menu-link menu-toggle">
                        <span class="menu-text">{{$a->menucaption}}</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu " style="" kt-hidden-height="120"><span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            @foreach($a->getSubmenu as $sub)
                            <li class="menu-item " aria-haspopup="true">
                                <a href="" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">{{$sub->menucaption}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>    
        </div>
    </div>

</div>
