<x-mail::message>
    # Swap Deposit Confirmed

    Hi {{ $deposit->user->name }},

    Your swap plan deposit request of {{ formatAmount($deposit->amount) }} has been confirmed. Login into your account to confirm.


    Thanks,<br>
    {{ site('name') }}
</x-mail::message>
