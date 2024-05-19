
<!-- <?php get_header(); ?> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet"  href="node_modules/bootstrap/dist/css/bootstrap.min.css"  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>

    
    <!-- main section start -->

    <section class="main position-relative mt-5 pb-5">
    <div class="container banner_inner   ">
    <div class="banner position-relative">
    <div>
    <h1 class="banner_title">
            Бесшовные <span>натяжные потолки</span> по отличным ценам в <span>Нижнем Новгороде</span>
        </h1>
    </div>
    <div class="banner_info position-relative">
        <div class="position-absolute builder">
            <img loading='lazy' width='320' height='516'  class="" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662351-x 1.png" alt="">
        </div>
        <?php

        $my_posts = get_posts( array(
        'numberposts' => -1, // Получить все записи из рубрики
        'category_name' => 'stor_der', // Замените на слаг вашей рубрики
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'any', // Указываем тип записи
        'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ) {
        setup_postdata( $post );
        ?>
                <h4><?php the_title();  ?></h4>
                <p><?php the_content(); ?></p>
                <button>Получить</button>

        <?php
        }

        wp_reset_postdata(); // Сбрасываем данные о посте

        ?>
    </div>
</div>
            <div class="calculator">
                <div class="calc_head">
                        <h3>Рассчитайте Стоимость</h3>
                        <div class="d-flex justify-content-between">
                        <div class="calc_head_input text-nowrap">
                                <label>Площадь <br> пPотолка  (м2)</label>
                                <br>
                                <input class="rounded-3 mt-2 " id="first_number" type="number"  >
                            </div>
                            <div class="calc_head_input">
                                <label>кsол-во точек света <br>(светильники,споты) </label>
                                <br>
                                <input class=" rounded-3 mt-2" id="second_number" type="number" >
                            </div>
                        </div>
                </div>
                <div class="calc_body mt-4">
                    <div class="price">
                        <p class="fs-4" >Со скидкой будет</p>
                        <div class="d-flex align-items-center">
                            <div class="price_text" id="price_text">46900</div>


                            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/Webp/₽.webp" width="40" alt="">
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="fs-4">А без нее было бы: 52 000 </div>
                            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/Webp/₽ (1).webp" width="20" alt="">
                        </div>
                        <div class="d-flex align-items-center mt-4 discount rounded-3 justify-content-between ">
                            <div class="discount_lamp">
                                <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/Снимок экрана 2023-10-30 в 22.08 1.svg" alt="">
                            </div>
                            <div >

                            <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1, // Получить все записи из рубрики
                            'category_name' => 'skidka_glavanaya', // Замените на слаг вашей рубрики
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'any', // Указываем тип записи
                            'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ) {
                            setup_postdata( $post );
                            ?>
                                    <h3><?php the_title();  ?></h3>
                                    <p><?php the_content(); ?></p>

                            <?php
                            }
                            wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>

                                
                            </div>
                        </div>
                    </div>
                    <form class="form-header">
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
    <!-- main section end -->
    <!-- about section start -->
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
                    <h1>34 500</h1>
                    <p>работ выполнено</p>
                </div>
                <div class="about_card d-flex flex-column align-items-center gap-1">
                    <div class="d-flex">
                        <img loading='lazy'   class="mx-3 star" src="<?php echo get_stylesheet_directory_uri();?>/assets/Vector (1).svg" alt="">
                        <h1>4,98</h1>
                    </div>
                        <p>средняя оценка <br />
                            на сервисах</p>
                        <div class="about_services d-flex flex-column align-items-baseline">
                            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/Yandex_icon 1.svg" alt="">
                            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/Vector (2).svg" alt="">
                            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/logo-2gis 1.svg" alt="">
                        </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- about section end -->

    <!-- hero section start -->

    <section class="hero  ">
        
        <div class="hero_header position-relative">
            <h5 class="">И мы с гордостью держим высокую планку!</h5>
            <img loading='lazy'  class=" position-absolute hero_img loading='lazy' " src="<?php echo get_stylesheet_directory_uri();?>/assets/Vector (3).svg" alt="">
            <img loading='lazy'  class="hero_builder" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662352-y 1.png" alt="">
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


                <!-- slides 1 -->
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
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет1</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет1</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет1</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет2</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет3</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                       
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет4</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="slide">
                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="./assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="./assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5>Кабинет5</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nihil, mollitia voluptate</p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Add more slides and cards as needed -->
                            </div>
                          
                        </div>
                        <div class="dots d-flex justify-content-between align-items-center">
                            <div class=" prev"><img loading='lazy' src="./assets/icons/Стрелка.svg" alt=""></div>
                            <div>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <!-- Add more dots as needed -->
                            <div class=" next"><img loading='lazy' src="./assets/icons/Стрелка (1).svg" alt=""></div>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                <!-- <div class="hero_tab ">
                <?php

                $my_posts = get_posts( array(
                'numberposts' => -1, // Получить все записи из рубрики
                'category_name' => 'tipi_natyajnix_potolkov_kolonka_1_zagalovok', // Замените на слаг вашей рубрики
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'any', // Указываем тип записи
                'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ) {
                setup_postdata( $post );
                ?>

                <div class="hero_tab_title">
                <h1><?php the_title();  ?></h1>
                <p class="mt-2"><?php the_content(); ?></p>
                </div>

                <?php
                }

                wp_reset_postdata(); // Сбрасываем данные о посте

                ?>
                    
                    <div class="hero_cards mt-5">
                        <div class="slider">
                            <div class="slides">
                                <div class="slide">
                                <?php

                                    $my_posts = get_posts( array(
                                    'numberposts' => -1, // Получить все записи из рубрики
                                    'category_name' => 'tipi_nat_potpl_kol1_kartochki', // Замените на слаг вашей рубрики
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'any', // Указываем тип записи
                                    'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ) {
                                    setup_postdata( $post );
                                    ?>

                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites ">
                                            <img loading='lazy'   src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                            <h5><?php the_title()?></h5>
                                            <p><?php the_content()?></p>
                                        </div>
                                    </div>

                                    <?php
                                }

                                wp_reset_postdata(); // Сбрасываем данные о посте

                                ?>

                                </div>
                                <!-- Add more slides and cards as needed -->
                            </div>
                        </div>
                        <div class="dots d-flex justify-content-between align-items-center">
                            <div class=" prev"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка.svg" alt=""></div>
                            <div>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <!-- Add more dots as needed -->
                            <div class=" next"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка (1).svg" alt=""></div>
                        </div>
                        <div class="line"></div>
                    </div>
                </div> -->


                <!-- slides 2 -->

                <div class="hero_tab "> 
                <?php

                        $my_posts = get_posts( array(
                        'numberposts' => -1, // Получить все записи из рубрики
                        'category_name' => 'tip_nat_pot_kol2_zag', // Замените на слаг вашей рубрики
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'any', // Указываем тип записи
                        'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                        ) );

                        global $post;

                        foreach( $my_posts as $post ) {
                        setup_postdata( $post );
                        ?>

                    <div class="hero_tab_title">
                        <h1><?php the_title();  ?></h1>
                        <p class="mt-2"><?php the_content(); ?></p>
                    </div>

                        <?php
                        }

                        wp_reset_postdata(); // Сбрасываем данные о посте


                    ?>


                    <div class="hero_cards mt-5">
                        <div class="slider">
                            <div class="slides2">
                                <div class="slide">
                                    <?php

                                    $my_posts = get_posts( array(
                                    'numberposts' => -1, // Получить все записи из рубрики
                                    'category_name' => 'tip_nat_pot_kol2_kart', // Замените на слаг вашей рубрики
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'any', // Указываем тип записи
                                    'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ) {
                                    setup_postdata( $post );
                                    ?>

                                    <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites">
                                            <img loading='lazy'   src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/potoloki.jpg" alt="Slide 1">
                                        <div class="card_body p-2">
                                        <h5><?php the_title()?></h5>
                                        <p><?php the_content()?></p>
                                        </div>
                                    </div>

                                    <?php
                                }

                                wp_reset_postdata(); // Сбрасываем данные о посте


                                ?>
                                </div>
                                <!-- Add more slides and cards as needed -->
                            </div>


                        </div>
                        <div class="dots2 d-flex justify-content-between align-items-center">
                            <div class=" prev2"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка.svg" alt=""></div>
                            <div>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <!-- Add more dots as needed -->
                            <div class=" next2"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка (1).svg" alt=""></div>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>

                <!-- slides 3 -->

                <div class="hero_tab ">
                    <div class="hero_tab_title">
                        <h1>А вот элементы, которые дополнят ваш потолок:</h1>
                    </div>
                    <div class="hero_cards mt-5">
                        <div class="slider">
                            <div class="slides3">
                                <div class="slide">

                                <?php

                                $my_posts = get_posts( array(
                                'numberposts' => -1, // Получить все записи из рубрики
                                'category_name' => 'elements_add', // Замените на слаг вашей рубрики
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'any', // Указываем тип записи
                                'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                                ) );

                                global $post;

                                foreach( $my_posts as $post ) {
                                setup_postdata( $post );
                                ?>
                                <div class="card position-relative">
                                        <div class="card_like position-absolute add-to-favorites ">
                                            <img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Vector (4).svg" alt="">
                                        </div>
                                        <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/composition.png" alt="Slide 1">
                                        <div class="card_body p-2">
                                        <h5><?php the_title()?></h5>
                                        <p><?php the_content()?></p>
                                        </div>
                                    </div>
                                    <?php
                            }
                        wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>
                                    
                                    
                                    
                                </div>
                                <!-- Add more slides and cards as needed -->
                            </div>
                          
                        </div>
                        <div class="dots3 d-flex justify-content-between align-items-center">
                            <div class=" prev3"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка.svg" alt=""></div>
                            <div>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                            <!-- Add more dots as needed -->
                            <div class=" next3"><img loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Стрелка (1).svg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- hero section end -->

    <!-- contacts section start -->

    <section class="contacts position-relative">
        <img loading='lazy' width="331" height=""  class=" position-absolute contact_builder" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662353-x 1.png" alt="">
        <div class="container d-flex justify-content-between align-items-center">
            
            <div class="contacts_main">
                <h4>Связаться с нами</h4>
                <h1 class="fw-bold">Воплотим любые ваши идеи</h1>
                <p class="">Для своих клиентов мы бесплатно разрабатываем дизайн-макет. <br> На то у нас есть своя дизайн-студия.</p>
                <div class="contacts_data ">
                    <input placeholder="Номер телефона" type="text"><br>

                    <button>Вызвать замерщика <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/plus.svg" alt="" class="invisible"></button>
                </div>
            </div>
            <div>
                <img loading='lazy'  class="pattern" src="<?php echo get_stylesheet_directory_uri();?>/assets/Элементы паттерна.png" alt="">
            </div>
        </div>
    </section>
    
    <!-- contacts section end -->

    <!-- blog section start -->
    
    <section class="blog_main">
        <div class="container">
            <div class="blog_main_title">
                <h5>КАК МЫ РАБОТАЕМ</h5>
                <h1 class="fw-bold">Мы все делаем слаженно</h1>
                <p class="">Мы стараемся, чтобы вы сделали правильный выбор, и работа с нами была <br> комфортной. Поэтому внимательно относимся к каждому этапу:</p>
            </div>
            <div class="blog_tab mt-4">
                <div class="tabs">
                  <div class="tab active mt-5">

                      <div class="tab_head d-flex">
                          <h5>
                              <img loading='lazy' width="50"  src="<?php echo get_stylesheet_directory_uri();?>/Webp/calculator.png" alt="">
                              Расчет
                            </h5>
                            <div>
                                <img class="tab-icons" src="<?php echo get_stylesheet_directory_uri();?>/assets/Иконки таблицы.png" alt="">
                            </div>
                        </div>
                        <div class="tab_body">
                            <p>Консультация и предварительный расчет. Наш вежливый менеджер поможет вам определиться с выбором потолка, профилей и аксессуаров. И произведет расчет стоимости с точностью 95%.</p>
                        </div>
                    </div>
                    <div class="tab  mt-5">

                        <div class="tab_head">
                            <h5>
                                <img loading='lazy' width="50"  src="<?php echo get_stylesheet_directory_uri();?>/Webp/pencil-ruler.png" alt="">
                                Замер
                              </h5>
                              <div>
                                <img class="tab-icons" src="<?php echo get_stylesheet_directory_uri();?>/assets/Иконки таблицы.png" alt="">
                            </div>
                          </div>
                          <div class="tab_body">
                              <p>В удобное время к вам приедет наш замерщик. С образцами профилей и полотен 6 производителей, понятным каталогом узлов на планшете — словом, всем необходимым для выбора натяжного потолка. Он может всё объяснить и во всем помочь.</p>
                          </div>
                      </div>
                      <div class= " tab  mt-5">

                        <div class="tab_head">
                            <h5>
                                <img loading='lazy' width="50"  src="<?php echo get_stylesheet_directory_uri();?>/Webp/hammer.png" alt="">
                                Установка
                              </h5>
                              <div>
                                <img class="tab-icons" src="<?php echo get_stylesheet_directory_uri();?>/assets/Иконки таблицы.png" alt="">
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

    <!-- blog section end -->

    <!-- performance section start -->

    <section class="performance position-relative">
        <img loading='lazy' width="303" height=""  class="position-absolute performance_builder" src="<?php echo get_stylesheet_directory_uri();?>/assets/Rectangle 587.png" alt="">
        <div class="container">
            <div class="performance_title">
                <h5>НАШИ ПРЕИМУЩЕСТВА</h5>
                <h1>Работать с нами — одно удовольствие </h1>
                <p>Понимаем, что все молодцы-огурцы. Но есть ряд особенностей,<br> которые способны подтвердить ваш выбор. А именно:</p>
            </div>
            
        <div class="performance_body mt-4">
            <div class="performance_cards   g-4">

                <div class="performance_card ">
                    <img loading='lazy' width="50" height="50" src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/calendar-days.png" alt="">
                    <div class="performance_card_card" >
                        <h5>Выполняем работы в срок</h5>
                        <p>«Сегодня» — это сегодня и никак иначе. 
                            Мы соблюдаем заявленные сроки. Всегда.</p>
                        </div>
                    </div>
                    <div class="performance_card     d-flex">
                        <img loading='lazy'width="50" height="50"   src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/check-circle.png" alt="">
                        <div class="performance_card_card" >
                            <h5>У нас “все включено”</h5>
                            <p>Выезд, замер и консультация — всегда бесплатно. И в удобное для вас время.</p>
                            </div>
                        </div>
                        <div class="performance_card blue d-flex">   
                            <img loading='lazy' width="50" height="50"   src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/noun-hard-hat-32851 1.png" alt="">
                            <div class="performance_card_card" >
                                <h5>Думаем головой</h5>
                                <p>Мы всегда готовы ответить на ваши вопросы. Даже если потолки поставили вам давно, или не мы.</p>
                                </div>
                            </div>

                            <div class="performance_card d-flex">
                                <img loading='lazy'  width="50" height="50"  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/shield.png" alt="">
                                <div class="performance_card_card" >
                                    <h5>Надежно и безопасно</h5>
                                    <p>Мы работаем официально, с гарантией качества  своих услуг, техникой безопасности и страховкой для клиента.</p>
                                    </div>
                                </div>
                                     <div class="performance_card blue d-flex">
                    <img loading='lazy'  width="50" height="50"  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/hand.png" alt="">
                    <div class="performance_card_card" >
                        <h5>Работаем руками</h5>
                        <p>Наши сотрудники постоянно обучаются, за их работой ведется постоянный контроль качества.</p>
                        </div>
                    </div>
                    <div class="performance_card blue  d-flex">
                        <img loading='lazy' width="50" height="50"   src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/heart-handshake.png" alt="">
                        <div class="performance_card_card" >
                            <h5>Чувствуем сердцем </h5>
                            <p>Мы ценим отношения с клиента. Наша первая задача — найти решение вашим потребностям.
                            </p>
                            </div>
                        </div>

                </div>
            </div>
            <div class="performance_text position-relative mt-3">и умеем договариться ;)
                <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Vector.png" class="position-absolute" alt="">
            </div>
            <img loading='lazy' width="394" height=""  class=" performance_seller" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662355-y 1.webp" alt="">
            <button class="performance_btn">
                Договориться с Потолочкиным
            </button>
            <button class="performance_btn d-none">
                Договоримся?
            </button>
        </div>
    </section>

    <!-- performance section end -->

    <!-- portfolio section start -->

    <section class="portfolio">
        <div class="container">

            <div class="portfolio_title">
                <h5>отзывы и портфолио</h5>
                <h1>Вот некоторые из 32 540 наших работ</h1>
                <p>Все представленные выше работы, конечно, тоже наши. А вот тут вы можете посмотреть еще <br> и видео-обзоры с реальными мнениями наших клиентов. </p>
            </div>

            <div class="portfolio_cards ">
            <?php

$my_posts = get_posts( array(
'numberposts' => -1, // Получить все записи из рубрики
'category_name' => 'otziv_i_porfolio', // Замените на слаг вашей рубрики
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'any', // Указываем тип записи
'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ) {
setup_postdata( $post );
?>

<div class="portfolio_card">
    <div class=" portfolio-header">
        <img loading='lazy' class="w-100"  src="<?php echo get_the_post_thumbnail_url();?>"  alt="">
    </div>
    <div class="card-body p-3">
        <div class="portfolio_card_body d-flex justify-content-between align-items-center">
            <div>
                <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/Фото.png" alt=""> 
                <?php the_title() ?>
            </div>
            <img loading='lazy' class="h-100" src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Звёзды.png"></img loading='lazy' >
        </div>
        <p><?php the_content() ?></p>
        <div class="d-flex portfolio_card_text">
            <p class="fw-medium">Смотреть полностью</p>
            <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/logo-2gis 1.svg" alt="">
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>

<?php
}

wp_reset_postdata(); // Сбрасываем данные о посте

?>
                
            </div>
        </div>
    </section>
    <!-- portfolio section end -->

    <!-- potolki section start -->
    <section class="potolki">
        <div class="container">

            <div class="potolki-header">
                <h5>Сравнение потолков</h5>
                <h1>Почему именно натяжной потолок?</h1>
                <p>Не все потолки одинаково хороши. И сейчас мы вместе с вами узнаем почему. 
                    Для своего помещения вы могли бы выбрать потолок:</p>
                </div>
                <div class="potolki_cards  ">
                    <?php

                    $my_posts = get_posts( array(
                    'numberposts' => -1, // Получить все записи из рубрики
                    'category_name' => 'sravnenita_potolkov', // Замените на слаг вашей рубрики
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'any', // Указываем тип записи
                    'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    global $post;
                    
                    foreach( $my_posts as $post ) {
                    setup_postdata( $post );
                    ?>
                    
                    <div class="potolki_card">
                        <div class="h5"><?php the_title()  ?> </div>
                       <div class="potolki_card_head">
                           <img loading='lazy'  class="w-100" src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="">
                           <div class="potolki_card_body">
                               <h5>
                                   НО:
                                </h5>
                                <p><?php the_content() ?></p>
                                </div>
                            </div>
                        
                    </div>
                    
                    <?php
                    }
                    
                    wp_reset_postdata(); // Сбрасываем данные о посте
                    
                    ?>
                    
        </div>
        </div>
    </section>

    <!-- potolki section end -->

    <!-- item section start -->
    <section class="item">
        <div class="container">
            <div class="item-header">
               <h1>То ли дело натяжной потолок:</h1>
                <p>Целых 6 значимых преимуществ натяжного потолка</p>
            </div>
            <div class="items-cards">
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/sparkle.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/paintbrush.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/wrench.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/layout-grid.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/coins.png" alt="">
                    <h5>Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                <div class="itemcard">
                    <img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/leaf.png" alt="">
                    <h5> Эстетично выглядит</h5>
                    <p>Конечно, со временем желтеют все потолки, но натяжной — самый стойкий!</p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- item section end -->

    <!-- form section start -->

    <section class="form pb-5 ">
        <div class=" position-relative">
            <img loading='lazy'  class="form-builder position-absolute"  width="467" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662356-x 1.png" alt="">
            <div  class="position-relative form-text">Поэтому мы любим его всей душой. А она у нас есть ;) <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/Vector (1).png" class="position-absolute" alt=""></div>
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
                    <img  loading='lazy'  width="405" src="<?php echo get_stylesheet_directory_uri();?>/assets/Элементы паттерна (1).png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- form section end -->

    <!-- map section start -->
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
                        <h5><img class="mx-3" loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/noun-hard-hat-32851 3.png" alt=""> ️100 специалистов на замере </h5>
                        <h5><img class="mx-3" loading='lazy' src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/truck.png" alt=""> ️15 бригад делают потолки</h5>
                        
                    </div>

                </div>
                
            </div>
            <div id="map" class="mt-5"></div>

            <div class="map_fotter mt-5 d-flex justify-content-evenly">
                <div class="map_footer-title">
                    <h4>Наш адрес:</h4>
                    <h1>г. Москва, ул. Лубянка, д. 7
                        <div class="d-flex align-items-center">
                            +7 888 888 88 88 
                            <div class=" mx-4">
                                <img class="map-icons" loading="lazy" src="<?php echo get_stylesheet_directory_uri();?>/assets/Group 1520 (1).png" alt=""> 
                                <img class="map-icons" loading="lazy" src="<?php echo get_stylesheet_directory_uri();?>/assets/Group 1521 (1).png" alt="">
                            </div>
                        </div>    
                    </h1>
                        <div class="buttons ">
                            <button>Вызвать Потолочкина</button> <BR></BR>
                            <a href="#">👨‍💼 Связаться с директором</a>
                        </div>
                </div>
                <div>
                    <img class="car-builder" loading="lazy" src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662357-y 4.webp" alt="">
                </div>
            </div>
    </section>

    <!-- map section end -->

  <?php  get_footer()  ?>

    
    <!-- виджеты -->


<div class="widgets">
    <div class="widget js-card">
        <div class="card__content">
            <button class="card__close js-close-button">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
            </button>
            <div class="card__header">
              <img
                class="card__user-image js-animatable widget"
                src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/widgets1.png"
                alt=""
                loading="lazy"
              />
            </div>
      
            <div class="card__bio js-animatable">
                <h2>Мы перезвоним</h2>
                <p>Оставьте телефон и мы свяжемся с вами в ближайшее время</p>
            </div>
      
            <div class="card__images js-animatable">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/telegram-cloud-photo-size-2-5309932995521662357-y 4.webp" loading="lazy" alt="" class="card__image">
            </div>
            <form action="/your-endpoint-url" method="POST" class="form__cart__buttons">
                <input type="text" placeholder="Номер телефона">
                <button>Отправить</button>
                <p>Отправляя заявку, я соглашаюсь с <br/><span>Политикой обработки персональных данных.</span></p>
            </form>
          </div>
    </div>
    <div class="widget js-card">
      <div class="card__content">
        <button class="card__close js-close-button">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
        </button>
        <div class="card__header">
          <img
            class="card__user-image js-animatable widget"
            src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/widgets2.png"
            alt=""
            loading="lazy"
          />
        </div>
  
        <div class="card__bio js-animatable">
            <h2>Вам понравилось</h2>
            <p>Это те самые потолки, которые вы выбрали на сайте. Вы можете отправить их менеджеру на просчет</p>
        </div>
  
        <div class="card__images js-animatable">
            <div class="card__images_2 overflow-auto" id="scrollableDiv">
            <div class="card__images_items" >
            <div class="card__images_item1 d-flex align-items-center gap-3">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
              <p>Потолок вот такой</p>
            </div>
            <div class="card__images_item2"></div>
            <div class="card__images_item1 d-flex align-items-center gap-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
                <p>Потолок вот такой</p>
              </div>
              <div class="card__images_item2"></div>
            </div>
            <div class="scrolls">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/scrollUp.png" loading="lazy" alt="" id="scrollUp">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/scrollDown.png" loading="lazy" alt="" id="scrollDown">
            </div>
            </div>
        </div>

        <form action="/your-endpoint-url" method="POST" class="form__cart__buttons">
            <input type="text" placeholder="Номер телефона">
            <button>Отправить</button>
            <p>Отправляя заявку, я соглашаюсь с <br/><span>Политикой обработки персональных данных.</span></p>
        </form>
      </div>
    </div>
    <div class="widget js-card">
      <div class="card__content">
        <button class="card__close js-close-button">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
        </button>
        <div class="card__header">
          <img
            class="card__user-image js-animatable"
            loading="lazy"
            src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/widgets3.png"
            alt=""
          />
        </div>
        
        <div class="card__bio js-animatable calculator">
    <h2>Калькулятор</h2>
    <div class="card__calculator__main">
        <div class="calc_head_input text-nowrap">
            <label>Площадь <br> потолка (м2)</label>
            <br>
            <input class="rounded-3 mt-2 " id="second_first_number" type="number" value="18">
        </div>
        <div class="calc_head_input">
            <label>кsол-во точек света <br>(светильники,споты) </label>
            <br>
            <input class="rounded-3 mt-2 " id="second_second_number" type="number" value="1">
        </div>
    </div>
    <p>Стоимость со скидкой:</p>
    <h2><span class="price_text" id="second_price_text">46 900</span>₽</h2>
    <p>Без скидки: <span class="price_text2" id="second_price_text2">52 000</span> ₽</p>
    <div class="card__calculator__discount">
        <img src="./assets/calculator_discount.png" loading="lazy" alt="">
        <div class="card__calculator__discount_text">
            <p>-44% на полотно</p>
            <p>Светильники MR-16 в подарок</p>
        </div>
    </div>
</div>

        <!-- если форма верна -->
        
        <div class="card__images js-animatable">
        </div>
        <form action="/your-endpoint-url" method="POST" class="form__cart__buttons">
            <input type="text" placeholder="Номер телефона">
            <button>Отправить</button>
            <p>Отправляя заявку, я соглашаюсь с <br/><span>Политикой обработки персональных данных.</span></p>
        </form>
      </div>
    </div>
    

    <div class="widget2 js-card">
        <div class="card__content">
            <button class="card__close js-close-button">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/close_open.png" loading="lazy" alt="">
            </button>
                <div class="card__bio js-animatable">
                    <h2>Заявка отправлена</h2>
                    <p>Мы отправили данные нашим специалистам. Они свяжутся с вами в ближайшее время.</p>
                </div>
                <div class="card__images js-animatable">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/succeed.png" loading="lazy" alt="" >
                </div>
                <button class="card__images__succeeded">Спасибо</button>
        </div>
    </div>

  </div>


  <!-- конец виджетов -->


<script>

// Ensure the DOM is fully loaded before running any scripts
document.addEventListener('DOMContentLoaded', function() {
    // JSON data
    let jsonData = [
        {
            "id": "1",
            "city_name": "Москва",
            "phone_number": "+7 495 123-45-67",
            "address": "ул. Ленина, 1",
            "sq_meter_price": 1000,
            "light_point_price": 500
        },
        {
            "id": "2",
            "city_name": "Ташкент",
            "phone_number": "+998 71 123-45-67",
            "address": "ул. Амира Темура, 2",
            "sq_meter_price": 900,
            "light_point_price": 450
        }
    ];

    // Default user city
    let userCity = "Ташкент";

    // Change city based on ID
    function changeCity(id) {
        let city = jsonData.find(city => city.id === id);
        if (city) {
            document.querySelector('.header_info p').innerText = city.phone_number;
            document.querySelector('.map_footer-title h1').innerHTML = 'г. ' + city.city_name + ', ' + city.address +
                '<div class="d-flex align-items-center">' +
                city.phone_number +
                '<div class=" mx-4">' +
                '<img class="map-icons" loading="lazy" src="./assets/Group 1520 (1).png" alt="">' +
                '<img class="map-icons" loading="lazy" src="./assets/Group 1521 (1).png" alt="">' +
                '</div></div>';
            document.querySelector('.banner_title span:last-child').innerText = city.city_name;
            document.querySelector('.logo_text').innerText = city.city_name;
            document.querySelector('.selected-city').innerText = city.city_name;
        } else {
            console.log("Выбран другой город.");
        }
    }

    // Change city based on city name
    function changeCityByName(userCity) {
        let city = jsonData.find(city => city.city_name === userCity);
        if (city) {
            changeCity(city.id);
        } else {
            console.log("Выбран другой город.");
        }
    }

    // Fill city select dropdown
    function fillSelect() {
        let cities = jsonData;
        let select = document.querySelector('.logo_text');
        for (let i = 0; i < cities.length; i++) {
            let option = document.createElement('option');
            option.value = cities[i].id;
            option.text = cities[i].city_name;
            select.appendChild(option);
        }
    }

    // Event listeners for city selection dropdown
    let select = document.querySelector('.logo_text');
    select.addEventListener('change', function() {
        changeCity(this.value);
    });

    // Initialize the city dropdown and set default city
    fillSelect();
    changeCityByName(userCity);

    // Update result calculation based on input changes
    function updateResult() {
        var sqMeters = parseFloat(document.getElementById('first_number').value) || 0;
        var lightPoints = parseFloat(document.getElementById('second_number').value) || 0;
        var selectedCityId = document.querySelector('.logo_text').value;
        var cityData = jsonData.find(city => city.id === selectedCityId);
        var sqMeterPrice = parseFloat(cityData.sq_meter_price);
        var lightPointPrice = parseFloat(cityData.light_point_price);
        var result = (sqMeters * sqMeterPrice) + (lightPoints * lightPointPrice);
        document.getElementById('price_text').textContent = result;
    }

    // Update result for the second calculator
    function updateSecondResult() {
        var sqMeters = parseFloat(document.getElementById('second_first_number').value) || 0;
        var lightPoints = parseFloat(document.getElementById('second_second_number').value) || 0;
        var selectedCityId = document.querySelector('.logo_text').value;
        var cityData = jsonData.find(city => city.id === selectedCityId);
        var sqMeterPrice = parseFloat(cityData.sq_meter_price);
        var lightPointPrice = parseFloat(cityData.light_point_price);
        var result = (sqMeters * sqMeterPrice) + (lightPoints * lightPointPrice);
        document.getElementById('second_price_text').textContent = result;
    }

    // Event listeners for input changes
    document.getElementById('first_number').addEventListener('input', updateResult);
    document.getElementById('second_number').addEventListener('input', updateResult);
    document.getElementById('second_first_number').addEventListener('input', updateSecondResult);
    document.getElementById('second_second_number').addEventListener('input', updateSecondResult);
    document.querySelector('.logo_text').addEventListener('change', function() {
        updateResult();
        updateSecondResult();
    });

    // Initialize calculation on page load
    var cityData = jsonData.find(city => city.city_name === userCity);
    if (cityData) {
        document.querySelector('.logo_text').value = cityData.id;
        updateResult();
        updateSecondResult();
    }

    // Slider initialization
    function initializeSlider(slidesClassName, dotsClassName, prevClassName, nextClassName) {
        const slidesContainer = document.querySelector(`.${slidesClassName}`);
        const slides = slidesContainer.querySelectorAll('.slide');
        const dotsContainer = document.querySelector(`.${dotsClassName}`);
        const dots = dotsContainer.querySelectorAll('.dot');
        let startX = 0;
        let endX = 0;

        function updateDots(index) {
            dots.forEach(dot => {
                dot.classList.remove('active');
            });
            dots[index].classList.add('active');
        }

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = 'flex';
                } else {
                    slide.style.display = 'none';
                }
            });
            updateDots(index);
        }

        function nextSlide() {
            let currentIndex = Array.from(slides).findIndex(slide => slide.style.display !== 'none');
            let nextIndex = currentIndex + 1;

            if (nextIndex >= slides.length) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
        }

        function prevSlide() {
            let currentIndex = Array.from(slides).findIndex(slide => slide.style.display !== 'none');
            let prevIndex = currentIndex - 1;

            if (prevIndex < 0) {
                prevIndex = slides.length - 1;
            }
            showSlide(prevIndex);
        }

        document.querySelector(`.${prevClassName}`).addEventListener('click', prevSlide);
        document.querySelector(`.${nextClassName}`).addEventListener('click', nextSlide);

        if (window.innerWidth <= 1000) {
            dotsContainer.addEventListener('click', nextSlide);
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });

        slidesContainer.addEventListener('dragstart', (e) => {
            startX = e.clientX;
        });

        slidesContainer.addEventListener('dragend', (e) => {
            endX = e.clientX;
            if (startX - endX > 100) {
                nextSlide();
            } else if (startX - endX < -100) {
                prevSlide();
            }
        });

        showSlide(0);
    }

    // Initialize sliders
    initializeSlider('slides', 'dots', 'prev', 'next');
    initializeSlider('slides2', 'dots2', 'prev2', 'next2');
    initializeSlider('slides3', 'dots3', 'prev3', 'next3');

    // Add to favorites functionality
    var addToFavoritesButtons = document.querySelectorAll('.add-to-favorites');
    addToFavoritesButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var card = this.closest('.card');
            var likeButtonImage = this.querySelector('img');
            likeButtonImage.src = "./assets/icons/red_heart.png";
            addToFavorites(card);
        });
    });

    function addToFavorites(card) {
        var favoriteProductsContainer = document.querySelector('.card__images_items');
        var newBlock = document.createElement('div');
        newBlock.innerHTML = '<div class="card__images_item1 d-flex align-items-center gap-3"><img src="./assets/icons/close_open.png" loading="lazy" alt=""><p>Потолок вот такой</p></div>';
        var newFavoriteProduct = card.cloneNode(true);
        favoriteProductsContainer.appendChild(newBlock);
        favoriteProductsContainer.appendChild(newFavoriteProduct);
    }
});



    

