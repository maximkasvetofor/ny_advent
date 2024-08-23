document.addEventListener('DOMContentLoaded', function() {
    const calendarItems = document.querySelectorAll('.calendar li');
    const currentDate = new Date();
    const dayOfMonth = currentDate.getDate();


    calendarItems.forEach(function(item) {
        const day = parseInt(item.querySelector('span').textContent);
        item.addEventListener('click', function() {
            if (day > dayOfMonth) {
                item.classList.add('gift-shake');
                setTimeout(function() {
                    item.classList.remove('gift-shake');
                }, 1000);
            } else {
                item.classList.add('explode');
                item.querySelector('#leftSide-cover').classList.add('seeForEver');
                item.querySelector('#leftSide-cover').classList.add('fly-off');
                item.querySelector('#rightSide-cover').classList.add('fly-off');
                item.querySelector('#tapeLeft-cover').classList.add('fly-off');
                item.querySelector('#tapeRight-cover').classList.add('fly-off');
                setTimeout(function() {
                    item.querySelector('#tapeWhite').classList.add('tape-off');
                    item.querySelector('#tapeRed').classList.add('tape-off');
                    var day = (item.getAttribute('value'));
                    var request = new XMLHttpRequest(); // Создвём объект запроса
                    request.open('GET', '/gift/' + day); // Указываем куда отправить запрос
                    request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
                    request.send(); // Выполняем отправку
                    request.onreadystatechange = function () { // Дожидаемся ответа
                        if (request.readyState == 4 && request.status == 200) {// Делаем проверку если ответ получен и страница отдала код 200 (открылась)
                            const json = JSON.parse(request.responseText);
                            document.getElementsByClassName("modal-wrapper")[0].classList.remove("inactive")
                            document.getElementsByClassName("modal-podarok")[0].classList.remove("inactive")
                            document.getElementById('podarok-id').innerHTML = "Совет №" + json[0];
                            document.getElementById('podarok-name').innerHTML = json[1];
                            document.getElementById('podarok-description').innerHTML = json[2];
                            document.getElementsByClassName('modal__form-item')
                            if (json[0] == 31) {
                                document.getElementById('podarok-btn').innerHTML = "С НОВЫМ ГОДОМ!"
                            }
                            var form = document.getElementById('gift-form')
                            document.getElementById('podarok-btn').innerHTML = json[5];
                            // Поделится
                            // document.getElementById("share").setAttribute('data-title', 'Сегодня я узнал о совете: "'+json[1]+'"! Узнай больше по ссылке- ');
                            
                        //ЛОНГРИД 
                            if (json[3]) {
                                form.getElementsByClassName("modal-buttons")[0].getElementsByTagName("div")[0].innerHTML += `<a class href="/adminp/longread/${day}" id="podarok-btn">Подробнее</a>`
                                // form.getElementsByClassName("modal-buttons")[0].getElementsByTagName("div")[0].remove("inactive")
                                form.getElementsByClassName("modal-buttons")[0].getElementsByTagName("div")[0].style.display = "flex";

                            }else{
                                form.getElementsByClassName("modal-buttons")[0].getElementsByTagName("div")[0].style.display = "none";
                            }

                        //МЕДИА
                            if (json[4]) {
                                document.getElementById('podarok-media').innerHTML = `<img src="${json[4]}" alt="" width="100%">`;
                                document.getElementById("podarok-media").style.display = "flex";
                            }else{
                                document.getElementById('podarok-media').style.display = "none";
                            }
                        }
                    }
                }, 200);


            }
        });
    });
});
// document.getElementsByClassName("calendar")[0].addEventListener("click",function(event) {
//     console.log(event.target);
//     if (event.target.tagName === "LI") {
//         var day = (event.target.getAttribute('value'));
//         var request = new XMLHttpRequest(); // Создвём объект запроса

        // request.open('GET', '/gift/' + day); // Указываем куда отправить запрос
        // request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
        // request.send(); // Выполняем отправку

        // request.onreadystatechange = function () { // Дожидаемся ответа
        //     if (request.readyState == 4 && request.status == 200) {// Делаем проверку если ответ получен и страница отдала код 200 (открылась)
        //         const json = JSON.parse(request.responseText);
        //         console.log(json);
        //         document.getElementById('day-gift').innerHTML = "День №" + json[0];
        //         document.getElementById('name-gift').innerHTML = json[1];
        //         document.getElementById('description-gift').innerHTML = json[2];
        //         // document.getElementById('longread-gift').innerHTML = json[3];
        //     }
        // }
//     }
// });
