<?php get_header(); ?>

<div> Salut</div>
<h1>Город:<span id="region"></span></h1>


<?php 
global $wpdb;
require 'api.php';



$contact_info = $wpdb->get_row(
    $wpdb->prepare(
        "SELECT phone_number, messenger_link, min_price FROM {$wpdb->prefix}cities WHERE city_name = %s", $city2
    )
);


function displayContactInfo($city2, $contact_info) {
    global $wpdb;
    // Получаем контактную информацию для данного города

    $messenger_link=esc_url($contact_info->messenger_link);
    $min_price = $contact_info->min_price;


    // Проверяем, была ли найдена информация для этого города
    if ($contact_info) {
        // Если информация найдена, выводим ее
        echo 'Номер телефона: ' . esc_html($contact_info->phone_number) . '<br>';
        echo 'Ссылка на мессенджер: <a href="' . esc_url($contact_info->messenger_link) . '">Messenger</a>';
    } else {
        // Если информация не найдена, выводим сообщение об ошибке
        echo 'Контактная информация недоступна для данного города.';
    }
}
// Пример использования функции
displayContactInfo($city, $contact_info); // Вызов функции для вывода контактной информации


$messenger_link=esc_url($contact_info->messenger_link);
$min_price = $contact_info->min_price;

?>
<form method="post">
    <label for="square_meters">Площадь потолка (м2):</label>
    <input type="text" id="square_meters" name="square_meters">
    <br>
    <label for="light_points">Количество точек света:</label>
    <input type="text" id="light_points" name="light_points">
    <br>
    <input type="submit" value="Рассчитать">
</form>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['square_meters']) && isset($_POST['light_points'])) {
        // Получаем значения из формы
        $square_meters = $_POST['square_meters'];
        $light_points = $_POST['light_points'];

        // Получаем текущий город
        $current_city = $city2; // Замените на имя текущего города

        // Вызываем функцию для расчета стоимости
        true_false($current_city, $square_meters, $light_points);
    } else {
        echo "Данные не были переданы";
    }
} elseif (isset($_COOKIE['total_price'])) {
    // Если куки с общей стоимостью уже существуют, выводим их значение
    echo "Общая стоимость: {$_COOKIE['total_price']}";
}

function true_false($city2, $square_meters, $light_points) {
    global $wpdb;
    // Получаем цену за квадратный метр и цену за точку освещения для текущего города из базы данных
    $city_info = $wpdb->get_row($wpdb->prepare("SELECT price_per_square_meter, price_per_light_point FROM {$wpdb->prefix}cities WHERE city_name = %s", $city2));

    // Проверяем, были ли получены данные о ценах для текущего города
    if ($city_info !== null) {
        // Если данные получены, приступаем к расчету
        $price_per_square_meter = $city_info->price_per_square_meter;
        $price_per_light_point = $city_info->price_per_light_point;
        $total_price = ($square_meters * $price_per_square_meter) + ($light_points * $price_per_light_point);

        // Выводим результата
        if ($square_meters && $light_points){
        echo "Общая стоимость: $total_price";
        }
    } else {
        // Если данные не найдены, выводим сообщение об ошибке
        echo "Данные о ценах для текущего города не найдены";
    }
}
?>


<section class="main position-relative mt-5 pb-5">
    <div class="container banner_inner   ">
<div class="banner position-relative">
    <div>
    <h1 class="banner_title">
            Бесшовные <span>натяжные потолки</span> по отличным ценам в <?php echo $city2?>е
        </h1>
    </div>
<div class="position-absolute builder">
    <img loading='lazy' width='320' height='516'  class="" src="./assets/telegram-cloud-photo-size-2-5309932995521662351-x 1.png" alt="">
</div>
<div class="banner_info ">
                <h4>Каждый четверг -44% на полотно</h4>
                <p>Сегодня у Вас есть отличная возможность существенно сэкономить. Отчего бы не воспользоваться? :)</p>
                <button>Получить</button>
        </div>
