@extends('layouts.main')

@section('content')
    <div class="container-fluid who-we-container d-flex align-items-end">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="container-header">Кто же мы?</h1>
                </div>
                <div class="col-12 text-left">
                    <p class="text-center">
                        QOOB - коллектив единомышленников, который собрался в уютном офисе нашей компании
                        с одной единой целью – стать лучшими, но не на бумаге, не в рейтингах, а для наших клиентов.
                        У нас большие амбиции, и в то же время - мы профессионалы.
                        Каждый наш клиент - в первую очередь наш друг.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid why-us-container">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="container-header">Почему мы?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon1.png') }}" alt="">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon2.png') }}">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon3.png') }}">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon4.png') }}">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon5.png') }}">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="col-12 why-us-adv-elem">
                        <img src="{{ asset('img/icon6.png') }}">
                        <h4>Best ideas</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid contact-us-container">
        <div class="container">
            <div class="row">
                <div class="col-12 contact-us-group text-center">
                    <h5>Создайте крутой проект</h5>
                    <a href="/feedback" class="qoob-button gradient-button">
                        <span>Создать</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection