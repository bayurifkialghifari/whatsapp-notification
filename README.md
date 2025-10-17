# Laravel Unofficial WhatsApp API

A Laravel package to interact with the unofficial WhatsApp API.
Visit the https://fonnte.com/

## Installation

You can install the package via composer:

```bash
composer require bayurifkialghifari/whatsapp-notification
```

## Configuration

You can publish the configuration file using the following command:

```bash
php artisan vendor:publish --provider="Bayurifkialghifari\WhatsApp\FonnteServiceProvider"
```

And you can set your api key in your `.env` file:

```env
FONNTE_API_KEY=your_api_key_here
```

## How to use

You can use the package to send WhatsApp messages as follows:

```php
<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Bayurifkialghifari\WhatsApp\FonnteChannel;

class FonnteNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return [FonnteChannel::class];
    }

    public function toFonnte(object $notifiable): array
    {
        return [
            'to' => '08123123123',
            'message' => 'This is a test message from Fonnte WhatsApp Notification Channel',
        ];
    }
}
`
```
