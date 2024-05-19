<?php
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
add_theme_support('admin-bar', ['callback' => function() {} ]);

function enqueue_custom_styles() {

        wp_enqueue_style( 'мой-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3', 'all' );
        wp_enqueue_style(
        'bootstrap', // Уникальное имя стиляs
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', // Ссылка на CSS файл Bootstrap
        array(), // Массив зависимостей, если есть
        '5.3.3', // Версия стиля
        'all' // Медиа-запрос для которого применяется стиль
        );
        wp_enqueue_style( 'index-style', get_template_directory_uri() . '/index.css', array(), '1.0' );
        

        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );

}


// Запускаем функцию для добавления стилей в очередь
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );





// Добавление административной страницы
function my_custom_menu_page(){
    add_menu_page(
        'Контактные данные города', // Заголовок страницы
        'Контактные данные', // Название в меню
        'manage_options', // Уровень доступа
        'city_contact_info', // Уникальный идентификатор страницы
        'city_contact_info_page_content', // Функция отображения контента страницы
        'dashicons-location-alt', // Иконка в меню
        6 // Позиция в меню
    );
}

add_action('admin_menu', 'my_custom_menu_page');

// Функция отображения контента страницы
function city_contact_info_page_content(){
    global $wpdb;
    echo '<div class="wrap">';
    echo '<h2>Контактные данные города</h2>';
    echo '<form method="post" action="admin-post.php">';
    echo '<input type="hidden" name="action" value="city_contact_info">';
    echo '<label for="city_name">Название города:</label><br>';
    echo '<input type="text" id="city_name" name="city_name"><br>';
    echo '<label for="phone_number">Номер телефона:</label><br>';
    echo '<input type="text" id="phone_number" name="phone_number"><br>';
    echo '<label for="messenger_link">Ссылка на мессенджер:</label><br>';
    echo '<input type="text" id="messenger_link" name="messenger_link"><br>';
    echo '<label for="min_price">Минимальная цена:</label><br>';
    echo '<input type="text" id="min_price" name="min_price"><br><br>';
    echo '<label for="sq_meter_price">Цена кв. м.:</label><br>';
    echo '<input type="text" id="sq_meter_price" name="sq_meter_price"><br>';
    echo '<label for="light_point_price">Цена точки освещения:</label><br>';
    echo '<input type="text" id="light_point_price" name="light_point_price"><br><br>';
    echo '<input type="submit" name="submit" value="Сохранить">';
    echo '</form>';
    echo '</div>';

    // Выводим данные из таблицы
    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}cities" );
    if ( $results ) {
        echo '<div class="city-contact-info">';
        echo '<h2>Контактные данные города</h2>';
        echo '<ul>';
        foreach ( $results as $result ) {
            echo '<li class="city-info">';
            echo '<p><strong>Город:</strong> ' . $result->city_name . '</p>';
            echo '<p><strong>Номер телефона:</strong> ' . $result->phone_number . '</p>';
            echo '<p><strong>Ссылка на мессенджер:</strong> ' . $result->messenger_link . '</p>';
            echo '<p><strong>Минимальная цена:</strong> ' . $result->min_price . '</p>';
            echo '<p><strong>Цена кв. м.:</strong> ' . $result->sq_meter_price . '</p>';
            echo '<p><strong>Цена точки освещения:</strong> ' . $result->light_point_price . '</p>';
            echo '<p><a href="?action=delete_city&city_id=' . $result->id . '">Удалить</a></p>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';

    } else {
        echo '<p class="no-data">Нет данных.</p>';
    }
}

// Добавление хуков для вызова функции на вашей странице
add_action( 'admin_menu', 'my_custom_menu_page' );
add_action( 'admin_post_city_contact_info', 'save_city_contact_info' );


// Обработка данных формы при отправке
function save_city_contact_info(){
    global $wpdb;
    if(isset($_POST['submit'])){
        $city_name = $_POST['city_name'];
        $phone_number = $_POST['phone_number'];
        $messenger_link = $_POST['messenger_link'];
        $min_price = $_POST['min_price'];
        $sq_meter_price = $_POST['sq_meter_price'];
        $light_point_price = $_POST['light_point_price'];

// Вставляем данные в базу данных
$wpdb->insert(
    $wpdb->prefix . 'cities', // Имя таблицы
    array(
        'city_name' => $city_name,
        'phone_number' => $phone_number,
        'messenger_link' => $messenger_link,
        'min_price' => $min_price,
        'sq_meter_price' => $sq_meter_price,
        'light_point_price' => $light_point_price
    ),
    array(
        '%s', // Форматы данных
        '%s',
        '%s',
        '%d',
        '%d',
        '%d'
    )
);

        echo '<div class="updated"><p>Данные сохранены!</p></div>';
    }
}


// Обработчик удаления данных
function delete_city_data() {
    global $wpdb;

    // Проверяем, есть ли запрос на удаление и получаем ID города для удаления
    if (isset($_GET['action']) && $_GET['action'] === 'delete_city' && isset($_GET['city_id'])) {
        $city_id = intval($_GET['city_id']);

        // Удаляем данные из таблицы
        $wpdb->delete($wpdb->prefix . 'cities', array('id' => $city_id), array('%d'));

        // Перенаправляем пользователя обратно на страницу с контактными данными
        wp_redirect(admin_url('admin.php?page=city_contact_info'));
        exit;
    }
}

add_action('admin_init', 'delete_city_data');






