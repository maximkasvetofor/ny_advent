<main>
    <div class="cotnent">
        <!-- Хедер -->
        @include('partials.header')
        <!-- История лендинга -->
        <div class="container mt-first-container">
            <h2>
                Кибербезопасный новый год
            </h2>
            <h3>
                31 шаг на пути к вашей цифровой безопасности
            </h3>
            <p>
                Конец года – отличная возможность подвести итоги, сделать выводы и перейти на новый уровень.
                Шаг за шагом, выполняя простые советы и рекомендации экспертов компании «Киберпротект», вы
                сможете обезопасить себя и своих близких в цифровой среде.
            </p>
            <p>
                Упоминание, что проект создан в рамках хакатона «ИТ-вызов» силами команды “Будущее России” и ее участников Кононова Максима, Александрова Богдана, Чикурова Никиты и Даниила Старкова
            </p>
        </div>
        <!-- Календарь -->
        <div class="container">
            <h2>
                Новогодний Календарь
            </h2>
            <ul class="calendar">
                @foreach($Days as $day)
                    <li data-date="{{$day->date}}" value="{{$day->day}}">
                        <svg width="107" height="112" viewBox="0 0 107 112" fill="none" xmlns="http://www.w3.org/2000/svg"  id="{{$day->day}}" style="pointer-events: none">
                            <g id="leftSide" style="pointer-events: none">
                                <path d="M4.33594 24.821V96.5586C4.33594 104.835 10.968 111.544 19.1483 111.544H53.3193V24.821H4.33594Z" fill="#FD8469"/>
                            </g>
                            <g id="rightSide" style="pointer-events: none">
                                <path d="M32.3203 24.8207V111.544H87.4904C95.6715 111.544 102.303 104.834 102.303 96.5583V24.8207H53.3203Z" fill="#FC6F58"/>
                            </g>
                            <g id="leftSide-cover" style="pointer-events: none">
                                <path d="M6.99592 12.4318C3.27238 12.4318 0.254883 15.4854 0.254883 19.2516V37.2099H53.3199V12.4318H6.99592Z" fill="#FC6F58"/>
                            </g>
                            <g id="rightSide-cover" style="pointer-events: none">
                                <path d="M106.384 19.2516C106.384 15.4845 103.366 12.4318 99.6434 12.4318H53.3193V37.2099H106.384V19.2516Z" fill="#F1543F"/>
                            </g>
                            <g id="tapeWhite" style="pointer-events: none">
                                <path d="M5.5649 12.4318H41.0732V111.544H65.5649V12.4318Z" fill="#F4E3C3"/>
                            </g>
                            <g id="tapeRed" style="pointer-events: none">
                                <path d="M65.565 12.4318H53.3193V111.544H65.565V12.4318Z" fill="#F2C59E"/>
                            </g>
                            <g id="tapeLeft-cover" style="pointer-events: none">
                                <path d="M53.3193 12.4325H16.582V5.92583C16.582 2.67749 19.1849 0.0437012 22.3962 0.0437012H41.0737C47.8371 0.0432656 53.3193 5.59002 53.3193 12.4325Z" fill="#FFD15D"/>
                            </g>
                            <g id="tapeRight-cover" style="pointer-events: none">
                                <path d="M53.3193 12.4325H90.0566V5.92583C90.0566 2.67749 87.4537 0.0437012 84.2433 0.0437012H65.565C58.8015 0.0432656 53.3193 5.59002 53.3193 12.4325Z" fill="#F9B54C"/>
                            </g>
                        </svg>
                        <span style="pointer-events: none">{{$day->day}}</span>
                    </li>
                @endforeach
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

<script>


</script>


