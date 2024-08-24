<footer class="d-flex flex-column justify-content-center gap-3">
    <span>2024 © Команда “Будущее России”</span>
    <span> Посещений: {{ $Count }}</span>

</footer>

<style>
    footer{
        border-width: 30px;
        border-style: solid;
        border-image-source: url("{{ asset('images/border.png') }}");
        border-image-slice: 2000 60 0 20;
        border-image-width: 50px 0px 0px 0px;
        border-image-repeat: round;
        border-style: solid;
        border-image-outset: 36px 0px 0px 0px;
    }
</style>
