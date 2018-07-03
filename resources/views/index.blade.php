@extends('layouts.main')

@section('title', 'Qoob - web production studio | web-дизайн | web-сайт | разработка | SEO | Харьков')

@section('content')
    <section class='landing container-fluid'>
        <video id="bg-video" class="hidden-video" autoplay="true" loop="true" muted="true" poster="" src="http://qoob-studio.com/video/Ink_in_Water_Background__720p__(MosCatalogue.net).mp4" type="video/mp4"></video>
        <div class="container-fluid video-cont">
            <div class="row main">
                <div class="col-lg-2">
                    <h5>За гранью возможного</h5>
                </div>
            </div>
            <div class="row main-header text-center justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <h2 class="main-header-text">
                        Web
                    </h2>
                    <h2 class="main-header-text">
                        production
                    </h2>
                    <h2 class="main-header-text">
                        studio
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid header-mob ">
        <div class="row ">
            <div class="col-12 header-mob-wrapper d-flex align-items-center">
                <div class="col-12 header-mob-inner d-flex align-items-center justify-content-center flex-column">
                    <h1>Web</h1>
                    <h1>production</h1>
                    <h1>studio</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid services-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">наши услуги</h3>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center">
                            <h3>Разработка <br> web-сайтов</h3>
                            <p>
                                Создание оригинальных сайтов любого уровня
                                и сложности на основе международного опыта,
                                успеха и точных решений наших специалистов
                            </p>
                        </div>
                        <div class="col-lg-12 services-back color-w">
                            <h1>W</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center">
                            <h3>Продвижение <br> сайта</h3>
                            <p>
                                Эффективное продвижение сайта на просторах
                                сети только для Вашей целевой аудитории с
                                высокими показателями конверсии
                            </p>
                        </div>
                        <div class="col-lg-12 services-back color-s">
                            <h1>S</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front text-center branding">
                            <h3>Брендинг</h3>
                            <p>
                                Создание уникального комплекса
                                Бренд-имиджа
                                Вашей компании. Все, от логотипа и фирменного стиля
                                до разработки комплексной стратегии продвижения
                            </p>
                        </div>
                        <div class="col-lg-12 services-back color-b">
                            <h1>B</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-block">
                        <div class="col-lg-12 services-front video-prod text-center">
                            <h3>Видео и <br> 3D-анимации</h3>
                            <p>
                                Съемка рекламных видеороликов и корпоративных
                                фильмов с последующим размещением
                                и продвижением
                            </p>
                        </div>
                        <div class="col-lg-12 services-back color-v">
                            <h1>V</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid advantages-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">Наши прерогативы</h3>
                </div>
            </div>
            <div class="row d-flex advantages-elem justify-content-center">
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/unique_style.png') }}" alt="уникальный стиль, дизайн сайта">
                    <h3 class="text-center">Уникальный стиль</h3>
                    <p>
                        Мы не занимаемся плагиатом – мы создаем инновации.
                        Среди множества однообразных и шаблонных решений -
                        мы создаем новое и  предлагаем только, то в чем уверены
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/qualified.png') }}" alt="квалифицированная команда разработчиков">
                    <h3>Команда супергероев</h3>
                    <p>
                        Да-да, но не те, что в трико. Наши ребята это молодые люди,
                        которые полны знаний и свежих взглядов, амбициозных идей и всегда,
                        слышите всегда, с нестандартными решениями
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/quarant.png') }}" alt="100% гарантия качества">
                    <h3>100% гарантия</h3>
                    <p>
                        Мы не отправляем наших клиентов в одиночное плавание
                        после завершения работы, а обеспечиваем надлежащее сервисное
                        обслуживание на протяжении всего пути вашего проекта
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/high.png') }}" alt="высокие стандарты">
                    <h3>Высокие стандарты</h3>
                    <p>
                        И даже еще выше! Наши дизайнеры прорисовывают все до
                        мельчайших пикселей, а разработчиков не берет снотворное,
                        пока они не довольны своей работой
                    </p>
                </div>
                <div class="col-lg-2 advantages-inner text-center">
                    <img src="{{ asset('img/attentiv.png') }}" alt="низкие цены">
                    <h3>Честные цены</h3>
                    <p>
                        Никаких «от» и «до». Все формируется открыто,
                        а предложения подбираются на основе Ваших пожеланий.
                        Наши цены гибкие, как женская сборная, и классные, как Скала Джонсон
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container portfolio-main-container ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="container-header">портфолио</h3>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="row portfolio-element">
                <div class="col-lg-6 portfolio-preview">
                    <img class="img-fluid" src="{{ asset('img/prom.png') }}" alt="Prominvest plastic">
                    <div class="portfolio-preview-colored-wrapper text-center d-flex flex-column  justify-content-center align-items-center">
                        <h2 class="align-self-center">Prominvest plastic</h2>
                        <hr>
                        <a href="/portfolio" class="qoob-button portfolio-button align-self-center draw">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 portfolio-preview">
                    <img class="img-fluid" src="{{ asset('img/tiers.png') }}" alt="Шины и диски Харьков интернет-магазин">
                    <div class="portfolio-preview-colored-wrapper text-center d-flex flex-column  justify-content-center align-items-center">
                        <h2 class="align-self-center">Шины и диски</h2>
                        <hr>
                        <a href="/portfolio" class="qoob-button portfolio-button align-self-center draw">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid contacts-container ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header">контакты</h3>
                </div>
            </div>
            <div class="row contacts-main-row">
                <div class="col-lg-6">
                    <div class="submit-block text-center">
                        <h1>Давайте положим начало  <br/> прекрасной дружбе</h1>
                        <h5>И создадим крутой проект!</h5>
                        <div class="text-center">
                            <a href="/feedback" class="qoob-button gradient-button">
                                <span>Давайте!</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contacts-inform">
                        <ul>
                            <li class="header-contact-inform">Почта:</li>
                            <li><a href="mailto:info@qoob-studio.com">info@qoob-studio.com</a></li>
                            <li class="header-contact-inform">Телефон:</li>
                            <li><a href="tel:+380953568336">(095) 356 83 36</a></li>
                            <li></li>
                            <li class="header-contact-inform">Адрес:</li>
                            <li>Харьков, Украина</li>
                            <li>ул. Плехановская 126/1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection