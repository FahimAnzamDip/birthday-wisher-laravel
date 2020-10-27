<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Birthday</title>
    <style>
        body {
            background: #F4F6FC;
            font-family: sans-serif, Lato;
            margin: 0;
            padding: 50px 0;
        }
        .container {
            width: 95%;
            margin: 0 auto;
            background: #fff;
        }
        h2.heading {
            color: #3e3e3e;
            margin-top: 5px;
        }
        p.message {
            color: #8E9AA2;
        }
        img {
            width: 100%;
        }
        .padding {
            padding: 20px 10%;
        }
    </style>
</head>
<body>
    <section class="main">
        <div class="container">
            <img src="https://i.ibb.co/6sPjZNS/birthday-image.png" alt="birthday-image">
            <div class="padding">
                <h2 class="heading">Hey {{ $employee->name }}, Happy birthday to you!</h2>
                <p class="message">
                    {{ $employee->message->birthday_message }}
                </p>
                <p class="message">
                    Best Wishes From, <strong>Wisher</strong>
                </p>
            </div>
        </div>
    </section>
</body>
</html>
