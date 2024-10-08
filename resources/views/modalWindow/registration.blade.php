<style>
    i.ico {
        display: inline-block;
        background: red;
        border-right: 50px;
        width: 20px;
        text-align: center;
        font-style: normal;
        font-weight: bold;
    }
    #massageBlock {
        position: absolute;
        top: 90%;
        right: 20px;
        transform: translateX(100%); /* initial transform: hidden to the right */
        background: #ffe0e0;
        border: 1px solid #a33a3a;
        color: black;
        padding: 10px;
        border-radius: 10px;
        visibility: hidden; /* initial visibility: hidden */
        opacity: 0; /* initial opacity: 0 */
        transition: transform 0.5s, opacity 0.5s, visibility 0s; /* add a transition effect to transform, opacity, and visibility */
    }

    #massageBlock.show {
        visibility: visible; /* final visibility: visible */
        opacity: 1; /* final opacity: 1 */
        transform: translateX(0); /* final transform: slide in from the right */
    }
    #massageBlock .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    #massageBlock {
        transition: opacity 0.5s; /* add a transition effect to opacity */
        opacity: 0; /* initial opacity is 0, so the block is hidden */
    }

    #massageBlock.show {
        opacity: 1; /* when the block is shown, opacity is 1 */
    }
    input[type="checkbox"]{
        font-size: 30px;
        width: 20px;
        height: 20px;
    }
    .modal__form-item-checkbox{
        max-width: 500px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-direction: row-reverse;
        align-items: center;
        width: 100%;
    }
    
</style>

<div class="modal inactive modal-reg">
    <svg class="modal-close" width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M32.9609 25L48.324 9.72222C50.5587 7.5 50.5587 4.16667 48.324 1.94444C47.486 0.833333 46.0894 0 44.6927 0C43.2961 0 41.8994 0.555555 40.7821 1.66667L25.1397 17.2222L9.77654 1.94444C7.5419 -0.277778 3.91061 -0.277778 1.95531 1.94444C0.837988 2.77778 0 4.16667 0 5.83333C0 7.5 0.558659 8.61111 1.67598 9.72222L17.0391 25L1.67598 40.2778C0.837989 41.3889 0 42.7778 0 44.4444C0 45.8333 0.558659 47.2222 1.67598 48.3333C2.7933 49.4444 4.18994 50 5.58659 50C6.98324 50 8.37989 49.4444 9.49721 48.3333L24.8603 33.0556L40.2235 48.3333C42.4581 50.5556 46.0894 50.5556 48.0447 48.3333C50.2793 46.1111 50.2793 42.5 48.0447 40.5556L32.9609 25Z" fill="white"/>
    </svg>
    <div class="modal-info">
        <h2 class="modal-title">Авторизация</h2>
        <h3 class="modal-subtitle">Регистрация</h3>
    </div>
    <form class="modal__form" id="register-form" method="POST" action="{{route('advent.register')}}" style="max-height: 264px!important; overflow: auto!important;">
        @csrf
        <div class="modal__form-item" style="overflow-y: unset!important">
            <label for="mail">Электронная Почта</label>
            <input type="text" name="email" id="name" required="required">
        </div>

        <div class="modal__form-item" style="overflow-y: unset!important">
            <label for="mail">Пароль</label>
            <input type="password" name="password" required="required">
        </div>

        <div class="modal__form-item" style="overflow-y: unset!important">
            <label for="mail">Повторите Пароль</label>
            <input type="password" name="password-confirm" required="required">
        </div>

        <div class="modal__form-item-checkbox" style="overflow-y: unset!important">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree">Ознакомлен с <a href="https://cyberprotect.ru/privacy">пользовательским соглашением</a></label>
        </div>

        <div class="modal__form-item-checkbox" style="overflow-y: unset!important">
            <input type="checkbox" id="subscribe" name="subscribe">
            <label for="subscribe">Согласие на рассылку (не обязательно)</label>
        </div>
    </form>
    <button type="submit" form="register-form">Войти</button>
    <button id="i_have_account">У меня есть аккаунт</button>
    <div id="block_error" onclick="closeErrorLogin()" class="error-sleep"></div>
                
</div>
<script>
    const form = document.getElementById('register-form');
    const messageBlock = document.getElementById('block_error');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const email1 = document.getElementById('name');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(form);
        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            body: formData,
        });
        console.log(response);
        if (!response.ok) {
            messageBlock.classList.remove('error-sleep');
            const errorData = await response.json();
            messageBlock.innerHTML = `${errorData.error}`;

        } else {
            messageBlock.classList.remove('error-sleep');
            // messageBlock.innerHTML = `<i class="ico">&#10004;</i> Успех: <br> "Вы успешно зарегистрировались"` + `<i class="close" onclick="closeMessage()">&#9747;</i>`;
            messageBlock.style.background = "green";

            if (formData.get('subscribe')) {
                setTimeout(function() {
                    const email = document.getElementById('name').value;
                    const url = `{{ route('mail.subs') }}?email=${email}`;
                    window.location.href = url;
                }, 2000);
            }
        }
    });

    function closeMessage() {
        messageBlock.classList.add('error-sleep');
    }
</script>
