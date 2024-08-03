$(document).ready(() => {
    // Модальные окна
    const Subscribe = document.getElementById("subscribe-btn")
    const Auth = document.getElementById("auth-btn")
    const CloseIcons = document.querySelectorAll(".modal-close")
    const SubscribeModal = document.getElementsByClassName("modal-subscribe")[0]
    const LoginModal = document.getElementsByClassName("modal-login")[0]
    const RegModal = document.getElementsByClassName("modal-reg")[0]
    const ModalWrapper = document.getElementsByClassName("modal-wrapper")[0]
    // Авторизация
    Auth.addEventListener("click", function(){
        toggle_modal()
        LoginModal.classList.remove("inactive")
    })
    const HaveAccountBtn = document.getElementById("i_have_account")

    // Перейти к Входу
    HaveAccountBtn.addEventListener("click", function(){
        RegModal.classList.add("inactive")
        LoginModal.classList.remove("inactive")
    })

    // Перейти к Регестрации
    const DontHaveAccountBtn = document.getElementById("i_dont_have_account")
    DontHaveAccountBtn.addEventListener("click", function(){
        LoginModal.classList.add("inactive")
        RegModal.classList.remove("inactive")
    })


    // Вызов окна Подписаться
    Subscribe.addEventListener("click", function(){
        toggle_modal()
        SubscribeModal.classList.remove("inactive")
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
    // Вызов окна Авторизоваться
    function toggle_modal(modal){
        LoginModal.classList.add("inactive")
        SubscribeModal.classList.add("inactive")
        RegModal.classList.add("inactive")
        document.getElementsByClassName("modal-wrapper")[0].classList.toggle("inactive")
    }
})