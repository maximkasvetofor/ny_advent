
<main>
    <div class="cotnent">
        <!-- Хедер -->
        @include('partials.header')
        <!-- История лендинга -->
        <div class="container mt-first-container">
            <h2 id="head_title">
                {{$head_title->value}}
            </h2>
            <h3 id="head_moto">
                {{$head_moto->value}}
            </h3>
            <p id="head_description">
                {{$head_description->value}}
            </p>
            <p>
                Упоминание, что проект создан в рамках хакатона «ИТ-вызов» силами команды “Будущее России” и ее участников Кононова Максима, Александрова Богдана, Чикурова Никиты и Даниила Старкова
            </p>
        </div>
        <!-- Календарь -->
        <div class="container">
            <h2 id="head_name">
                {{$head_name->value}}
            </h2>
            <ul class="calendar">
                @if(!Auth::check())
                @foreach($Days as $day)
                    <li data-date="{{$day->date}}" value="{{$day->day}}">
                    <svg width="107" height="112" viewBox="0 0 107 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2311_2)">
                            <path d="M4.33594 24.821V96.5586C4.33594 104.835 10.968 111.544 19.1483 111.544H53.3193V24.821H4.33594Z" fill="#FD8469"/>
                            <path d="M32.3203 24.8207V111.544H87.4904C95.6715 111.544 102.303 104.834 102.303 96.5583V24.8207H32.3203Z" fill="#FC6F58"/>
                            <path d="M5.00002 25H41.1001V112H66V25H5.00002Z" fill="#F4E3C3"/>
                            <path d="M66 25H53V112H66V25Z" fill="#F2C59E"/>
                        </g>
                        <g clip-path="url(#clip0_2311_2)" id="pop">
                        <path d="M6.99592 12.4318C3.27238 12.4318 0.254883 15.4854 0.254883 19.2516V37.2099H53.3199V12.4318H6.99592Z" fill="#FC6F58"/>
                        <path d="M106.384 19.2516C106.384 15.4845 103.366 12.4318 99.6434 12.4318H53.3199V37.2099H106.384V19.2516Z" fill="#F1543F"/>
                        <path d="M5.00003 12H41.1001V37H66V12H5.00003Z" fill="#F4E3C3"/>
                        <path d="M66 12H53V37H66V12Z" fill="#F2C59E"/>
                        <path d="M53.3199 12.4318L90.0567 12.4325V5.92583C90.0567 2.67749 87.4538 0.0437012 84.2434 0.0437012H65.5651C58.8016 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#F9B54C"/>
                        <path d="M53.3199 12.4318L16.5821 12.4325V5.92583C16.5821 2.67749 19.185 0.0437012 22.3963 0.0437012H41.0738C47.8372 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#FFD15D"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2311_2">
                        <rect width="107" height="112" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                        <span style="pointer-events: none">{{$day->day}}</span>
                    </li>
                @endforeach
                    @else
                        @foreach($Days as $day)

                            @if ( App\Models\OpenGift::where('name', Auth::user()->email)->where('day', $day->day)->exists())
                            <li data-date="{{$day->date}}" value="{{$day->day}}">
                            <svg width="107" height="112" viewBox="0 0 107 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2311_2)">
                                    <path d="M4.33594 24.821V96.5586C4.33594 104.835 10.968 111.544 19.1483 111.544H53.3193V24.821H4.33594Z" fill="#FD8469"/>
                                    <path d="M32.3203 24.8207V111.544H87.4904C95.6715 111.544 102.303 104.834 102.303 96.5583V24.8207H32.3203Z" fill="#FC6F58"/>
                                    <path d="M5.00002 25H41.1001V112H66V25H5.00002Z" fill="#F4E3C3"/>
                                    <path d="M66 25H53V112H66V25Z" fill="#F2C59E"/>
                                </g>
                                <g clip-path="url(#clip0_2311_2)" id="pop" style="
                                    transform-origin: 50% 50%;
                                    transform: rotate(70deg) translate(22px, -28px);">
                                <path d="M6.99592 12.4318C3.27238 12.4318 0.254883 15.4854 0.254883 19.2516V37.2099H53.3199V12.4318H6.99592Z" fill="#FC6F58"/>
                                <path d="M106.384 19.2516C106.384 15.4845 103.366 12.4318 99.6434 12.4318H53.3199V37.2099H106.384V19.2516Z" fill="#F1543F"/>
                                <path d="M5.00003 12H41.1001V37H66V12H5.00003Z" fill="#F4E3C3"/>
                                <path d="M66 12H53V37H66V12Z" fill="#F2C59E"/>
                                <path d="M53.3199 12.4318L90.0567 12.4325V5.92583C90.0567 2.67749 87.4538 0.0437012 84.2434 0.0437012H65.5651C58.8016 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#F9B54C"/>
                                <path d="M53.3199 12.4318L16.5821 12.4325V5.92583C16.5821 2.67749 19.185 0.0437012 22.3963 0.0437012H41.0738C47.8372 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#FFD15D"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2311_2">
                                <rect width="107" height="112" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                                <span style="pointer-events: none">{{$day->day}}</span>
                            </li>
                                @else
                                    <li data-date="{{$day->date}}" value="{{$day->day}}">
                                        <svg width="107" height="112" viewBox="0 0 107 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2311_2)">
                                                <path d="M4.33594 24.821V96.5586C4.33594 104.835 10.968 111.544 19.1483 111.544H53.3193V24.821H4.33594Z" fill="#FD8469"/>
                                                <path d="M32.3203 24.8207V111.544H87.4904C95.6715 111.544 102.303 104.834 102.303 96.5583V24.8207H32.3203Z" fill="#FC6F58"/>
                                                <path d="M5.00002 25H41.1001V112H66V25H5.00002Z" fill="#F4E3C3"/>
                                                <path d="M66 25H53V112H66V25Z" fill="#F2C59E"/>
                                            </g>
                                            <g clip-path="url(#clip0_2311_2)" id="pop">
                                            <path d="M6.99592 12.4318C3.27238 12.4318 0.254883 15.4854 0.254883 19.2516V37.2099H53.3199V12.4318H6.99592Z" fill="#FC6F58"/>
                                            <path d="M106.384 19.2516C106.384 15.4845 103.366 12.4318 99.6434 12.4318H53.3199V37.2099H106.384V19.2516Z" fill="#F1543F"/>
                                            <path d="M5.00003 12H41.1001V37H66V12H5.00003Z" fill="#F4E3C3"/>
                                            <path d="M66 12H53V37H66V12Z" fill="#F2C59E"/>
                                            <path d="M53.3199 12.4318L90.0567 12.4325V5.92583C90.0567 2.67749 87.4538 0.0437012 84.2434 0.0437012H65.5651C58.8016 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#F9B54C"/>
                                            <path d="M53.3199 12.4318L16.5821 12.4325V5.92583C16.5821 2.67749 19.185 0.0437012 22.3963 0.0437012H41.0738C47.8372 0.0432656 53.3199 5.5893 53.3199 12.4318Z" fill="#FFD15D"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_2311_2">
                                            <rect width="107" height="112" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        <span style="pointer-events: none">{{$day->day}}</span>
                                    </li>
                        @endif
                    @endforeach
                    @endif
            </ul>
        </div>
        <!-- Узнать больше -->
        @include('partials.links')

        <!-- Футер -->
        @include('partials.footer')
    </div>
    <div class="modal-wrapper inactive">
        @include('modalWindow.subs')
        <!-- Регистрация -->
        @include('modalWindow.registration')
        <!-- Вход -->
        @include('modalWindow.login')
        <!-- Подарок -->
        @include('modalWindow.podarok')
    </div>
</main>

@include('snow')
