<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>決済してみるページ</title>

    </head>
    <form action="{{ asset('payment') }}" method="POST">
         @csrf
         <script
             src="https://checkout.stripe.com/checkout.js" class="stripe-button"
             data-key="{{ env('pk_test_51MPjDAGaDfcAfOwn4k4SOnI5hpd01mDGDtTgmwKujRcui81OiIgRVWXtfFlV7zjKOZ96oDzJUgKJQ8lVVolH2znz00iuhtFaD9') }}"
             data-amount="100"
             data-name="Stripe決済デモ"
             data-label="決済をする"
             data-description="これはデモ決済です"
             data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
             data-locale="auto"
             data-currency="JPY">
         </script>
    </form>
</html>