@extends('layouts.main')

@section('title', 'Услуги')

@section('content')
    <div class="container-fluid services-header-container header-container d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="services-header">Наши услуги</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-services-ways">
        <div class="row">
            <div class="col-lg-3 d-flex align-items-center serv-way-wrapper">
                <div class="col-12 back-letter text-center">
                    <h1 class="color-w">W</h1>
                </div>
                <div class="col-12 d-flex serv-way-element align-items-center text-center">
                    <h3>Разработка <br> web-сайтов</h3>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center serv-way-wrapper">
                <div class="col-12 back-letter text-center">
                    <h1 class="color-s">S</h1>
                </div>
                <div class="col-12 d-flex serv-way-element align-items-center text-center">
                    <h3>Seo <br> продвижение</h3>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center serv-way-wrapper">
                <div class="col-12 back-letter text-center">
                    <h1 class="color-b">B</h1>
                </div>
                <div class="col-12 d-flex serv-way-element align-items-center text-center">
                    <h3>Брендинг</h3>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center serv-way-wrapper">
                <div class="col-12 back-letter text-center">
                    <h1 class="color-v">V</h1>
                </div>
                <div class="col-12 d-flex serv-way-element align-items-center text-center">
                    <h3>Создание <br> видео <br> и 3d</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container services-group-container bg-color-w">
        <div class="row services-group-container-header">
            <div class="col-12 text-center">
                <h2>Разработка web-сайтов</h2>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Landing page
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Отличный выбор для продвижения продукта
                    или услуги – призывает пользователя на совершение
                    покупки или перехода на основной сайт. Может быть
                    использован как вспомогательный инструмент для вашего основного сайта
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Интернет-магазин
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Пора бы заняться бизнесом по серьезному?
                    Чтобы Вы не задумали – нужно конкурировать.
                    И именно функциональное и визуальное оформление
                    играет немаловажную роль. Ну и идея, конечно же.
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Корпоративный сайт
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Сделаем Вашу компанию вновь крутой! Давайте
                    обновляться и идти в ногу со временем. Лучшее
                    решение – когда Ваша компания будет иметь
                    флагманский сайт среди конкурентов.
                </p>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 offset-lg-2 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Сайт-визитка
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Лучше всего раскроет вас как личность,
                    профессионала или вашу  небольшую, но гордую компанию.
                    Удобный, непростой и красивый – прямо как Вы.
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        On-Line сервисы
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Задумали создать бизнес в интернете, на полноценном сервисе
                    в сети? Мы только рады присоединиться к крупномасштабному
                    проекту и сделать его лучшим.
                </p>
            </div>
        </div>
    </div>
    <div class="container services-group-container bg-color-s">
        <div class="row services-group-container-header">
            <div class="col-12 text-center">
                <h2>Продвижение сайта</h2>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        SEO оптимизация
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Оптимизируем сайт и выводим в верхние
                    позиции выдачи поиска, тем самым увеличивая
                    посещаемость и, как следствие, продажи
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Контекстная реклама
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Создаем привлекательные
                    рекламные объявления, направленные
                    на вашу целевую аудиторию
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        E-mail маркетинг
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Мы будем создавать и формировать правильные письма рассылки для Вашей базы клиентов
                </p>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 offset-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Целевая реклама в социальных сетях
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Ваши клиенты будут идти к Вам прямиком из социальных сетей
                </p>
            </div>
        </div>
    </div>
    <div class="container services-group-container bg-color-b">
        <div class="row services-group-container-header">
            <div class="col-12 text-center">
                <h2>Брендинг</h2>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Разработка<br/>бренд-бука
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Анализ рынка и конкурентов
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Нейминг, создание логотипа и фирменного стиля
                    </h3>
                </div>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 offset-lg-2 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Исследования предпочтений целевой аудитории
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Построение долгосрочной стратегии продвижения бренда
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container services-group-container video-services bg-color-v">
        <div class="row services-group-container-header">
            <div class="col-12 text-center">
                <h2>Съемка видео<br></h2>
            </div>
        </div>
        <div class="row services-group-row">
            <div class="col-lg-4 offset-lg-2 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Съемка рекламных видео-роликов
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    От идеи и концепции до монтажа и готового продукта.
                    Обращаясь к нам, Вы получаете полный сервис разработки
                    рекламного видео-продукта. Мы предлагаем креативные идеи,
                    благодаря которым Ваша реклама запомнится. А может, и поедет в Канны.
                </p>
            </div>
            <div class="col-lg-4 services-group-elem-wrapper text-center">
                <div class="services-group-elem-header-wrapper">
                    <h3 class="services-group-elem-header">
                        Съемка корпоративных видео
                    </h3>
                </div>

                <p class="services-group-elem-description">
                    Лучше один раз увидеть что-то красивое, чем 100 раз увидеть
                    скучное. Мы расскажем о компании потенциальным клиентам в формате
                    ролика, где покажем Ваши конкурентные преимущества и придумаем
                    столько изюминок, что получится буквально кекс.
                </p>
            </div>
        </div>
    </div>
@endsection