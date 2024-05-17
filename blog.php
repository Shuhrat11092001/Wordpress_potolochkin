    
    
<?php get_header(); ?>


<?php
/* Template name: potolochkin */

?>



    <!-- <link rel="stylesheet"  href="node_modules/bootstrap/dist/css/bootstrap.min.css"  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css"> -->


    <div class="container mt-3 blog-cont">
            <div class="main">

            <h1>Всё о 
                <span>
                    
                    потолках
                </span>
            </h1>
            <p>Описание. Тут мы расскажем вам о том, сем, пятом и, разумеется, десятом.</p>
        </div>
    </div>


    <div class="container ">
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

        <div class="container">
        <section class="blog">
                <div class="blog-title">
                    
                <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1, // Получить все записи из рубрики
                            'category_name' => 'pop_vop__zag', // Замените на слаг вашей рубрики
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'any', // Указываем тип записи
                            'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ) {
                            setup_postdata( $post );
                            ?>
                                
                                    <h5><?php the_title(); ?></h5>

                            <?php
                            }
                            wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>
                   
                    <div >
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev" class="mx-4" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next" alt="">

                    </div>
                </div>
                <div class="slides">
                <div class="blog-cards slide">

                <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1, // Получить все записи из рубрики
                            'category_name' => 'pop_vop_1_karti', // Замените на слаг вашей рубрики
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'any', // Указываем тип записи
                            'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ) {
                            setup_postdata( $post );
                            ?>
                                
                                <div class="blog-card">
                                    <h5><?php the_title(); ?></h5>
                                    <h4><?php the_content(); ?></h4>
                                </div>

                            <?php
                            }
                            wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>
                    
                </div>

                </div>
            </div>




            </section>
        </div> 
 
        <div class="container">
            <section class="blog">
                    <div class="blog-title">

                            
                        <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1, // Получить все записи из рубрики
                            'category_name' => 'pop_vop_kol2_zag', // Замените на слаг вашей рубрики
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'any', // Указываем тип записи
                            'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ) {
                            setup_postdata( $post );
                            ?>
                                <h5><?php the_title(); ?></h5>

                            <?php
                            }
                            wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>

                        <div >
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev2" class="mx-4" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next2" alt="">
    
                        </div>
                    </div>
                    <div class="slides2">
                    <div class="items-cards slide2">

                    <?php
                            $my_posts = get_posts( array(
                            'numberposts' => -1, // Получить все записи из рубрики
                            'category_name' => 'pop_vop_kol2_kartinki', // Замените на слаг вашей рубрики
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'any', // Указываем тип записи
                            'suppress_filters' => true, // Подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ) {
                            setup_postdata( $post );
                            ?>
                                <div class="item-card">
                            <img src="<?php echo get_the_post_thumbnail_url( ); ?>" loading="lazy" alt="">
                            <div class="blog-card_body">
                                <h5><?php the_title(); ?></h5>
                                <h4><?php the_content(); ?></h4>
                            </div>
                            </div>
                            <?php
                            }
                            wp_reset_postdata(); // Сбрасываем данные о посте
                            ?>

                    </div>
                    <div class="items-cards slide2">
                        

                    </div>
                    
                 </div>


                </section>
            </div>

            
            <div class="container">
                    <section class="item-3">
                    <div class="blog-title">
                        <h5>Новости компании</h5>
                        <div >
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev3" class="mx-4" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next3" alt="">
                            
                        </div>
                    </div>
                    <div class="slides3">
                    <div class="items-cards item-2 slide3">
                        
                        
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков1</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков2</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков3</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков4</h4>
                        </div>

                        </div>

                        <div class="items-cards item-2 slide3">
                        
                        
                        
                        
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков5</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков6</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков7</h4>
                        </div>
                        <div class="blog-card">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковkkm8</h4>
                        </div>
                                
                        </div>


                    </div>
                        
                        
                        
                    </section>
                    </div>


                    <div class="container">
                        <section class="design">
                            <div class="blog-title">
                                <h5>Новости компании</h5>
                                <div >
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev4 mx-4" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next4" alt="">
                                    
                                </div>
                            </div>
                            <div class="slides4">
                            <div class="design-items slide4">
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (3).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега1</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div>
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (4).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега2</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div>
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (4).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега3</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                            </div>
                            <div class="design-items slide4">
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (3).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега4</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div>
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (4).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега5</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div>
                                <div class="design-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (4).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега6</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковkkkk</h4>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        </section>
                    </div>

                    <div class="container">
                        <section class="accessories">
                        <div class="blog-title">
                            <h5>Новости компании</h5>
                            <div >
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev5 mx-4" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next5" alt="">
                                
                            </div>
                        </div>
                        <div class="slides5">
                        <div class="hero slide5" style="margin-top: 0px;">
                            <div class="hero-cards">
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега1</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковssss</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега2</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега3</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега4</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                            </div>
                            <div class="hero-itemd">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (6).png" loading="lazy" alt="">
                                <div class="blog-card_body">
                                    <h5>Текст тега5</h5>
                                    <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                </div>
                            </div> 
                        </div>


                        <div class="hero slide5" style="margin-top: 0px;">
                            <div class="hero-cards">
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковssss</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                                <div class="hero-item">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (5).png" loading="lazy" alt="">
                                    <div class="blog-card_body">
                                        <h5>Текст тега</h5>
                                        <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                                    </div>
                                </div> 
                            </div>
                            <div class="hero-itemd">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Фото (6).png" loading="lazy" alt="">
                                <div class="blog-card_body">
                                    <h5>Текст тега</h5>
                                    <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковzzzxx</h4>
                                </div>
                            </div> 
                        </div>

                        </div>
                        </section>
                    </div>
            </div>
            <div class="container">
            <section class="mt-5 colum">
                    <div class="blog-title">
                        <h5>Новости компании</h5>
                        <div >
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка (1).png" loading="lazy" class="prev6 mx-4" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/blog/Стрелка.png" loading="lazy" class="next6" alt="">
                            
                        </div>
                    </div>
                    <div class="slides6">
                    <div class="columns slide6">
                        <div class="column">
                                <h5>Текст тега</h5>
                                <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                        </div>
                        <div class="column">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                        </div>
                        <div class="column">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                        </div>
                    </div>

                    <div class="columns slide6">
                        <div class="column">
                                <h5>Текст тега</h5>
                                <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                        </div>
                        <div class="column">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолков</h4>
                        </div>
                        <div class="column">
                            <h5>Текст тега</h5>
                            <h4>Разнообразить квартиру: плюсы и минусы натяжных потолковjjj</h4>
                        </div>
                    </div>

                    </div>
            </section>
            </div>

            <img class="main_builder" src="<?php echo get_stylesheet_directory_uri();?>/page/telegram-cloud-photo-size-2-5309932995521662356-x 1.png" loading="lazy" alt="">
            <section class="form">
                    <div class="form-wrap  container">
                    <div class="form_title">
                        <h4>Связаться с нами</h4>
                        <h1>Вызвать замерщика  на дом бесплатно</h1>
                        <h5>Для своих клиентов мы бесплатно разрабатываем <br> дизайн-макет. </p>
                        
                        <div class="form-body mt-5">
                            <input type="text" placeholder="Номер телефона">
                            <button>Отправить заявку</button>
                            <p>Отправляя заявку, я соглашаюсь с Политикой обработки персональных данных.</p>
                        </div>
                    </div>
                        <img class="pattern" src="<?php echo get_stylesheet_directory_uri();?>/page/Элементы паттерна.png" loading="lazy" alt="">
                </section>
            </div>

            <!-- footer start -->

            <footer class="footer">
                <div class="container">
               <div class="footer-wrap">
            
                   <div class="footer_logo">
                       <img src="<?php echo get_stylesheet_directory_uri();?>/page/Лого.png" loading="lazy" class="logo" alt="">
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
                        <img src="<?php echo get_stylesheet_directory_uri();?>/page/Group 1520 (1).png" loading="lazy" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/page/Group 1521 (1).png" loading="lazy" alt="">
            
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
            
            <!-- footer end -->

<script>


// slides 1

function rearrangeCards() {
    let blogCards = document.querySelectorAll('.blog-cards');
    blogCards.forEach((blogCardSlide, i) => {
        let blogCardItems = Array.from(blogCardSlide.querySelectorAll('.blog-card'));
        let newSlide;

        blogCardSlide.classList.remove('slide');

        
        blogCardItems.forEach((card, j) => {
            if (j % 2 === 0) {
                newSlide = document.createElement('div');
                newSlide.classList.add('slide');
                blogCardSlide.appendChild(newSlide);
            }
            newSlide.appendChild(card);
        });
    });
}



function restoreCards() {
    let blogCards = document.querySelectorAll('.blog-cards');
    blogCards.forEach((blogCardSlide, i) => {
        let slides = Array.from(blogCardSlide.querySelectorAll('.slide'));
        slides.forEach((slide) => {
            let cards = Array.from(slide.querySelectorAll('.blog-card'));
            cards.forEach((card) => {
                blogCardSlide.appendChild(card);
            });
            slide.remove();
        });

        blogCardSlide.classList.add('slide');
    });
}

let mql = window.matchMedia('(max-width: 768px)');
mql.addListener(handleWidthChange);
handleWidthChange(mql);

function handleWidthChange(mql) {
    if (mql.matches) {
        rearrangeCards();
    } else {
        restoreCards();
    }
}


// slides 2

function rearrangeCards2() {
    let slides2 = document.querySelector('.slides2');
    let itemCards = Array.from(slides2.querySelectorAll('.item-card'));
    let itemsCards = document.createElement('div');
    itemsCards.className = 'items-cards';

    
    itemCards.forEach((itemCard) => {
        itemCard.classList.remove('slide2');
    });

    
    for (var i = 0; i < 6; i++) {
        var itemCard = itemCards[i].cloneNode(true);
        itemCard.className += ' slide2';
        itemsCards.appendChild(itemCard);
    }

    while (slides2.firstChild) {
        slides2.removeChild(slides2.firstChild);
    }

    slides2.appendChild(itemsCards);
}


let mql2 = window.matchMedia('(max-width: 768px)');
mql2.addListener(handleWidthChange2);
handleWidthChange2(mql2);

function handleWidthChange2(mql2) {
    if (mql2.matches) {
        rearrangeCards2();
    }
}



// slides 3


function rearrangeCards3() {
    let slides3 = document.querySelector('.slides3');
    let itemCards = Array.from(slides3.querySelectorAll('.blog-card'));
    let itemsCards = document.createElement('div');
    itemsCards.className = 'items-cards';

    
    itemCards.forEach((itemCard) => {
        itemCard.classList.remove('slide3');
    });

    
    for (var i = 0; i < 6; i++) {
        var itemCard = itemCards[i].cloneNode(true);
        itemCard.className += ' slide3';
        itemsCards.appendChild(itemCard);
    }

    while (slides3.firstChild) {
        slides3.removeChild(slides3.firstChild);
    }

    slides3.appendChild(itemsCards);
}


let mql3 = window.matchMedia('(max-width: 768px)');
mql3.addListener(handleWidthChange3);
handleWidthChange3(mql3);

function handleWidthChange3(mql3) {
    if (mql3.matches) {
        rearrangeCards3();
    }
} 





//slides 4


function rearrangeCards4() {
    let slides4 = document.querySelector('.slides4');
    let itemCards = Array.from(slides4.querySelectorAll('.design-item'));
    let itemsCards = document.createElement('div');
    itemsCards.className = 'design-items';

    
    itemCards.forEach((itemCard) => {
        itemCard.classList.remove('slide4');
    });

    
    for (var i = 0; i < 6; i++) {
        var itemCard = itemCards[i].cloneNode(true);
        itemCard.className += ' slide4';
        itemsCards.appendChild(itemCard);
    }

    while (slides4.firstChild) {
        slides4.removeChild(slides4.firstChild);
    }

    slides4.appendChild(itemsCards);
}


let mql4 = window.matchMedia('(max-width: 768px)');
mql4.addListener(handleWidthChange4);
handleWidthChange4(mql4);

function handleWidthChange4(mql4) {
    if (mql4.matches) {
        rearrangeCards4();
    }
} 





// slides 5


function rearrangeCards5() {
    let slides5 = document.querySelector('.slides5');
    let itemCards = Array.from(slides5.querySelectorAll('.hero-item'));
    let itemsCards = document.createElement('div');
    itemsCards.className = 'hero-cards';

    
    itemCards.forEach((itemCard) => {
        itemCard.classList.remove('slide5');
    });

    
    for (var i = 0; i < 5; i++) {
        var itemCard = itemCards[i].cloneNode(true);
        itemCard.className += ' slide5';
        itemsCards.appendChild(itemCard);
    }

    while (slides5.firstChild) {
        slides5.removeChild(slides5.firstChild);
    }

    slides5.appendChild(itemsCards);
}


let mql5 = window.matchMedia('(max-width: 768px)');
mql5.addListener(handleWidthChange5);
handleWidthChange5(mql5);

function handleWidthChange5(mql5) {
    if (mql5.matches) {
        rearrangeCards5();
    }
}


// slides 6



function rearrangeCards6() {
    let slides6 = document.querySelector('.slides6');
    let itemCards = Array.from(slides6.querySelectorAll('.column'));
    let itemsCards = document.createElement('div');
    itemsCards.className = 'columns';

    
    itemCards.forEach((itemCard) => {
        itemCard.classList.remove('slide6');
    });

    
    for (var i = 0; i < 6; i++) {
        var itemCard = itemCards[i].cloneNode(true);
        itemCard.className += ' slide6';
        itemsCards.appendChild(itemCard);
    }

    while (slides6.firstChild) {
        slides6.removeChild(slides6.firstChild);
    }

    slides6.appendChild(itemsCards);
}


let mql6 = window.matchMedia('(max-width: 768px)');
mql6.addListener(handleWidthChange6);
handleWidthChange6(mql6);

function handleWidthChange6(mql6) {
    if (mql6.matches) {
        rearrangeCards6();
    }
} 


// slides function



function initializeSlider(slideClassName, prevClassName, nextClassName, dotClassName, displayStyle) {
    let slideIndex = 0;

    function showSlides() {
    const slides = document.querySelectorAll('.' + slideClassName);
    const dots = document.querySelectorAll('.' + dotClassName);

    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.style.display = displayStyle; 
        } else if (index === slideIndex + 1 && window.innerWidth <= 768) {
            slide.style.display = displayStyle; 
        } else {
            slide.style.display = 'none';
        }
    });

    dots.forEach(dot => {
        dot.classList.remove('active');
    });

    if (dots[slideIndex]) {
        dots[slideIndex].classList.add('active');
    }
}


    function plusSlides(n) {
        slideIndex += n;
        showSlides();
    }

    function currentSlide(n) {
        slideIndex = n;
        showSlides();
    }

    document.querySelector('.' + prevClassName).addEventListener('click', () => {
        plusSlides(-1);
    });

    document.querySelector('.' + nextClassName).addEventListener('click', () => {
        plusSlides(1);
    });

    const dots = document.querySelectorAll('.' + dotClassName);
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide(index);
        });
    });

    const intervalId = setInterval(() => {
        plusSlides(1);
    }, 3000);

    document.addEventListener('DOMContentLoaded', () => {
        showSlides();
    });
    }

    initializeSlider('slide', 'prev', 'next', 'dot', 'grid');
    initializeSlider('slide2', 'prev2', 'next2', 'dot2', 'grid');
    initializeSlider('slide3', 'prev3', 'next3', 'dot3', 'grid');
    initializeSlider('slide4', 'prev4', 'next4', 'dot4', 'flex'); 
    initializeSlider('slide5', 'prev5', 'next5', 'dot5', 'flex'); 
    initializeSlider('slide6', 'prev6', 'next6', 'dot6', 'grid');





    </script>
            
</body>
</html>