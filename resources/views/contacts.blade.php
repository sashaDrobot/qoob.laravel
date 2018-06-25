@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
    <div class="container-fluid contacts-container ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="container-header"></h3>
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
                            <li><a href="mailto:qoobstudio@gmail.com">qoobstudio@gmail.com</a></li>
                            <li class="header-contact-inform">Телефон:</li>
                            <li>(068) 009 00 99</li>
                            <li>(066) 009 00 99</li>
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