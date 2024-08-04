document.addEventListener('DOMContentLoaded', function() {
    const calendarItems = document.querySelectorAll('.calendar li');
    const currentDate = new Date();
    const dayOfMonth = currentDate.getDate();


    calendarItems.forEach(function(item) {
        const day = parseInt(item.querySelector('span').textContent);
        item.addEventListener('click', function() {
            console.log(dayOfMonth);
            if (day > dayOfMonth) {
                item.classList.add('shake');
                setTimeout(function() {
                    item.classList.remove('shake');
                }, 500);
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
                }, 200);
            }
        });
    });
});
