<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<body>
<div id="list">
    @foreach($Days as $day)
            <p>{{$day->day}}</p>
            <p> ДЕНЬ! НАЗВАНИЕ: </p>
            <p> {{$day->name}}</p>
            <button class="edit" name="{{$day->id}}"> ИЗМЕНИТЬ </button>
            <br>
    @endforeach
</div>

<div id="load_form">

</div>


<script>
    document.getElementById("list").addEventListener("click", function (event) {
        if(event.target.classList.contains("edit")) {
            var day = (event.target.getAttribute('name'));
            var request = new XMLHttpRequest(); // Создвём объект запроса

            request.open('GET', '/admin/edit/' + day); // Указываем куда отправить запрос
            request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
            console.log(request);
            request.send(); // Выполняем отправку

            request.onreadystatechange = function () { // Дожидаемся ответа
                if (request.readyState == 4 && request.status == 200) {// Делаем проверку если ответ получен и страница отдала код 200 (открылась)
                    var response = request.responseText; // Получаем ответ как текст (включая html) и сохраням в переменную
                    document.getElementById('load_form').innerHTML = request.responseText; // Выводим данные в консоль
                }
            }
        }
    });
</script>


</body>
</html>