</div>
            <div class="calculator">
                <div class="calc_head">
                        <h3>Рассчитайте Стоимость</h3>
                        <div class="d-flex">

                            <div class="calc_head_input">
                                <label>Площадь <br> потолка  (м2)</label>
                                <br>
                                <input class="rounded-3 mt-2 " type="text">
                            </div>
                            <div class="calc_head_input">
                                <label>кsол-во точек света <br>(светильники,споты) </label>
                                <br>
                                <input class=" rounded-3 mt-2" type="text">
                            </div>
                        </div>
                </div>
                <div class="calc_body mt-4">
                    <div class="price">
                        <p class="fs-4">Со скидкой будет</p>
                        <div class="d-flex align-items-center">
                            <div class="price_text"><?php echo $min_price  ?> </div>
                            <img loading='lazy'  src="./Webp/₽.webp" width="40" alt="">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="fs-4">А без нее было бы: 52 000 </div>
                            <img loading='lazy'  src="/Webp/₽ (1).webp" width="20" alt="">
                        </div>
                        <div class="d-flex align-items-center mt-4 discount rounded-3 justify-content-between ">
                            <div class="discount_lamp">
                                <img loading='lazy'  src="./assets/Снимок экрана 2023-10-30 в 22.08 1.svg" alt="">
                            </div>
                            <div >
                                <h3>-44% на полотно</h3>
                                <p>А еще светильники MR-16 в подарок</p>
                            </div>
                        </div>
                    </div>
                    <form class="form">
                        <input placeholder="Номер телефона" type="text" class="mt-4">
                        <button class="mt-3" >Отправить менеджеру</button>
                        <div class="politic text-center">
                            <p>Отправляя заявку, я соглашаюсь с Политикой обработки персональных данных</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="about mt-5 pt-5 my-5">
        <div class="container">
            <div class="about_title">
                <h4>О НАС</h4>
                <h1>Потолки от профессионалов своего дела </h1>
                <p>Наша команда занимается натяжными потолками вот уже 14 лет. И мы знаем о них почти все. Нас высоко ценят клиенты во всех городах, где мы работаем. А мы, в свою очередь, с гордостью  держим планку</p>
            </div>
            <div class="about_footer d-flex justify-content-around">
                <div class="about_card ">
                    <h1>14</h1>
                    <p>лет на рынке</p>
                </div>
                <div class="about_card">
                    <h1>345 00</h1>
                    <p>работ выполнено</p>
                </div>
                <div class="about_card">
                    
                    <div class="d-flex">
                        <img loading='lazy'   class="mx-3 star" src="./assets/Vector (1).svg" alt="">
                        <h1>4,98</h1>
                    </div>
                    <div>

                        <p>средняя оценка 
                            на сервисах</p>
                            <img loading='lazy'  src="./assets/Yandex_icon 1.svg" alt="">
                            <img loading='lazy'  src="./assets/logo-2gis 1.svg" alt="">
                            <img loading='lazy'  src="./assets/Vector (2).svg" alt="">

                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero  ">
        
        <div class="hero_header position-relative">
            <h5 class="">И мы с гордостью держим высокую планку!</h5>
            <img loading='lazy'  class=" position-absolute hero_img loading='lazy' " src="./assets/Vector (3).svg" alt="">
            <img loading='lazy'  class="hero_builder" src="./assets/telegram-cloud-photo-size-2-5309932995521662352-y 1.png" alt="">
        </div>
        <div class="hero_wrapper">

            <div class="container">
                <div class="hero_content pt-4 mb-5">
                    <div class="hero_content_title">
                        <h4 class="">Типы потолков</h4>
                        <h1>Типы натяжных потолков</h1>
                        <p>Давайте познакомимся с 4 самыми популярными типами потолков. И как они выглядят в разных помещениях.</p>
                    </div>
                    
                </div>
                <div class="hero_tab ">
                    <div class="hero_tab_title">
                        <h1>Парящий потолок с подсветкой</h1>
                        <p class="mt-2">Отлично подходит для гостинной, сочетает в себе такие и такие качества. Может сопровождаться подсветкой по периметру</p>
                    </div>
                    <div class="hero_cards mt-5">
                        <div class="slider">
                            <div class="slides">
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>   <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>   <div class="card position-relative">
                                        <div class="card_like position-absolute">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more slides and cards as needed -->
                            </div>
                          
                        </div>
                        <div class="dots d-flex justify-content-between align-items-center">
                            <div class=" prev"><img loading='lazy'  src="/assets/icons/Стрелка.svg" alt=""></div>
                            <div>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <!-- Add more dots as needed -->
                            <div class=" next"><img loading='lazy'  src="/assets/icons/Стрелка (1).svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts position-relative">
        <img loading='lazy' width="331" height=""  class=" position-absolute contact_builder" src="./assets/telegram-cloud-photo-size-2-5309932995521662353-x 1.png" alt="">
        <div class="container d-flex justify-content-between align-items-center">
            
            <div>
                <h4>Связаться с нами</h4>
                <h1 class="fw-bold">Воплотим любые ваши идеи</h1>
                <p class="">Для своих клиентов мы бесплатно разрабатываем дизайн-макет. <br> На то у нас есть своя дизайн-студия.</p>
                <div class="contacts_data ">
                    <input placeholder="Номер телефона" type="text"><br>

                    <button>Вызвать замерщика <img loading='lazy'  src="./assets/icons/plus.svg" alt=""></button>
                </div>
            </div>
            <div>
                <img loading='lazy'  class="pattern" src="./assets/Элементы паттерна.png" alt="">
            </div>
        </div>
    </section>
    
    <section class="blog">
        <div class="container">
            <div class="blog_title">
                <h5>КАК МЫ РАБОТАЕМ</h5>
                <h1 class="fw-bold">Мы все делаем слаженно</h1>
                <p class="">Мы стараемся, чтобы вы сделали правильный выбор, и работа с нами была <br> комфортной. Поэтому внимательно относимся к каждому этапу:</p>
            </div>
            <div class="blog_tab mt-4">
                <div class="tabs">
                  <div class="tab active mt-5">

                      <div class="tab_head d-flex">
                          <h5>
                              <img loading='lazy' width="50"  src="/Webp/calculator.png" alt="">
                              Расчет
                            </h5>
                            <div>
                                <img class="tab-icons" src="./assets/Иконки таблицы.png" alt="">
                            </div>
                        </div>
                        <div class="tab_body">
                            <p>Консультация и предварительный расчет. Наш вежливый менеджер поможет вам определиться с выбором потолка, профилей и аксессуаров. И произведет расчет стоимости с точностью 95%.</p>
                        </div>
                    </div>
                    <div class="tab  mt-5">

                        <div class="tab_head">
                            <h5>
                                <img loading='lazy' width="50"  src="/Webp/pencil-ruler.png" alt="">
                                Замер
                              </h5>
                              <div>
                                <img class="tab-icons" src="./assets/Иконки таблицы.png" alt="">
                            </div>
                          </div>
                          <div class="tab_body">
                              <p>В удобное время к вам приедет наш замерщик. С образцами профилей и полотен 6 производителей, понятным каталогом узлов на планшете — словом, всем необходимым для выбора натяжного потолка. Он может всё объяснить и во всем помочь.</p>
                          </div>
                      </div>
                      <div class= " tab  mt-5">

                        <div class="tab_head">
                            <h5>
                                <img loading='lazy' width="50"  src="/Webp/hammer.png" alt="">
                                Установка
                              </h5>
                              <div>
                                <img class="tab-icons" src="./assets/Иконки таблицы.png" alt="">
                            </div>
                          </div>
                          <div class="tab_body">
                              <p>Установка потолка в квартире площадью 70 м2 может занимать от 6 часов до 3 дней. Все зависит от сложности проекта. Мы работаем профессионально, чисто и не доставляем хлопот.</p>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="performance position-relative">
        <img loading='lazy' width="303" height=""  class="position-absolute performance_builder" src="./assets/Rectangle 587.png" alt="">
        <div class="container">
            <div class="performance_title">
                <h5>НАШИ ПРЕИМУЩЕСТВА</h5>
                <h1>Работать с нами — одно удовольствие </h1>
                <p>Понимаем, что все молодцы-огурцы. Но есть ряд особенностей,<br> которые способны подтвердить ваш выбор. А именно:</p>
            </div>
            
        <div class="performance_body mt-4">
            <div class="performance_cards   g-4">

                <div class="performance_card ">
                    <img loading='lazy' width="50" height="50" src="./assets/icons/calendar-days.png" alt="">
                    <div class="performance_card_card" >
                        <h5>Выполняем работы в срок</h5>
                        <p>«Сегодня» — это сегодня и никак иначе. 
                            Мы соблюдаем заявленные сроки. Всегда.</p>
                        </div>
                    </div>
                    <div class="performance_card     d-flex">
                        <img loading='lazy'width="50" height="50"   src="./assets/icons/check-circle.png" alt="">
                        <div class="performance_card_card" >
                            <h5>У нас “все включено”</h5>
                            <p>Выезд, замер и консультация — всегда бесплатно. И в удобное для вас время.</p>
                            </div>
                        </div>
                        <div class="performance_card blue d-flex">   
                            <img loading='lazy' width="50" height="50"   src="./assets/icons/noun-hard-hat-32851 1.png" alt="">
                            <div class="performance_card_card" >
                                <h5>Думаем головой</h5>
                                <p>Мы всегда готовы ответить на ваши вопросы. Даже если потолки поставили вам давно, или не мы.</p>
                                </div>
                            </div>

                            <div class="performance_card d-flex">
                                <img loading='lazy'  width="50" height="50"  src="./assets/icons/shield.png" alt="">
                                <div class="performance_card_card" >
                                    <h5>Надежно и безопасно</h5>
                                    <p>Мы работаем официально, с гарантией качества  своих услуг, техникой безопасности и страховкой для клиента.</p>
                                    </div>
                                </div>
                                     <div class="performance_card blue d-flex">
                    <img loading='lazy'  width="50" height="50"  src="./assets/icons/hand.png" alt="">
                    <div class="performance_card_card" >
                        <h5>Работаем руками</h5>
                        <p>Наши сотрудники постоянно обучаются, за их работой ведется постоянный контроль качества.</p>
                        </div>
                    </div>
                    <div class="performance_card blue  d-flex">
                        <img loading='lazy' width="50" height="50"   src="./assets/icons/heart-handshake.png" alt="">
                        <div class="performance_card_card" >
                            <h5>Чувствуем сердцем </h5>
                            <p>Мы ценим отношения с клиента. Наша первая задача — найти решение вашим потребностям.
                            </p>
                            </div>
                        </div>

                </div>
            </div>


            <div class="performance_text position-relative mt-3">и умеем договариться ;)
                <img loading='lazy'  src="./assets/icons/Vector.png" class="position-absolute" alt="">
            </div>
            <img loading='lazy' width="394" height=""  class=" performance_seller" src="./assets/telegram-cloud-photo-size-2-5309932995521662355-y 1.webp" alt="">
            <button class="performance_btn">

                    Договориться с Потолочкиным
            </button>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">

            <div class="portfolio_title">
                <h5>отзывы и портфолио</h5>
                <h1>Вот некоторые из 32 540 наших работ</h1>
                <p>Все представленные выше работы, конечно, тоже наши. А вот тут вы можете посмотреть еще <br> и видео-обзоры с реальными мнениями наших клиентов. </p>
            </div>

            <div class="portfolio_cards ">
                <div class="portfolio_card">
                    <div class=" portfolio-header">
                        <img loading='lazy' class="w-100"  src="./assets/Rectangle 15.png" alt="">
                    </div>
                    <div class="card-body p-3">
                        <div class="portfolio_card_body d-flex justify-content-between align-items-center">
                            <div>

                                <img loading='lazy'  src="./assets/Фото.png" alt=""> 
                                lorem ipsum
                            </div>
                            <img loading='lazy' class="h-100" src="./assets/icons/Звёзды.png"></img loading='lazy' >
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Ut elit sit integer vestibulum. Eget magna mattis </p>
                        <div class="d-flex portfolio_card_text">
                            <p class="fw-medium">Смотреть полностью</p>
                            <img loading='lazy'  src="./assets/logo-2gis 1.svg" alt="">
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
                <div class="portfolio_card">
                    <div class=" portfolio-header">
                        <img loading='lazy' class="w-100"  src="./assets/Rectangle 15.png" alt="">
                    </div>
                    <div class="card-body p-3">
                        <div class="portfolio_card_body d-flex justify-content-between align-items-center">
                            <div>

                                <img loading='lazy'  src="./assets/Фото.png" alt=""> 
                                lorem ipsum
                            </div>
                            <img loading='lazy' class="h-100" src="./assets/icons/Звёзды.png"></img loading='lazy' >
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Ut elit sit integer vestibulum. Eget magna mattis </p>
                        <div class="d-flex portfolio_card_text">
                            <p class="fw-medium">Смотреть полностью</p>
                            <img loading='lazy'  src="./assets/logo-2gis 1.svg" alt="">
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
                <div class="portfolio_card">
                    <div class=" portfolio-header">
                        <img loading='lazy' class="w-100"  src="./assets/Rectangle 15.png" alt="">
                    </div>
                    <div class="card-body p-3">
                        <div class="portfolio_card_body d-flex justify-content-between align-items-center">
                            <div>

                                <img loading='lazy'  src="./assets/Фото.png" alt=""> 
                                lorem ipsum
                            </div>
                            <img loading='lazy' class="h-100" src="./assets/icons/Звёзды.png"></img loading='lazy' >
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur. Ut elit sit integer vestibulum. Eget magna mattis </p>
                        <div class="d-flex portfolio_card_text">
                            <p class="fw-medium">Смотреть полностью</p>
                            <img loading='lazy'  src="./assets/logo-2gis 1.svg" alt="">
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="potolki">
        <div class="container">

            <div class="potolki-header">
                <h5>Сравнение потолков</h5>
                <h1>Почему именно натяжной потолок?</h1>
                <p>Не все потолки одинаково хороши. И сейчас мы вместе с вами узнаем почему. 
                    Для своего помещения вы могли бы выбрать потолок:</p>
                </div>
                <div class="potolki_cards  ">
                    <div class="potolki_card">
                        <div class="h5">Из гипсокартона</div>
                       <div class="potolki_card_head">
                           <img loading='lazy'  class="w-100" src="./assets/Фото (1).webp" alt="">
                           <div class="potolki_card_body">
                               <h5>
                                   НО:
                                </h5>
                                <p>— со временем желтеют 
                                    и загрязняются, появляются щели 
                                    в шовных соединениях</p>
                                    <p>— в случае протечки могут требовать полного демонтажа</p>
                                    <p>— монтаж займет много времени и стоит дорого</p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="potolki_card">
                        <div class="h5">Из штукатурки</div>
                       <div class="potolki_card_head">
                           <img loading='lazy'  class="w-100" src="./assets/Фото (1).webp" alt="">
                           <div class="potolki_card_body">
                               <h5>
                                   НО:
                                </h5>
                                <p>— хорошо выровнять поверхность могут только профессионалы</p>
                                    <p>— придется потратить больше времени, усилий и денег, а результат будет уступать другим способам отделки</p>
                                    <p>— монтаж займет много времени и стоит дорого</p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="potolki_card">
                <div class="h5">Из плитки</div>
               <div class="potolki_card_head">
                   <img loading='lazy'  class="w-100" src="./assets/Фото (1).webp" alt="">
                   <div class="potolki_card_body">
                       <h5>
                           НО:
                        </h5>
                        <p>— через 1-2 года желтеют и теряют свою привлекательность</p>
                            <p>— значительные ограничения дизайнерских решений</p>
                            <p>— нужна специальная подготовка поверхности перед началом работ</p>
                        </div>
                    </div>
                
            </div>
          
        </div>
        </div>
    </section>

    <section class="item">
        <div class="container">
            <div class="item-header">
               <h1>То ли дело натяжной потолок:</h1>
                <p>Целых 6 значимых преимуществ натяжного потолка</p>
            </div>
            <div class="items-cards">
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/sparkle.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/paintbrush.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/wrench.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/layout-grid.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/coins.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="./assets/icons/leaf.png" alt="">
                    <h5> Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="form pb-5 ">
        <div class=" position-relative">
            <img loading='lazy'  class="form-builder position-absolute"  width="467" src="./assets/telegram-cloud-photo-size-2-5309932995521662356-x 1.png" alt="">
            <div  class="position-relative form-text">Поэтому мы любим его всей душой. А она у нас есть ;) <img src="./assets/icons/Vector (1).png" class="position-absolute" alt=""></div>
            <div class="form-item df">
                <div>

                    <div class="form-title">
                        <h5>СВЯЗАТЬСЯ С НАМИ</h5>
                        <h1>Вызвать замерщика на дом бесплатно</h1>
                        <p>Для своих клиентов мы бесплатно разрабатываем дизайн-макет. На то у нас есть своя дизайн-студия.</p>
                    </div>
                    <div class="form-body mt-4">
                        <input placeholder="Номер телефона" type="text">
                        <button class="mt-2">Отправить заявку</button>
                        <p>Отправляя заявку, я соглашаюсь с 
                            Политикой обработки персональных данных.</p>
                    </div>
                </div>
                <div class="pattern">
                    <img  loading='lazy'  width="405" src="./assets/Элементы паттерна (1).png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="container">
            <div class="map-head">
                <h5>КОНТАКТЫ</h5> 
                <div class="map-title">

                    <h1>Мы рядом</h1>
                    <p>Наш замерщик со всем необходимым для выбора и расчета стоимости потолка приедет к вам в любую точку Москвы и до 30 км от нее совершенно бесплатно. Если вы живете дальше, он, конечно, тоже к вам приедет, но за небольшую плату.
                    </p>
                </div>
                    <div class="map-body mt-5">
                        <h5>Прямо сейчас в Москве:</h5>
                        <h5><img class="mx-3" loading='lazy' src="./assets/icons/noun-hard-hat-32851 3.png" alt=""> ️100 специалистов на замере </h5>
                        <h5><img class="mx-3" loading='lazy' src="./assets/icons/truck.png" alt=""> ️15 бригад делают потолки</h5>
                        
                    </div>

                </div>
                
            </div>
            <img loading='lazy' width="100%" src="./assets/Карта.webp" alt="">

            <div class="map_fotter mt-5 d-flex justify-content-evenly">
                <div class="map_footer-title">
                    <h4>Наш адрес:</h4>
                    <h1>г. Москва, ул. Лубянка, д. 7
                        <div class="d-flex align-items-center">
                            +7 888 888 88 88 
                            <div class=" mx-4">
                                <img class="map-icons" src="./assets/Group 1520 (1).png" alt=""> 
                                <img class="map-icons" src="./assets/Group 1521 (1).png" alt="">
                            </div>
                        </div>    
                    </h1>
                        <div class="buttons ">
                            <button>Вызвать Потолочкина</button> <BR></BR>
                            <a href="#">👨‍💼 Связаться с директором</a>
                        </div>
                </div>
                <div>
                    <img class="car-builder" src="/assets/telegram-cloud-photo-size-2-5309932995521662357-y 4.webp" alt="">
                </div>
            </div>
    </section>
    <footer class="footer">
        <div class="container">

            <div class="fotter_items">
                <ul class="fotter-item  list-unstyled">
                    <li><a href="#">Калькулятор</a></li>
                <li><a href="#">Избранное</a></li>
                <li><a href="#">Как мы работаем</a></li>
                <li><a href="#">О команде</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>

            </ul>
            <ul class="fotter-item list-unstyled">
                <li><a href="#">Блог</a></li>
                <li><a href="#">О потолках</a></li>
                <li><a href="#">Дизайн-студия</a></li>
                <li><a href="#">Технологии</a></li>
                <li><a href="#">Свет</a></li>
                
                <li><a href="#">Профиль</a></li>
                <li><a href="#">Гардины</a></li>
                
            </ul>
            <div>
                <div class="icons">
                    <img loading='lazy' src="./assets/Group 1520 (2).png" alt="">
                    <img loading='lazy' src="./assets/Group 1521 (2).png" alt="">
                </div>
            </div>
        </div>
        </div>
    </footer>
        
    <script async src="node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <?php get_footer(); ?>

