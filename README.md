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
