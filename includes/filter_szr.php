<div id="filters" class="filters">
                <p>Фильтры</p>
                <button class="filters_title">Тип средства</button>
                <form action="back.php" method="GET" id="type" class="filter_item hide" >
                    <ul>
                   <li><input onchange="Checks()" id="protravitel" value="Протравитель" name="filtercheck" type="checkbox"><label for="filtercheck">Протравители</label></li>
                        <li><input value="Гербицид" name="filtercheck" type="checkbox"><label for="filtercheck">Гербициды</label> </li>
                        <li><input value="Фунгицид" name="filtercheck" type="checkbox"><label for="filtercheck">Фунгициды </label></li>
                        <li><input value="Инсектецид" name="filtercheck" type="checkbox"><label for="filtercheck">Инсектициды</label></li>
                        <li><input value="Фумигант" name="filtercheck" type="checkbox"><label for="filtercheck">Фумиганты</label></li>
                        <li><input value="Микроудобрения" name="filtercheck" type="checkbox"><label for="filtercheck">Микроудобрения</label></li>
                        <li><input value="Стимулятор роста" name="filtercheck" type="checkbox"><label for="filtercheck">Стимуляторы роста</label></li>
                        <li><input value="ПАВы" name="filtercheck" type="checkbox"><label for="filtercheck">ПАВы</label></li>
                        <li><input value="Специальные препараты" name="filtercheck" type="checkbox"><label for="filtercheck">Специальные препараты</label></li>
                        <li><input value="Десиканты" name="filtercheck" type="checkbox"><label for="filtercheck">Десиканты</label></li>
                    </ul>
                </form>
                <button class="filters_title">Культура</button>
                <div id="culture" class="filter_item hide">
                    <ul class="filterItem">
                        <li><input value="Горох" name="filtercheck" type="checkbox"><label for="filtercheck">Горох, нут</label></li>
                        <li><input value="Зерновые" name="filtercheck" type="checkbox"><label for="filtercheck">Зерновые</label></li>
                        <li><input value="Картофель" name="filtercheck" type="checkbox"><label for="filtercheck">Картофель</label></li>
                        <li><input value="Кукуруза" name="filtercheck" type="checkbox"><label for="filtercheck">Кукуруза</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Лён</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Овес</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Огурцы</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Подсолнечник</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Пшеница озимая</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Пшеница яровая</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Рапс</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Рожь озимая</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Сахарная свёкла</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Соя</label></li>
                        <li><input value="Томаты" name="filtercheck" type="checkbox"><label for="filtercheck">Томаты</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Ячмень озимый</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Ячмень яровой</label></li>
                    </ul>
                </div>
                <button class="filters_title">Вредный объект</button>
                <button class="filters_title bottom">Производитель</button>
                <div class="filter_item hide">
                    <ul>
                        <li> <input name="filtercheck" type="checkbox"><label for="filtercheck">Агрохимические технологии</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">ФМРус</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Альфа химгрупп</label> </li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">Sumiagro</label></li>
                        <li><input name="filtercheck" type="checkbox"><label for="filtercheck">РЭТ</label></li>
                    </ul>
                </div>
                <a href="#" onclick="getValue(); return false" class="filters_agree">Применить</a>
                <button class="filters_disagree">Сбросить фильтры</button>
            </div>

            <script>
    function addParam(v) {
        window.location.search += '&' + v;
    }
</script>