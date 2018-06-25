@extends('layouts.main')

@section('title', 'Портфолио')

@section('content')
    <div class="container-fluid portfolio-header-container header-container d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="portfolio-header">Наши работы</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container portfolio-main-container no-bg">
        <div class="row portfolio-element">
            <div class="col-lg-6 order-lg-12 portfolio-preview align-self-center">
                <img class="img-fluid" src="{{ asset('img/prom.png') }}" alt="Prominvest Plastic">
            </div>
            <div class="col-lg-6 order-lg-1 portfolio-element-text text-center align-self-center">
                <h2>Prominvset Plastic</h2>
                <p> Компания PROMINVEST PLASTIC - это научное и производственное объединение.
                    Она является лидером в разработке и производстве безгалогенных (БГ) и поливинилхлоридных (ПВХ)
                    компаундов и ориентированы на разработку наукоемких передовых технологий, которые обеспечивают более безопасное и экологически
                    чистое проживание людей во всем мире.
                </p>
                <div class="text-center">
                    <a href="http://prominvest.com.ua" class="qoob-button gradient-button">
                        <span>перейти</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row portfolio-element">
            <div class="col-lg-6 portfolio-preview align-self-center">
                <img class="img-fluid" src="{{ asset('img/tiers.png') }}" alt="Шины и диски интернет-магазин Харьков">
            </div>
            <div class="col-lg-6 portfolio-element-text text-center align-self-center">
                <h2>Шины и Диски</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                </p>
                <div class="text-center">
                    <a href="http://pitstopmda.com.ua/" class="qoob-button gradient-button">
                        <span>перейти</span>
                    </a>
                </div>
            </div>
        </div>
      {{--  <div class="row portfolio-element">
            <div class="col-lg-6 order-lg-12 portfolio-preview align-self-center">
                <img class="img-fluid" src="" alt="Prominvest Plastic">
            </div>
            <div class="col-lg-6 order-lg-1 portfolio-element-text text-center align-self-center">
                <h2>Prominvset Plastic</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                </p>
                <div class="text-center">
                    <a href="#" class="qoob-button gradient-button">
                        <span>submit</span>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection