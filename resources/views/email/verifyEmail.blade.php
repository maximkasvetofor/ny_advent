<html>
<head>
    <title>Спасибо за подписку на "Хорошую" рассылку</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        p {
            margin-bottom: 20px;
        }
        .button {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #3e8e41;
        }
        .unsubscribe {
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }
        .unsubscribe:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Спасибо за подписку на "Хорошую" рассылку</h1>
    <p>Уважаемый Пользователь,</p>
    <p>Мы рады, что вы присоединились к нашей сообществу! Вы успешно подписались на нашу "Хорошую" рассылку.</p>
    <p>Спасибо за доверие! Мы будем рады делиться с вами интересными новостями и предложениями.</p>
    <p>
        Если вы хотите отписаться от рассылки, то нажмите на кнопку "Отписаться". Не теряйте это сообщение, чтобы не потерять возможность отписаться от рассылки.
    </p>
    <p>
        <a href="{{ route('mail.delete', ['email' => $data['email']]) }}" class="button">Отписаться</a>
    </p>
</div>
</body>
</html>
