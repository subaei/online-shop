<x-mail::message>
# Order placed successfully

Thank you for purchasing from our shop. Your order number is: {{ $order->id }}

<x-mail::button :url="$url">
    View Order
</x-mail::button>

Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
