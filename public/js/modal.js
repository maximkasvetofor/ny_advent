document.addEventListener('DOMContentLoaded', function() {
    // Модальные окна
    const CloseIcons = document.querySelectorAll(".modal-close")
    const SubscribeModal = document.getElementsByClassName("modal-subscribe")[0]
    const LoginModal = document.getElementsByClassName("modal-login")[0]
    const RegModal = document.getElementsByClassName("modal-reg")[0]
    const ModalWrapper = document.getElementsByClassName("modal-wrapper")[0]
    const PodarokModal = document.getElementsByClassName("modal-podarok")[0]
    const ModalDays = document.getElementsByClassName("modal-days")[0]
    
    // if(ModalDays){
    //     const ModalDaysBtn = document.getElementById("auth-btn")
    // }
    // Авторизация
    if (document.getElementById("auth-btn") ){
        const Auth = document.getElementById("auth-btn")
        Auth.addEventListener("click", function(){
            toggle_modal()
            LoginModal.classList.remove("inactive")
        })
    }
    // Перейти к Входу
    if (document.getElementById("i_have_account") ){
        const HaveAccountBtn = document.getElementById("i_have_account");
        HaveAccountBtn.addEventListener("click", function(){
        RegModal.classList.add("inactive")
        LoginModal.classList.remove("inactive")
    })
    }
    // Перейти к Регестрации
    if (document.getElementById("i_dont_have_account") ){
        const DontHaveAccountBtn = document.getElementById("i_dont_have_account")
        DontHaveAccountBtn.addEventListener("click", function(){
            LoginModal.classList.add("inactive")
            RegModal.classList.remove("inactive")
        })
    }

    // Вызов окна Подписаться
    if (document.getElementById("subscribe-btn") ){
        const Subscribe = document.getElementById("subscribe-btn")
        Subscribe.addEventListener("click", function(){
            console.log("призываю")
            toggle_modal()
            SubscribeModal.classList.remove("inactive")
        })
    }
    



    // Закрыть окно подарка при нажатии на кнопку
    if( document.getElementById("podarok-btn") ){
        document.getElementById("podarok-btn").addEventListener("click", function(){
            toggle_modal();
        })
    }

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
        if(PodarokModal){
            PodarokModal.classList.add("inactive")
            clear_figt_info()
        }
        if(LoginModal){
            LoginModal.classList.add("inactive")
        }
        if(RegModal){
            RegModal.classList.add("inactive")
        }
        SubscribeModal.classList.add("inactive")
        document.getElementsByClassName("modal-wrapper")[0].classList.toggle("inactive")
    }
    function clear_figt_info() {
        PodarokModal.getElementsByClassName("modal-buttons-social")[0].innerHTML = ""
        document.getElementById("podarok-media").innerHTML = ""
    }
})
