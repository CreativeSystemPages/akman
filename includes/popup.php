<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Prata:300,400,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="popup__area">
        <div id="popup" class="popup">

            <div class="popup__content">
                <h3 class="popup__title">Оставьте заявку или свяжитесь с нами самостоятельно</h3>
                <form class="popup__form" action="send.php" method="POST">
                    <input class="popup_input" type="text" placeholder="Введите имя">
                    <input class="popup_input tel" type="text" placeholder="Введите номер">
                    <input class="popup_input" type="email" placeholder="Введите email">
                    <input class="popup_input" type="text" placeholder="Комментарий">
                    <button class="popup__button">Отправить</button>
                </form>
                <div class="popup__agree">
                    <p>Нажимая на кнопку отправить Вы соглашаетесь с нашей <a href="">политикой конфиденциальности</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.tel'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});
    </script>
</html>