// modal window


let expandedCard
let initialProperties = []
let finalProperties = []
let cardClip


function getAnimatableElements() {
  if (!expandedCard) return
  return expandedCard.querySelectorAll('.js-animatable')
}

function getCardContent() {
  if (!expandedCard) return
  return expandedCard.querySelector('.card__content')
}

function setup() {
  document.addEventListener('click', (e) => {
    if (expandedCard) return

    if (e.target.matches('.js-card')) {
      expandedCard = e.target
    } else if (e.target.closest('.js-card')) {
      expandedCard = e.target.closest('.js-card')
    }

    if (!expandedCard) return

    const closeButton = expandedCard.querySelector('.js-close-button')
    closeButton.addEventListener('click', collapse)

    expand()
  })
}


function expand() {
  getCardContent().addEventListener('transitionend', onExpandTransitionEnd)

  disablePageScroll()
  collectInitialProperties()

  expandedCard.classList.add('card--expanded')

  collectFinalProperties()

  setInvertedTransformAndOpacity()
  clipCardContent()

  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      expandedCard.classList.add('card--animatable')
      startExpanding()
    })
  })
}


function collectInitialProperties() {
  for (const element of getAnimatableElements()) {
    initialProperties.push({
      rect: element.getBoundingClientRect(),
      opacity: parseFloat(window.getComputedStyle(element).opacity)
    })
  }

  const cardRect = expandedCard.getBoundingClientRect()
  cardClip = {
    top: cardRect.top,
    right: window.innerWidth - cardRect.right,
    bottom: window.innerHeight - cardRect.bottom,
    left: cardRect.left
  }
}

