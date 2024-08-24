<div class="container">
    <h3>
        Наполнение
    </h3>
    <form method="POST" action="{{ route('admin.titleedit') }}" class="admin-form">
        @csrf
        <div class="flex-container container">
            <div class="admin-input">
                <label for="head_title">Главный заголовок</label>
                <input type="text" name="head_title" value="{{ $head_title->value }}">
            </div>
            <div class="admin-input">
                <label for="head_moto">Второй заголовок</label>
                <input type="text" name="head_moto" value="{{ $head_moto->value }}">
            </div>
            <div class="admin-input">
                <label for="head_description">Описание</label>
                <textarea type="textarea" name="head_description">{{ $head_description->value }}</textarea>
            </div>
            <div class="admin-input">
                <label for="head_name">Наименование календаря</label>
                <input type="text" name="head_name" value="{{ $head_name->value }}">
            </div>
        </div>
        <button class="regular-btn"  type="submit" id="submit_title">Сохранить</button>
        <div id="confirmationt" class="font-medium">
    </form>
</div>
<div class="container">
    <h3>
        Сбросить все Дни
    </h3>
    <form method="GET" action="{{ route('admin.cleanhistory') }}">
        <button class="regular-btn"  type="submit" id="refresh_data" style="max-width:320px!important">Очистить историю пользователей</button>
    </form>
</div>

</div>

{{--<script>--}}
{{--    document.getElementById("submit_title").addEventListener("click", async function (event) {--}}
{{--        const formDatat = new FormData();--}}
{{--        const title = document.querySelector('input[name="head_title"]').value;--}}
{{--        const moto = document.querySelector('input[name="head_moto"]').value;--}}
{{--        const description = document.querySelector('textarea[name="head_description"]').value;--}}
{{--        const name = document.querySelector('input[name="head_name"]').value;--}}
{{--        const csrft = document.querySelector('meta[name="csrf-token"]').getAttribute('content');--}}


{{--        formDatat.append("title", "title");--}}
{{--        formDatat.append("moto", moto);--}}
{{--        formDatat.append("description", description);--}}
{{--        formDatat.append("name", name);--}}


{{--        try {--}}
{{--            const response = await fetch("{{route('admin.titleedit')}}", {--}}
{{--                method: "POST",--}}
{{--                headers: { 'X-CSRF-TOKEN': csrft },--}}
{{--                body: formDatat,--}}
{{--            });--}}
{{--            const result = await response.json();--}}
{{--            document.getElementById('confirmationt').innerHTML="Успешно!";--}}
{{--        } catch (error) {--}}
{{--            console.log('Ошибка:', error);--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}
