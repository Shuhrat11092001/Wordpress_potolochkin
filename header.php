<?php require 'api.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head()?>
</head>
<body>
    <!-- header start -->
    <header class=" d-flex justify-content-between align-items-center gap-1  ">   
        <div class="logo position-relative"> 
            <img loading='lazy'  class="" src="<?php echo get_stylesheet_directory_uri();?>/Webp/logo.webp" alt="">
            <div class="d-flex gap-1 align-items-center position-absolute logo_dropdown_text">
            <p class="logo_text dropbtn">Нижний Новгород</p>
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/header arrow down.jpg" alt="">
            </div>
            <div class="dropdown">
              <div id="myDropdown" class="dropdown-content">
                <div>
                <p class="logo_text text-white mb-2">Ваш город — <span class="selected-city">Нижний Новгород</span></p>
                <div class="header_dropdown_buttons">
                <p class="change-btn">Выбрать другой</p>
                <p class="confirm-btn">Да, верно</p>
                </div>
                </div>
                <div class="city-list" style="display: none;">
                  <p class="logo_text text-white mb-2">Выберите город</p>
                  <!-- Города будут добавлены сюда динамически -->
                </div>
              </div>
            </div>
        </div>
        <div>
            <button class="header_btn border-0">Мы перезвоним</button>
    </div>
    <div class="mt-2 header_number">
        <div class="header_info">
                <p class="">8 888 888 88 88</p>
                <a  class="icons" href="./blog.html"><img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/Webp/Group 1520.webp" alt=""></a>
                <a class="icons" href=""><img loading='lazy'  src="<?php echo get_stylesheet_directory_uri();?>/Webp/Group 1521.webp" alt=""></a>
        </div>
        <div class="day-off text-end">
            <p  class="">9:00 - 21:00 без выходных</p>
        </div>
    </div>
    </header>
    <!-- header end -->