function collectFinalProperties() {
  const elements = getAnimatableElements()
  for (const element of elements) {
    finalProperties.push({
      rect: element.getBoundingClientRect(),
      opacity: parseFloat(window.getComputedStyle(element).opacity)
    })
  }
}

function setInvertedTransformAndOpacity() {
  const elements = getAnimatableElements()
  for (const [i, element] of elements.entries()) {
    element.style.transform = `translate(${
      initialProperties[i].rect.left - finalProperties[i].rect.left
    }px, ${
      initialProperties[i].rect.top - finalProperties[i].rect.top
    }px) scale(${
      initialProperties[i].rect.width / finalProperties[i].rect.width
    })`

    element.style.opacity = `${initialProperties[i].opacity}`
  }
}

function clipCardContent() {
  getCardContent().style.clipPath = `
    inset(${cardClip.top}px ${cardClip.right}px ${cardClip.bottom}px ${cardClip.left}px round 5px)
  `
}

function startExpanding() {
  for (const [i, element] of getAnimatableElements().entries()) {
    element.style.transform = 'translate(0, 0) scale(1)'
    element.style.opacity = `${finalProperties[i].opacity}`
  }

  getCardContent().style.clipPath = 'inset(0)'
}

function onExpandTransitionEnd(e) {
  const cardContent = getCardContent()
  if (e.target !== cardContent) return

  expandedCard.classList.remove('card--animatable')
  cardContent.removeEventListener('transitionend', onExpandTransitionEnd)
  removeStyles()
}

