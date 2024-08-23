<div class="modal inactive modal-podarok">
    <svg class="modal-close" width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M32.9609 25L48.324 9.72222C50.5587 7.5 50.5587 4.16667 48.324 1.94444C47.486 0.833333 46.0894 0 44.6927 0C43.2961 0 41.8994 0.555555 40.7821 1.66667L25.1397 17.2222L9.77654 1.94444C7.5419 -0.277778 3.91061 -0.277778 1.95531 1.94444C0.837988 2.77778 0 4.16667 0 5.83333C0 7.5 0.558659 8.61111 1.67598 9.72222L17.0391 25L1.67598 40.2778C0.837989 41.3889 0 42.7778 0 44.4444C0 45.8333 0.558659 47.2222 1.67598 48.3333C2.7933 49.4444 4.18994 50 5.58659 50C6.98324 50 8.37989 49.4444 9.49721 48.3333L24.8603 33.0556L40.2235 48.3333C42.4581 50.5556 46.0894 50.5556 48.0447 48.3333C50.2793 46.1111 50.2793 42.5 48.0447 40.5556L32.9609 25Z" fill="white"/>
    </svg>
    <div class="modal-info">
        <h2 class="modal-title" id="podarok-id">0</h2>
    </div>
    <form class="modal__form" method="Post" action="{{route('advent.register')}}">
        @csrf
        <div class="modal__form-item">
            <h3 id="podarok-name">0</h3>
        </div>
        <div class="modal__form-item">
            <p id="podarok-description"></p>
            <div id="podarok-media">
            </div>

        </div>
        <button id="podarok-btn" type="button"></button>
        <div id="podarok-longread"></div>
    </form>
</div>
