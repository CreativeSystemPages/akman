<footer>
        <div class="transition">
           <div class="footer_link footer">
               <a href="">Каталог</a>
               <a href="">Вредные объекты</a>
               <a href="">Культуры</a>

               <div class="web_link">
                <a href="">
                    <img src="img/whatsapp.png" alt="">
                </a>
               </div>
           </div>
           <div class="footer_contacts footer">
               <p class="title">Контакты</p>
               <a class="adress" href="">office@akman.su</a>
               <a class="footer_phone" href="">+7(347)266-62-40</a>
               <a class="footer_phone" href="">+7 937 355-99-10</a>
               <p class="adress">г. Уфа, ул. Чернышевского, 10а</p>
               <p class="adress">Рабочее время:<br>
                Пн-пт: с 10:00 до 19:00</p>
           </div>
           <div class="privat_policy footer">
               <a class="adress"  href="">Политика конфиденциальности</a>
               <a class="adress"  href="">Уставные документы</a>
               <div class="footer_company">
                   <img src="/img/footer_logo.png" alt="">
               <p class="adress" >ООО “Акман” </p>
            </div>
               <p class="adress" >© 2022 г. все права защищены</p>
           </div>
         
        </div>

        <script>
        const filter = JSON.parse(<?= "'" . json_encode($list) . "'" ?>);
    </script>
    </footer>