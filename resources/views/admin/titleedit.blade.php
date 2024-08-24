<form method="POST" action="{{ route('admin.titleedit') }}">
    @csrf
    <input type="text" name="head_title" value="{{ $head_title->value }}">
    <input type="text" name="head_moto" value="{{ $head_moto->value }}">
    <textarea type="textarea" name="head_description">{{ $head_description->value }}</textarea>
    <input type="text" name="head_name" value="{{ $head_name->value }}">
    <button type="submit" id="submit_title">Сохранить</button>
</form>
<div id="confirmationt" class="font-medium">
</div>
<form method="GET" action="{{ route('admin.cleanhistory') }}">
    <button type="submit" id="refresh_data">Очистить историю пользователей</button>
</form>
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
