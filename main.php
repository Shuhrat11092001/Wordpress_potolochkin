<?php get_header(); ?>
<?php
/* Template name: Страница-Акции */
?>


    <div class="container mt-5 pb-5">
        <div class="main">

        <h1>Всё о 
            <span>
                
                потолках
            </span>
        </h1>
        <p>Описание. Тут мы расскажем вам о том, сем, пятом и, разумеется, десятом.</p>
    </div>
</div>


<div class="container mt-5 pb-5 ">
    <nav class=" d-flex nav">


    <div>Все</div>
    <div>Световые линии</div>
    <div>Парящий потолок</div>
    <div>Теневой профиль</div>
    <div>Профиль</div>
    <div>Материал полотна</div>
    <div>Многоуровневость</div>
    <div>Сложные формы</div>
    <div>Люстры</div>
    <div>Светильники</div>
    <div>Точки света</div>
    <div>Кухня</div>
    <div>Гостинная</div>
    <div>Профиль</div>
    <div>Акции %</div>
    
</nav>
</div>

    <section class="container main_cards mt-5">
        <div class="main_card-title col rounded-3 p-5">
            <h1>Каждый четверг -44% на полотно</h1>
            <p>Сегодня у Вас есть отличная возможность существенно сэкономить. Отчего бы не воспользоваться? :)</p>
            <button class="main_card-btn">Получить</button>
        </div>
        <div class="d-flex mt-3 gap-4 flex-wrap">

            <div class="main_card-title col rounded-3 p-5">
                <h1>Каждый четверг -44% на полотно</h1>
                <p>Сегодня у Вас есть отличная возможность существенно сэкономить. Отчего бы не воспользоваться? :)</p>
                <button class="main_card-btn">Получить</button>
            </div>
            <div class="main_card-title col rounded-3 p-5">
                <h1>Каждый четверг -44% на полотно</h1>
                <p>Сегодня у Вас есть отличная возможность существенно сэкономить. Отчего бы не воспользоваться? :)</p>
                <button class="main_card-btn">Получить</button>
            </div>
        </div>
    </section>

    <img class="main_builder" src="./page/telegram-cloud-photo-size-2-5309932995521662356-x 1.png" alt="">
    <section class="form">
        <div class="form-wrap container">
          <div class="form_title">
            <h4>Связаться с нами</h4>
            <h1>Вызвать замерщика на дом бесплатно</h1>
            <p>
              Для своих клиентов мы бесплатно разрабатываем <br />
              дизайн-макет.
            </p>
  
            <div class="form-body mt-5">
              <input type="text" placeholder="Номер телефона" />
              <button>Отправить заявку</button>
              <p>
                Отправляя заявку, я соглашаюсь с Политикой обработки персональных
                данных.
              </p>
            </div>
          </div>
          <img class="pattern" src="./page/Элементы паттерна.png" alt="" />
        </div>
      </section>

        <footer class="footer">
            <div class="container">
           <div class="footer-wrap">
        
               <div class="footer_logo">
                   <img src="./page/Лого.png" class="logo" alt="">
                </div>
                
                <ul class="footer-links">
                    <div class="footer_flex one">
                    <li class="footer-link">Калькулятор</li>
                    <li class="footer-link">Избранное   </li>
                    <li class="footer-link">Как мы работаем</li>
                    <li class="footer-link">О команде</li>
                    <li class="footer-link">Отзывы</li>
                    <li class="footer-link">Контакты</li>
                </div>
                <div class="footer_flex">
                    
                    <li class="footer-link">Блог</li>
                    <li class="footer-link">О потолках</li>
                    <li class="footer-link">Дизайн-студия</li>
                    <li class="footer-link">Технологии</li>
                    <li class="footer-link">Свет</li>
                    <li class="footer-link">Профиль</li>
                    <li class="footer-link">Гардины</li>
                </div>
                <div class="footer_flex">
                    <img src="./page/Group 1520 (1).png" loading="lazy" alt="">
                    <img src="./page/Group 1521 (1).png" loading="lazy" alt="">
        
                    <div class="fotter_icons">
                        <p>+7 888 888 88 88</p>
                        <p>г. Москва, ул. Лубянка, д. 7</p>
                    </div>
                </div>
                
                
            </ul>
            <div class="footer_info">
                <div class="footer_info_first">
                    <p>© 2023 Потолочкин.ру ТМ server</p>
                    <p>Является зарегистрированной торговой маркой. Не является публичной офертой. Копирование материалов или элементов сайта - незаконно и преследуется УК РФ</p>
                </div>
                <div class="">Политика конфиденциальности</div>
            </div>
        </div>
        </div>  
        </footer>

<script>
        const form = document.getElementsByClassName('form')
        console.log(form);
        if (window.pageXOffset == 992) {
            form.classList.remove('.container')
        }
</script>
</body>
</html>