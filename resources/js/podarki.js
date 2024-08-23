

document.addEventListener('DOMContentLoaded', function() {
    // Подарки
    const Calendar = document.getElementsByClassName("calendar")[0]
    for(let i = 1; i <= 31; i++){
        var productItemHtml = `
                        <svg width="107" height="112" viewBox="0 0 107 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.33594 24.821V96.5586C4.33594 104.835 10.968 111.544 19.1483 111.544H53.3193V24.821H4.33594Z" fill="#FD8469"/>
                            <path d="M53.3203 24.8207V111.544H87.4904C95.6715 111.544 102.303 104.834 102.303 96.5583V24.8207H53.3203Z" fill="#FC6F58"/>
                            <path d="M6.99592 12.4318C3.27238 12.4318 0.254883 15.4854 0.254883 19.2516V37.2099H53.3199V12.4318H6.99592Z" fill="#FC6F58"/>
                            <path d="M106.384 19.2516C106.384 15.4845 103.366 12.4318 99.6434 12.4318H53.3193V37.2099H106.384V19.2516Z" fill="#F1543F"/>
                            <path d="M65.5649 12.4318H41.0732V111.544H65.5649V12.4318Z" fill="#F4E3C3"/>
                            <path d="M65.565 12.4318H53.3193V111.544H65.565V12.4318Z" fill="#F2C59E"/>
                            <path d="M53.3193 12.4325H16.582V5.92583C16.582 2.67749 19.1849 0.0437012 22.3962 0.0437012H41.0737C47.8371 0.0432656 53.3193 5.59002 53.3193 12.4325Z" fill="#FFD15D"/>
                            <path d="M53.3193 12.4325H90.0566V5.92583C90.0566 2.67749 87.4537 0.0437012 84.2433 0.0437012H65.565C58.8015 0.0432656 53.3193 5.59002 53.3193 12.4325Z" fill="#F9B54C"/>
                        </svg>
                        <span>`+ i + `</span>
        `;
        var productItem = document.createElement('li');
        productItem.innerHTML = productItemHtml
        
        Calendar.appendChild(productItem)
    }
});