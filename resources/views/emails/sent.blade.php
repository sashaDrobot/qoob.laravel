@component('mail::message')
    # Ваш заказ в обработке

    Здравствуйте, {{ $name }}!

    Ваш заказ успешно отправлен на обработку! Ожидайте ответ в ближайшее время.

    Спасибо, что заинтересовались в услугах нашей компании!

    С уважением,
    {{ config('app.name') }}!
@endcomponent