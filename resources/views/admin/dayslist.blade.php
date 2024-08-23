<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <script src={{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('fonts/fonts.css') }}>
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
    <link rel="stylesheet" href={{ asset('css/modal.css') }}>
    <link rel="stylesheet" href={{ asset('css/admin.css') }}>
    <!-- <script src={{ asset('/js/modal.js') }} defer></script> -->
    <title>Календарь</title>
</head>
<body>
<main>
    <div class="cotnent">
        @include('partials.header')
        <div class="container">
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li></li>
            </ul>
            <h2>
                Административная панель
            </h2>
        </div>
        <div class="container">
            <h3>
                Дни
            </h3>
            <ul class="form-wrap form-days">
                @foreach($Days as $day)
                    <li value="{{$day->id}}">
                        <span class="number">{{$day->day}}</span>
                        <span class="name">{{$day->name}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="container">
            <h3>
                Профиль
            </h3>
            <div class="row-item">
                <img src="{{asset("images/profile_pic.jpg")}}" alt="Фотография профиля" class="wh-200">
                <form class="admin-form">
                    <!-- <p class="font-medium">Почта</p>
                    <span class="font-regular">kekkekchebutek12@mail.ru</span> -->
                    <p class="font-medium">Изменить пароль</p>
                    <div class="admin-form-item">
                        <div class="admin-input">
                            <label for="mail">Новый пароль</label>
                            <input type="text" name="email" required="required">
                        </div>
                        <div class="admin-input">
                            <label for="mail">Старый пароль</label>
                            <input type="text" name="email" required="required">
                        </div>
                    </div>
                    <button class="regular-btn">Изменить</button>
                    <!-- <p class="font-medium">Изменить фотографию профиля</p>
                    <input type="file"> -->

                </form>
            </div>
        </div>

        <!-- Футер -->
        <footer>
            2024 © Команда “Будущее России”
        </footer>
    </div>
    <div class="modal-wrapper inactive" id="load_form">
        @include('modalWindow.subs')
        <div class="modal inactive modal-days">
            <svg class="modal-close" width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.9609 25L48.324 9.72222C50.5587 7.5 50.5587 4.16667 48.324 1.94444C47.486 0.833333 46.0894 0 44.6927 0C43.2961 0 41.8994 0.555555 40.7821 1.66667L25.1397 17.2222L9.77654 1.94444C7.5419 -0.277778 3.91061 -0.277778 1.95531 1.94444C0.837988 2.77778 0 4.16667 0 5.83333C0 7.5 0.558659 8.61111 1.67598 9.72222L17.0391 25L1.67598 40.2778C0.837989 41.3889 0 42.7778 0 44.4444C0 45.8333 0.558659 47.2222 1.67598 48.3333C2.7933 49.4444 4.18994 50 5.58659 50C6.98324 50 8.37989 49.4444 9.49721 48.3333L24.8603 33.0556L40.2235 48.3333C42.4581 50.5556 46.0894 50.5556 48.0447 48.3333C50.2793 46.1111 50.2793 42.5 48.0447 40.5556L32.9609 25Z" fill="white"/>
            </svg>
            <div id="confirmation" class="font-medium">
            </div>
            <div class="modal-info">
                <h2 class="modal-title" id="day-title">День № </h2>
            </div>
            <form class="modal__form">
                <div class="modal__form-item">
                    <label for="mail">Название</label>
                    <input type="text" id="name-input" name="name" required="required" value="">
                </div>
                <div class="modal__form-item">
                    <label for="mail">Описание</label>
                    <input type="textarea" rows="10" cols="45" id="description-input" name="desc" required="required" value="">
                </div>
                <div class="modal__form-item">
                    <label for="mail">Изображение</label>
                    <input type="file" id="file-input" name="image" required="required" accept=".jpg, .png, .webp, .mp4, .jpeg, .bmp" value="">
                </div>
                <div class="modal__form-item">
                    <label for="mail">Кнопка</label>
                    <input type="text" id="button-input" name="button" required="required" value="">
                </div>
                <div class="modal__form-item">
                    <label for="mail">Лонгрид</label>
                    <textarea type="textarea" rows="10" cols="45" id="longread-input" name="long" required="required" value=""></textarea>
                </div>
            </form>
            <button id="submit" value="">Изменить</button>
            <style>
                .modal__form{
                    max-height: 400px;
                    overflow: auto;
                    .modal__form-item{
                        overflow: unset;
                        height: 100%!important;
                    }
                }
            </style>
        </div>
    </div>

</main>
</body>
</html>
<script>

    const ModalWrapper = document.getElementsByClassName("modal-wrapper")[0]
    const ModalDays = document.getElementsByClassName("modal-days")[0]
    const CloseIcons = document.querySelectorAll(".modal-close")
    document.getElementsByClassName("form-days")[0].addEventListener("click",function(event){
        if(event.target.tagName === "LI"){
            var day = (event.target.getAttribute('value'));
            var request = new XMLHttpRequest(); // Создвём объект запроса

            request.open('GET', '/adminp/edit/' + day); // Указываем куда отправить запрос
            request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
            request.send(); // Выполняем отправку

            request.onreadystatechange = function () { // Дожидаемся ответа
                if (request.readyState == 4 && request.status == 200) {// Делаем проверку если ответ получен и страница отдала код 200 (открылась)
                    const json= JSON.parse(request.responseText);
                    document.getElementById('submit').value=json[0];
                    document.getElementById('day-title').innerHTML="День №"+json[0];
                    document.getElementById('name-input').value=json[1];
                    document.getElementById('description-input').value=json[2];
                    document.getElementById('longread-input').value=json[3];
                    document.getElementById('button-input').value=json[4];
                    ModalWrapper.classList.remove("inactive")
                    ModalDays.classList.remove("inactive")

                    document.getElementById("submit").addEventListener("click", async function (event) {
                        const formData = new FormData();
                        const day = document.getElementById('submit').value;
                        const name = document.querySelector('input[name="name"]').value;
                        const description = document.querySelector('input[name="desc"]').value;
                        const longread = document.querySelector('textarea[name="long"]').value;
                        const fileField = document.querySelector('input[name="image"]');
                        const button = document.querySelector('input[name="button"]').value;
                        var fname = document.querySelector('input[name="image"]').value;
                        var re = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png|\.mp4)$/i;
                        if (fname !== "") {
                            if (!re.exec(fname)) {
                                alert("Неподходящее расширение файла! Попробуйте jpg, jpeg, bmp, gif, png, mp4");
                                return;
                            }
                            if(fileField.files[0].size > 2000000) {
                                alert("Файл не должен превышать 2МБ!");
                                return;
                            }
                        }

                        formData.append("day", day);
                        formData.append("name", name);
                        formData.append("description", description);
                        formData.append("longread", longread);
                        formData.append("image", fileField.files[0]);
                        formData.append("button", button);
                        try {
                            const response = await fetch("{{route('admin.editconfirm')}}", {
                                method: "POST",
                                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                                body: formData,
                            });
                            const result = await response.json();
                            document.getElementById('confirmation').innerHTML="Успешно!";
                        } catch (error) {
                            console.error('Ошибка:', error);
                        }
                    });
                }
            }
        }
    })
    // Закрытие окна при нажатии на X
    CloseIcons.forEach(icon => {
        icon.addEventListener("click",toggle_modal)
    });
    // Закрытие окна при нажатии за пределы окна
    ModalWrapper.addEventListener("click", function(){
        if (event.target === ModalWrapper) {
            toggle_modal();
        }
    })
    function toggle_modal(){
        ModalWrapper.classList.add("inactive")
        ModalDays.classList.add("inactive")
    }
</script>
