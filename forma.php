<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>заголовок</title>
    <link rel="stylesheet" href="css/themes/ui-darkness/jquery-ui.css">
    <script src="js/jquery-min.js" defer></script><!--ПОДКЛЮЧЕНИЕ-->
    <script src="js/jquery-ui.min.js" defer></script><!--ПОДКЛЮЧЕНИЕ-->
    <script src="js/registration.js" defer></script><!--ПОДКЛЮЧЕНИЕ-->
</head>
<body>
    <!--САМА ФОРМА-->
    <div class="forma_full">
        <form method="post" id="form">
            <div class="forma_text_zag">ФОРМА</div>
            <div class="stroka">
                <p class="stroka_text">Фамилия</p><input class="input_text" autofocus="autofocus" id="LastName" type="text" name="LastName"   placeholder="Фамилия" required>
            </div>
            <div class="stroka">
                <p class="stroka_text">Пароль</p><input class="input_text" autofocus="autofocus" id="Password" type="password" name="Password"   placeholder="Пароль" required>
            </div>
            <div class="stroka">
                <p class="stroka_text">Дата рождения</p><input class="input_text" autofocus="autofocus" id="Data" type="date" name="Data" placeholder="Дата рождения" required>
            </div>
            <div class="stroka">
                <p class="stroka_text">Телефон</p><input class="input_text" autofocus="autofocus" id="Number" type="text" name="Number" placeholder="7(___)___-__-__" required>
            </div>
            <div class="stroka">
                <p class="stroka_text">Email</p><input class="input_text" autofocus="autofocus" id="Email" type="text" name="Email" placeholder="Email" required>
            </div>
            <br><br>
            <button id="btn_1" class="button" type="submit">Отправить</button>

            
        </form> 
        <div id="result_form"></div><!--DIV для загрузки результата--> 
    </div>
</body>

</html>