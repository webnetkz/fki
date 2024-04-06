function isSendForm(event)
{
    event.preventDefault();

    let name = document.querySelector("input[name='name']");
    let phone = document.querySelector("input[name='phone']");
    let message = document.querySelector("textarea[name='message']");


    let xhr = new XMLHttpRequest();

    xhr.open("POST", "./app/telegram/send_message_telegram.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function()
    {
        if (xhr.status === 200)
        {
            let messageBlock = document.createElement('div');
                messageBlock.classList.add('mini-message');
                messageBlock.innerText = 'Заявка принята, наш менеджер скоро свяжится с вами.';

            messageBlock.addEventListener('click', () => {
                messageBlock.remove();
            });

            setTimeout(() => {
                messageBlock.remove();
            }, 7000);
        }
        else
        {
            console.error("Ошибка " + xhr.status + ": " + xhr.statusText);
        }
    };

    xhr.onerror = function()
    {
        console.error("Ошибка сети");
    };

    xhr.send("name=" + encodeURIComponent(name.value) + "&phone=" + encodeURIComponent(phone.value) + "&message=" + encodeURIComponent(message.value));
    name.value = '';
    phone.value = '';
    message.value = '';
}