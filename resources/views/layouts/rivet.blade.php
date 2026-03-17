<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'diamo12\'s Site') }}</title>
    
        <!--Get Rivet Styles-->
        <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.9.1/css/rivet.min.css">

        @stack('css')
        <link rel="stylesheet" href="{{ asset('/css/rivet-mods.css') }}">

        @stack('head-js')
    </head>
    <body>
        <header class="rvt-header-wrapper">
            <!-- Hidden link for keyboard users to skip to main content -->
            <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>
            <div class="rvt-header-global">
                <div class="rvt-container-xl">
                    <div class="rvt-header-global__inner">
                        <div class="rvt-header-global__logo-slot">
                        <a class="rvt-lockup" href="/">
                            <!-- Website or application title -->
                            <div class="rvt-lockup__body">
                            <span class="rvt-lockup__title">{{ config('app.name') }}</span>
                            </div>
                        </a>
                        </div>
                        <!-- Header controls -->
                        <div class="rvt-header-global__controls">
                            <!-- Navigation -->
                            <div data-rvt-disclosure="menu" data-rvt-close-click-outside>
                                <!-- Menu button that shows/hides navigation on smaller screens -->
                                <button aria-expanded="false" class="rvt-global-toggle rvt-global-toggle--menu rvt-hide-lg-up" data-rvt-disclosure-toggle="menu">
                                <span class="rvt-sr-only">Menu</span>
                                <svg class="rvt-global-toggle__open" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">  <path d="M15 4H1V2h14v2Zm0 5H1V7h14v2ZM1 14h14v-2H1v2Z"/></svg>
                                <svg class="rvt-global-toggle__close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">  <path d="m3.5 2.086 4.5 4.5 4.5-4.5L13.914 3.5 9.414 8l4.5 4.5-1.414 1.414-4.5-4.5-4.5 4.5L2.086 12.5l4.5-4.5-4.5-4.5L3.5 2.086Z"/></svg>
                                </button>
                                <!-- Navigation links -->
                                <nav aria-label="Main" class="rvt-header-menu" data-rvt-disclosure-target="menu" hidden>
                                    <ul class="rvt-header-menu__list">
                                        <li class="rvt-header-menu__item">
                                        <a class="rvt-header-menu__link" href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="rvt-header-menu__item">
                                        <a class="rvt-header-menu__link" href="{{route('about')}}">About</a>
                                        </li>
                                        <li class="rvt-header-menu__item">
                                        <a class="rvt-header-menu__link" href="{{route('guestbook.index')}}">Guestbook</a>
                                        </li>
                                        <!--Todo: add more navigation links for web revival related info-->
                                        <li class="rvt-header-menu__item">
                                            <div class="rvt-header-menu__dropdown rvt-dropdown" data-rvt-dropdown="primary-nav-1">
                                                <div class="rvt-header-menu__group">
                                                    <!-- Link that appears in header -->
                                                    <a class="rvt-header-menu__link" href="#">Tools</a>
                                                    <!-- Button that shows/hides dropdown links -->
                                                    <button aria-expanded="false" class="rvt-dropdown__toggle rvt-header-menu__toggle" data-rvt-dropdown-toggle="primary-nav-1">
                                                        <span class="rvt-sr-only">More sub-navigation links</span>
                                                        <svg class="rvt-global-toggle__open" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">  <path d="m15.146 6.263-1.292-1.526L8 9.69 2.146 4.737.854 6.263 8 12.31l7.146-6.047Z"/></svg>
                                                    </button>
                                                </div>
                                                <!-- Dropdown menu -->
                                                <div class="rvt-header-menu__submenu rvt-dropdown__menu" data-rvt-dropdown-menu="primary-nav-1" hidden>
                                                    <ul class="rvt-header-menu__submenu-list">
                                                        <!-- Dropdown links -->
                                                        <li class="rvt-header-menu__item">
                                                        <a class="rvt-header-menu__link" href="{{route('fallout.Randomizer')}}">Fallout Special Stat Randomizer</a>
                                                        </li>
                                                        <li class="rvt-header-menu__item rvt-m-left-none">
                                                        <a class="rvt-header-menu__link" href="{{route('tip.Calculator')}}">Tip Calculator</a>
                                                        </li>
                                                        <li class="rvt-header-menu__item rvt-m-left-none">
                                                        <a class="rvt-header-menu__link" href="{{route('issTracker')}}">ISS Tracker</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="rvt-footer-base">
                <div class="rvt-container-lg">
                    <div class="rvt-footer-base__inner">
                        <p>@diamo12 2026</p> <!--<a href="https://github.com/diamo12">-->
                    </div>
                </div>
            </footer>
        <script src="https://unpkg.com/rivet-core@2.9.1/js/rivet.min.js"></script>
        <script>Rivet.init();</script>
        @stack('js')
    </body>
</html>