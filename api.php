<?php 
error_reporting(0);

global $city2;
global $wpdb;
global $price_per_sq_meter;
global $price_per_light_point;
global $json_data;

// Ваш API-ключ и IP-адрес пользователя
// URL для запроса к API ipify
$apiUrl = 'https://api.ipify.org?format=json';

// Инициализируем cURL сессию
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// Устанавливаем опции запроса
curl_setopt_array($curl, array(
    CURLOPT_URL => $apiUrl,        // Устанавливаем URL для запроса
    CURLOPT_RETURNTRANSFER => true // Включаем возврат результата запроса в виде строки
));

// Выполняем запрос и сохраняем ответ
$response = curl_exec($curl);
$responseData = json_decode($response, true); // Декодируем JSON-ответ в массив

$api_key = '447101F4AC0051415D4AE0F3AA23778D';
$user_ip =  $responseData['ip'];

// URL-адрес API
$url = "https://www.travelpayouts.com/whereami?locale=ru&ip={$user_ip}";



// Получение ответа от API
$response = file_get_contents($url);


// Парсинг JSON-ответа  
$data = json_decode($response, true);
$city = isset($data['name']) ? $data['name'] : 'Unknown';

$city2 = $city;


global $wpdb;


$contact_info = $wpdb->get_row(
    $wpdb->prepare(
        "SELECT phone_number, messenger_link, min_price, sq_meter_price, light_point_price  FROM {$wpdb->prefix}cities WHERE city_name = %s", $city2
    )
);




$price_per_sq_meter = floatval($contact_info->sq_meter_price);
$price_per_light_point = floatval($contact_info->light_point_price); 



// Симулируем получение цен из базы данных или другого источника данных
// Здесь вы можете подставить свою логику для получения цен для текущего города
// Например, из базы данных или конфигурационного файла

// Цена за квадратный метр


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


}
// Пример использования функции
displayContactInfo($city, $contact_info); // Вызов функции для вывода контактной информации



$messenger_link=esc_url($contact_info->messenger_link);
$min_price = $contact_info->min_price;
$phone_number=$contact_info->phone_number;



function get_data_from_mysql() {
    global $wpdb;

    // Пример запроса к таблице MySQL WordPress
    $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cities");

    return $results;
}



// Получаем данные из базы данных
$data = get_data_from_mysql();

// Кодируем данные в формат JSON
$json_data = json_encode($data);


// Кодируем данные в формат JSON с опцией JSON_UNESCAPED_UNICODE, чтобы сохранить все символы без экранирования
$json_data = json_encode($data, JSON_UNESCAPED_UNICODE);


// Удаляем обратные слеши и символы '\uXXXX' из строки данных JSON
$json_data = str_replace(array('\\', '\\"'), '', $json_data);


?>