function removeStyles() {
  for (const element of getAnimatableElements()) {
    element.style = null
  }

  getCardContent().style = null
}

function collapse() {
  getCardContent().addEventListener('transitionend', onCollapseTransitionEnd)

  setCollapsingInitialStyles()

  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      expandedCard.classList.add('card--animatable')
      startCollapsing()
    })
  })
  const cardHeader = expandedCard.querySelector('.card__header')
}



function setCollapsingInitialStyles() {
  for (const element of getAnimatableElements()) {
    element.style.transform = `translate(0, 0) scale(1)`
  }

  getCardContent().style.clipPath = 'inset(0)'
}

function startCollapsing() {
  setInvertedTransformAndOpacity()
  clipCardContent()
}

function onCollapseTransitionEnd(e) {
  const cardContent = getCardContent()
  if (e.target !== cardContent) return

  expandedCard.classList.remove('card--animatable')
  expandedCard.classList.remove('card--expanded')

  cardContent.removeEventListener('transitionend', onCollapseTransitionEnd)

  removeStyles()
  enablePageScroll()

  cleanup()
}

function disablePageScroll() {
  document.body.style.overflow = 'hidden'
}

function enablePageScroll() {
  document.body.style.overflow = ''
}


function cleanup() {
  expandedCard = null
  cardClip = null
  initialProperties = []
  finalProperties = []
}

setup()

// scroll

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('scrollUp').addEventListener('click', function() {
        document.getElementById('scrollableDiv').scrollTop -= 100;
    });

    document.getElementById('scrollDown').addEventListener('click', function() {
        document.getElementById('scrollableDiv').scrollTop += 100;
    });
});


// form

let form = document.querySelector('.form__cart__buttons');
let lastWidget = document.querySelector('.widget2');

form.addEventListener('submit', function(event) {
    event.preventDefault(); 
    if (form.checkValidity()) {
        lastWidget.style.display = 'block';
    }
});

// modal article

function showModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = (modal.style.display == "none" ? "flex" : "none");
}
    </script>
    
    </body>
</html>