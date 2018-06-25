@extends('layouts.main')

@section('title', 'Обратная связь')

@section('content')
    <div class="container-fluid" id="modal-window">
        <div class="container d-flex justify-content-center flex-column">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-sm-12 col-xs-12 text-center" id="modal-inner">
                    <div class="close-modal">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="row modal-window-content d-flex justify-content-center flex-column align-items-center text-center">
                        <h3 id="modal-text"></h3>
                        <button id="modal-button">
                            ok
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container feedback-container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="feedback-header">Расскажите нам о своём проекте</h1>
            </div>
        </div>
        <form class="text-center" action="/feedback/send" method="post" id="feedback">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="InputName" placeholder="ВВЕДИТЕ ВАШЕ ИМЯ" name="name" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="tel" placeholder="ВВЕДИТЕ ВАШ НОМЕР" id="InputTel" name="phone" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="ВВЕДИТЕ ВАШ EMAIL" name="email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="Textarea" rows="3" placeholder="ОПИШИТЕ ВАШ ПРОЕКТ" name="text" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="qoob-button gradient-button">
                    <span>Отправить</span>
                </button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/form.js') }}"></script>
@endsection