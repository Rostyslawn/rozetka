<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин ROZETKA</title>
</head>
<body>
    <div class="ad">
        <a href="/rozetka"><img alt="rozetka" src="imgs/ad.jpg" class="ad-img"></a>
    </div>
    <div class="header block">
        <div class="nav">
            <ul>
                <li class="user-menu">
                    <img class="menu" alt="user menu" src="imgs/user-menu.svg">
                </li>
                <li class="li-logo"><a class="logo"><img src="imgs/logo.svg" class="to-main"></a></li>
                <li>
                    <button class="catalog">
                        <img alt="catalog" src="imgs/catalog.svg">
                        Каталог
                    </button>
                </li>
                <li>
                    <form>
                        <label>
                            <input type="text" name="search" placeholder="Я ищу...">
                        </label>
                        <button class="find">Найти</button>
                    </form>
                </li>
                <li>
                    <ul class="languages">
                        <li><img src="https://xl-static.rozetka.com.ua/assets/icons/flag-ua.svg" class="ua-flag"></li>
                        <li onclick="change_lan(this)" class="ua language"><a>UA</a></li>
                        <li onclick="change_lan(this)" class="ru language"><a>RU</a></li>
                    </ul>
                </li>
                <li><img src="imgs/back-live.svg" class="back_live"></li>
                <li class="profile"><a href="#"><img alt="Profile" src="imgs/profile.svg"></a></li>
                <li class="basket"><a href="#"><img alt="Basket" src="imgs/basket.svg"></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="saidbar">
            <div class="category">
                <ul class="ul">
                    <li><a href="#"><img src="imgs/pc.svg" alt="pc"><p>Ноутбуки и компьютеры</p></a></li>
                    <li><a href="#"><img src="imgs/phone.svg" alt="phone">Смартфоны, ТВ и электроника</a></li>
                    <li><a href="#" class="geympad"><img src="imgs/geympad.svg" alt="geympad">Товары для геймеров</a></li>
                    <li><a href="#"><img src="imgs/Appliances.svg" alt="appliances">Бытовая техника</a></li>
                    <li><a href="#"><img src="imgs/houseproducts.svg" alt="household products">Товары для дома</a></li>
                    <li><a href="#"><img src="imgs/tools.svg" alt="tools">Инструменты и автотовары</a></li>
                    <li><a href="#"><img src="imgs/plumbing.svg" alt="Plumbing and repair">Сантехника и ремонт</a></li>
                    <li><a href="#"><img src="imgs/DachaAndGarden.svg" alt="Dacha and Garden">Дача, сад и огород</a></li>
                    <li><a href="#"><img src="imgs/tennis.svg" alt="tennis">Спорт и увлечения</a></li>
                    <li><a href="#"><img src="imgs/shirt.svg" alt="shirt">Одежда, обувь и украшения</a></li>
                    <li><a href="#"><img src="imgs/BeatyAndHealth.svg" alt="beauty and health">Красота и здоровье</a></li>
                    <li><a href="#"><img src="imgs/childrenproducts.svg" alt="children's products">Детские товары</a></li>
                    <li><a href="#"><img src="imgs/paw.svg" alt="Pet supplies">Зоотовары</a></li>
                    <li><a href="#"><img src="imgs/schoolAndBooks.svg" alt="Office, school, books">Офис, школа, книги</a></li>
                    <li><a href="#"><img src="imgs/Alcohol.svg" alt="Alcohol">Алкогольные напитки и продукты</a></li>
                    <li><a href="#"><img src="imgs/Business.svg" alt="Goods for business and services">Товары для бизнеса и услуги</a></li>
                </ul>
            </div>
            <div class="contacts">
                <h3><a><img src="imgs/question.svg" alt="question"><p>Справочный центр</p></a></h3>
                <h3><a><img src="imgs/callUs.svg" alt="contact us"><p>Связаться с нами</p></a></h3>
                <h3><a><img src="imgs/point.svg" alt="issue point"><p>Точки выдачи Rozetka</p></a></h3>
            </div>
            <div class="auth">
                <h4>Добро пожаловать!</h4>
                <p>Войдите, чтобы получать рекомендации, персональные бонусы и скидки.</p>
                <button>Войдите в личный кабинет</button>
            </div>
            <div class="category-div-2">
                <ul class="app-install">
                        <p class="text">Устанавливайте наши приложения</p>
                        <a href="#">
                            <img loading="lazy" alt="Google Play" src="https://xl-static.rozetka.com.ua/assets/img/design/button-google-play-ru.svg">
                        </a>
                        <a href="#">
                            <img loading="lazy" alt="AppStore" src="https://xl-static.rozetka.com.ua/assets/img/design/button-appstore-ru.svg">
                        </a>
                </ul>
                <p class="text social-networks-text">Мы в социальных сетях</p>
                <ul class="social-networks">
                    <li><img alt="facebook" src="imgs/facebook.jpg"></li>
                    <li><img alt="twitter" src="imgs/twitter.jpg"></li>
                    <li><img alt="youtube" src="imgs/youtube.jpg"></li>
                    <li><img alt="instagram" src="imgs/instagram.jpg"></li>
                    <li><img alt="viber" src="imgs/viber.jpg"></li>
                    <li><img alt="telegram" src="imgs/telegram.jpg"></li>
                </ul>
                <div class="aboutus">
                    <ul class="ul">
                        <ul>
                            <p class="text">Информация о компании</p>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Условия использования сайта</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <ul>
                            <p class="text">Помощь</p>
                            <li><a href="#">Доставка и опалата</a></li>
                            <li><a href="#">Кредит</a></li>
                            <li><a href="#">Гарантия</a></li>
                            <li><a href="#">Возврат товара</a></li>
                            <li><a href="#">Сервисные центры</a></li>
                        </ul>
                        <ul>
                            <p class="text">Сервисы</p>
                            <li><a href="#">Бонусный счет</a></li>
                            <li><a href="#">Rozetka Premium</a></li>
                            <li><a href="#">Подарочные сертификаты</a></li>
                            <li><a href="#">Rozetka Обмен</a></li>
                            <li><a href="#">Туры и отдых</a></li>
                        </ul>
                        <ul>
                            <p class="text">Партнерам</p>
                            <li><a href="#">Продавать на Розетке</a></li>
                            <li><a href="#">Сотрудничество с нами</a></li>
                            <li><a href="#">Франчайзинг</a></li>
                            <li><a href="#">Аренда помещений</a></li>
                        </ul>
                        <p class="cards">
                            <button class="master-card-btn">
                                <img src="https://xl-static.rozetka.com.ua/assets/img/design/mastercard-logo.svg">
                            </button>
                            <button class="visa-card-btn">
                                <img src="https://xl-static.rozetka.com.ua/assets/img/design/visa-logo.svg">
                            </button>
                            <p class="text">
                                ТМ используется на основании лицензии правообладателя Rozetka.
                            </p>
                            <p class="text-2">
                                © Интернет-магазин «Розетка»
                                2001–2022
                            </p>
                        </p>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main block">
            <div class="carousel">
                <div onclick="ch_to_l()" class="btn btn-l"><img src="imgs/banner/left.png"></div>
                <div class="slider-wrapper">
                    <img src="imgs/banner/1.jpg">
                    <img src="imgs/banner/2.jpg">
                    <img src="imgs/banner/3.jpg">
                    <img src="imgs/banner/4.jpg">
                    <img src="imgs/banner/5.jpg">
                </div>
                <div onclick="ch_to_r()" class="btn btn-r"><img src="imgs/banner/right.png"></div>
            </div>
            <div class="content">
                <ul class="products">
                    <h2>Акционные предложения</h2>
                    <ul class="product_class promotion">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Горячие новинки</h2>
                    <ul class="product_class hot_news">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Сейчас пользуется спросом в категории Комиксы</h2>
                    <ul class="product_class comics">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Сейчас пользуется спросом в категории Строительные фены</h2>
                    <ul class="product_class hair_dryers">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Чаще всего добавляют в список желаний</h2>
                    <ul class="product_class wish_list">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <ul class="news">
                        <h2>Новые видео на канале <a href="#">ROZETKA</a></h2>
                        <ul class="videos">
                            <li>
                                <div class="video">
                                    <video></video>
                                    <p class="text"></p>
                                    <p class="date"></p>
                                </div>
                            </li>
                            <li>
                                <div class="video">
                                    <video></video>
                                    <p class="text"></p>
                                    <p class="date"></p>
                                </div>
                            </li>
                            <li>
                                <div class="video">
                                    <video></video>
                                    <p class="text"></p>
                                    <p class="date"></p>
                                </div>
                            </li>
                            <li>
                                <div class="video">
                                    <video></video>
                                    <p class="text"></p>
                                    <p class="date"></p>
                                </div>
                            </li>
                        </ul>
                    </ul>
                    <h2>Самые ожидаемые</h2>
                    <ul class="product_class more_waiting">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Самые обсуждаемые товары</h2>
                    <ul class="product_class most_talked">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                    <h2>Сейчас пользуются спросом</h2>
                    <ul class="product_class now_demand">
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Что-то прикольное</h3>
                            <h4 class="old_price">9999 ₴</h4>
                            <h4 class="new-price price">9998 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Тоже что то прикольное...</h3>
                            <h4 class="price">9910 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Очень нужная вещь</h3>
                            <h4 class="old_price">1233 ₴</h4>
                            <h4 class="new-price price">3322 ₴</h4>
                            <p class="end">Заканчивается</p>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Да.</h3>
                            <h4 class="price">1231231 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Нет</h3>
                            <h4 class="old_price">3123 ₴</h4>
                            <h4 class="new-price price">9999 ₴</h4>
                        </li>
                        <li>
                            <img alt="flag of ukraine" src="imgs/flag_ua.jpg">
                            <h3>Может и не нужное..</h3>
                            <h4 class="old_price">333 ₴</h4>
                            <h4 class="new-price price">3333 ₴</h4>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <script src="carousel.js"></script>
    <script src="script.js"></script>
</body>
</html>