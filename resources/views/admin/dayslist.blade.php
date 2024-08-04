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
    <title>Календарь</title>
</head>
<body>
<main>
    <div class="cotnent">
        <!-- Хедер -->
        <header>
            <div class="container header-content">
                <svg width="576" height="98" viewBox="0 0 576 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1363 61.1648H17.7763L26.5763 87.9648H21.4963L19.3363 81.3648H8.29633L6.17633 87.9648H1.45633L10.1363 61.1648ZM13.2163 66.2048L9.65633 77.1648H17.9363L14.3363 66.2048H13.2163ZM36.8598 71.6848C36.7398 77.9648 36.2998 81.0448 35.2998 83.9648H43.8598V71.6848H36.8598ZM32.3798 67.6848H48.7398V83.9648H51.6198V93.1648H47.0198V87.9648H32.8198V93.1648H28.1798V83.9648H30.6598C32.0598 80.4848 32.3798 76.5248 32.3798 67.6848ZM54.9704 67.6848H65.3704C70.2504 67.6848 72.3304 69.7648 72.3304 72.7648C72.3304 75.0048 71.0904 76.4048 69.4104 77.0848V77.9648C71.2904 78.6048 72.7704 79.9648 72.7704 82.4448C72.7704 85.6448 70.7704 87.9648 65.6904 87.9648H54.9704V67.6848ZM59.8104 71.0048V76.1648H64.7304C66.6504 76.1648 67.3704 75.0848 67.3704 73.5248C67.3704 72.0448 66.6504 71.0048 64.7304 71.0048H59.8104ZM59.8104 79.3248V84.6448H64.7704C66.8904 84.6448 67.8504 83.8448 67.8504 81.9648C67.8504 80.2048 66.8904 79.3248 64.8104 79.3248H59.8104ZM85.5757 67.2848H86.0557C91.5757 67.2848 95.6157 70.3248 95.6157 76.4848V79.1648H80.7757V79.4448C80.7757 82.9648 82.5757 84.6448 85.5757 84.6448H86.0557C88.9357 84.6448 90.3757 83.4448 90.8557 81.4448H95.3757C94.8957 85.7648 91.6957 88.3648 86.0557 88.3648H85.5757C80.0957 88.3648 76.0157 85.3648 76.0157 79.2448V76.4848C76.0157 70.3248 80.0957 67.2848 85.5757 67.2848ZM85.5357 71.0048C82.6157 71.0048 80.8957 72.5648 80.7757 75.6048H90.8557C90.7357 72.6048 88.8157 71.0048 86.0157 71.0048H85.5357ZM99.8532 67.6848H104.773V75.8448H113.533V67.6848H118.453V87.9648H113.533V79.6048H104.773V87.9648H99.8532V67.6848ZM121.695 67.6848H140.415V71.6848H133.495V87.9648H128.615V71.6848H121.695V67.6848ZM151.889 61.1648H156.969V72.1648H158.169L167.529 61.1648H173.129L162.769 73.3648V74.5648L173.849 87.9648H167.689L158.209 76.4848H156.969V87.9648H151.889V61.1648ZM184.122 67.2848H184.602C190.442 67.2848 193.282 70.0048 193.282 74.6048V87.9648H188.402V85.6048H187.602C186.122 87.5248 184.282 88.3648 181.522 88.3648C177.922 88.3648 174.922 86.5248 174.922 82.2048C174.922 78.4048 177.402 76.0848 183.082 76.0848H188.402V74.6048C188.402 72.0848 186.962 71.0448 184.602 71.0448H184.122C182.042 71.0448 180.322 72.0848 180.322 74.5648H175.522C175.522 70.0048 178.522 67.2848 184.122 67.2848ZM183.482 79.1648C180.842 79.1648 179.762 80.1248 179.762 81.8448C179.762 83.5648 180.962 84.5248 183.242 84.5248C186.002 84.5248 188.402 83.2448 188.402 79.7648V79.1648H183.482ZM199.465 67.6848H215.345V87.9648H210.465V71.6848H204.025C203.865 84.1248 202.825 88.0048 196.585 88.0048H196.105V83.8448H196.425C198.865 83.8448 199.425 81.6448 199.465 67.6848ZM229.13 67.2848H229.61C235.13 67.2848 239.17 70.3248 239.17 76.4848V79.1648H224.33V79.4448C224.33 82.9648 226.13 84.6448 229.13 84.6448H229.61C232.49 84.6448 233.93 83.4448 234.41 81.4448H238.93C238.45 85.7648 235.25 88.3648 229.61 88.3648H229.13C223.65 88.3648 219.57 85.3648 219.57 79.2448V76.4848C219.57 70.3248 223.65 67.2848 229.13 67.2848ZM229.09 71.0048C226.17 71.0048 224.45 72.5648 224.33 75.6048H234.41C234.29 72.6048 232.37 71.0048 229.57 71.0048H229.09ZM243.408 67.6848H248.328V75.8448H257.088V67.6848H262.008V87.9648H257.088V79.6048H248.328V87.9648H243.408V67.6848ZM273.93 71.6848C273.81 77.9648 273.37 81.0448 272.37 83.9648H280.93V71.6848H273.93ZM269.45 67.6848H285.81V83.9648H288.69V93.1648H284.09V87.9648H269.89V93.1648H265.25V83.9648H267.73C269.13 80.4848 269.45 76.5248 269.45 67.6848ZM300.216 67.2848H300.696C306.536 67.2848 309.376 70.0048 309.376 74.6048V87.9648H304.496V85.6048H303.696C302.216 87.5248 300.376 88.3648 297.616 88.3648C294.016 88.3648 291.016 86.5248 291.016 82.2048C291.016 78.4048 293.496 76.0848 299.176 76.0848H304.496V74.6048C304.496 72.0848 303.056 71.0448 300.696 71.0448H300.216C298.136 71.0448 296.416 72.0848 296.416 74.5648H291.616C291.616 70.0048 294.616 67.2848 300.216 67.2848ZM299.576 79.1648C296.936 79.1648 295.856 80.1248 295.856 81.8448C295.856 83.5648 297.056 84.5248 299.336 84.5248C302.096 84.5248 304.496 83.2448 304.496 79.7648V79.1648H299.576ZM313.799 67.6848H318.719V70.0048H319.519C320.879 68.2048 322.919 67.2848 325.359 67.2848H325.839C330.399 67.2848 333.599 70.2048 333.599 76.4448V79.2048C333.599 85.4048 330.399 88.3648 325.839 88.3648H325.359C322.919 88.3648 320.879 87.4848 319.519 85.6048H318.719V97.5648H313.799V67.6848ZM323.479 71.2448C320.479 71.2448 318.719 73.0048 318.719 76.4048V79.2448C318.719 82.6048 320.439 84.4048 323.479 84.4048H323.919C326.919 84.4048 328.679 82.6048 328.679 79.2448V76.4048C328.679 73.0048 326.919 71.2448 323.919 71.2448H323.479ZM337.822 67.6848H342.742V74.4048H348.542C352.862 74.4048 355.662 76.3248 355.662 80.7648V81.6048C355.662 85.8848 352.902 87.9648 348.542 87.9648H337.822V67.6848ZM342.742 78.1648V84.2048H347.462C349.662 84.2048 350.742 83.3648 350.742 81.5248V80.8448C350.742 79.0448 349.702 78.1648 347.502 78.1648H342.742Z" fill="white"/>
                    <path d="M11.6989 0.555176V13.1352H13.1289L29.9889 0.555176H44.1789L23.1289 16.3052V17.9652L44.5489 35.3752H29.8889L13.3589 21.9652H11.6989V35.3752H0.838867V0.555176H11.6989Z" fill="white"/>
                    <path d="M59.8993 0.555176V22.9052H61.4593L82.1293 0.555176H94.8593V35.3752H83.9093V13.0252H82.3493L61.7193 35.3752H48.9893V0.555176H59.8993Z" fill="white"/>
                    <path d="M140.699 0.555176V9.39518H112.699V13.3952H128.809C139.619 13.3952 143.569 17.0852 143.569 24.0452V25.0452C143.569 32.0452 139.459 35.3852 128.809 35.3852H101.809V0.555176H140.699ZM112.699 27.1652H128.809C131.089 27.1652 132.339 26.4352 132.339 24.6152V24.0952C132.339 22.4352 131.149 21.5552 128.809 21.5552H112.739L112.699 27.1652Z" fill="white"/>
                    <path d="M188.619 0.555176V9.07518H160.129V13.6552H185.649V21.6052H160.129V26.8052H188.919V35.3752H149.229V0.555176H188.619Z" fill="white"/>
                    <path d="M223.619 0.555176C233.809 0.555176 237.619 5.28518 237.619 11.8852V13.3452C237.619 20.1452 233.769 24.7752 223.619 24.7752H206.009V35.3752H195.129V0.555176H223.619ZM206.009 15.9352H222.269C224.919 15.9352 226.479 15.1652 226.479 13.0252V12.1952C226.479 10.1952 224.919 9.39518 222.269 9.39518H206.009V15.9352Z" fill="white"/>
                    <path d="M285.409 0.555176V35.3752H274.499V9.37518H253.609V35.3752H242.689V0.555176H285.409Z" fill="white"/>
                    <path d="M320.939 0.555176C331.129 0.555176 334.939 5.28518 334.939 11.8852V13.3452C334.939 20.1452 331.099 24.7752 320.939 24.7752H303.319V35.3752H292.409V0.555176H320.939ZM303.319 15.9352H319.589C322.239 15.9352 323.799 15.1652 323.799 13.0252V12.1952C323.799 10.1952 322.239 9.39518 319.589 9.39518H303.319V15.9352Z" fill="white"/>
                    <path d="M364.339 0.0351562C376.969 0.0351562 387.099 6.16516 387.099 17.1852V18.7352C387.099 29.7352 376.969 35.8852 364.339 35.8852H361.739C348.799 35.8852 338.459 29.7552 338.459 18.7352V17.1852C338.459 6.18516 348.799 0.0351562 361.739 0.0351562H364.339ZM349.629 17.1852V18.7352C349.629 23.7352 354.199 26.5352 361.739 26.5352H363.819C371.349 26.5352 375.929 23.7752 375.929 18.7352V17.1852C375.929 12.0952 371.349 9.39516 363.819 9.39516H361.739C354.199 9.39516 349.629 12.0952 349.629 17.1852Z" fill="white"/>
                    <path d="M433.72 0.555176V9.39518H416.83V35.3952H405.92V9.39518H389.02V0.555176H433.72Z" fill="white"/>
                    <path d="M477.289 0.555176V9.07518H448.759V13.6552H474.269V21.6052H448.759V26.8052H477.549V35.3752H437.889V0.555176H477.289Z" fill="white"/>
                    <path d="M494.619 0.555176V13.1352H496.029L512.919 0.555176H527.129L506.029 16.3052V17.9652L527.499 35.3752H512.809L496.289 21.9652H494.619V35.3752H483.759V0.555176H494.619Z" fill="white"/>
                    <path d="M575.319 0.555176V9.39518H558.429V35.3952H547.509V9.39518H530.619V0.555176H575.319Z" fill="white"/>
                </svg>
                <div class="header-buttons">
                    <button id="subscribe-btn"><a href="{{route("index")}}">Вернуться</a></button>
                    <button id="auth-btn">Выйти</button>
                </div>
            </div>
        </header>
        <div class="container">
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
                        <label for="mail">Лонгрид</label>
                        <input type="textarea" rows="10" cols="45" id="longread-input" name="long" required="required" value="">
                    </div>
                    <div class="modal__form-item">
                        <label for="mail">Изображение</label>
                        <input type="file" id="file-input" name="image" required="required" value="">
                    </div>
                </form>
                <button id="submit" value="">Изменить</button>
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
                    console.log(json);
                    document.getElementById('submit').value=json[0];
                    document.getElementById('day-title').innerHTML="День №"+json[0];
                    document.getElementById('name-input').value=json[1];
                    document.getElementById('description-input').value=json[2];
                    document.getElementById('longread-input').value=json[3];
                    ModalWrapper.classList.remove("inactive")
                    ModalDays.classList.remove("inactive")

                    document.getElementById("submit").addEventListener("click", async function (event) {
                        console.log(112);
                        const formData = new FormData();
                        const day = document.getElementById('submit').value;
                        const name = document.querySelector('input[name="name"]').value;
                        const description = document.querySelector('input[name="desc"]').value;
                        const longread = document.querySelector('input[name="long"]').value;
                        const fileField = document.querySelector('input[name="image"]');

                        formData.append("day", day);
                        formData.append("name", name);
                        formData.append("description", description);
                        formData.append("longread", longread);
                        formData.append("picture", fileField.files[0]);
                        console.log(day);
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