<script>





let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    slides.forEach(slide => {
        slide.style.display = 'none';
    });
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    slides[slideIndex].style.display = 'flex';
    dots[slideIndex].classList.add('active');
}

function plusSlides(n) {
    slideIndex += n;
    showSlides();
}

function currentSlide(n) {
    slideIndex = n;
    showSlides();
}

document.querySelector('.prev').addEventListener('click', () => {
    plusSlides(-1);
});

document.querySelector('.next').addEventListener('click', () => {
    plusSlides(1);
});

const dots = document.querySelectorAll('.dot');
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentSlide(index);
    });
});
intervalId = setInterval(() => {
    plusSlides(1);
}, 3000); // Интервал в миллисекундах (здесь 3000 мс = 3 секунды)

const tabs = document.querySelectorAll('.tab')
tabs.forEach(tab => {
    tab.addEventListener('click',() =>{
        tab.classList.toggle('active');
        console.log('click');
    })
})
</script>
    </body>
</html>
    


<!-- HTML-код для отображения виджета -->
<div id="amo-crm-widget">
    <!-- Форма для отправки данных в AMO CRM -->
    <form id="amo-crm-form">
        <input type="text" name="name" placeholder="Ваше имя" required>
        <input type="email" name="email" placeholder="Ваш email" required>
        <textarea name="message" placeholder="Ваше сообщение"></textarea>
        <button type="submit">Отправить</button>
    </form>
    <div id="amo-crm-response"></div>
</div>

<!-- JavaScript-код для взаимодействия с формой и отправки данных в AMO CRM -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("amo-crm-form").addEventListener("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            fetch("обработчик_формы.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById("amo-crm-response").innerHTML = data.message;
            })
            .catch(error => {
                console.error("Ошибка:", error);
            });
        });
    });

</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
