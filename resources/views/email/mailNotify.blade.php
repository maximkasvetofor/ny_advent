<html>
<head>
    <title>{{ $data['subject'] }}</title>
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
    <h1>Подтверждение подписки на "Хорошую" рассылку</h1>
    <p>Уважаемый Пользователь,</p>
    <p>Вы успешно подписались на нашу "Хорошую" рассылку. Мы рады, что вы присоединились к нашей сообществу!</p>
    <p>Чтобы подтвердить свою подписку, пожалуйста, нажмите на кнопку ниже:</p>
    <p><a href="{{ route('mail.add', ['email' => $data['email']]) }}" class="button">Подтвердить подписку</a></p>
    <p>
        Если вы не отправляли запрос на подписку, то перейдите по <a href="{{route('index')}}" class="unsubscribe">этой ссылке</a>, чтобы подтвердить, что это не вы.
    </p>
</div>
</body>
</html>
