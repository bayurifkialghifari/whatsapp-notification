<?php

namespace Bayurifkialghifari\WhatsApp;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class FonnteChannel
{
    protected string $apiKey;

    public function __construct() {
        $this->apiKey = config('fonnte.api_key');
    }

    public function send(mixed $notifiable, Notification $notification) {
        // Get the tokens from the notifiable entity
        $message = $notification->toFonnte($notifiable);

        // Check if to and message are set
        if (Arr::has($message, 'to') && Arr::has($message, 'message')) {
            $response = Http::withHeaders([
                'Authorization' => $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.fonnte.com/send', [
                'target' => $message['to'],
                'message' => $message['message'],
            ]);

            return $response;
        }

        throw new \Exception('The to and message fields are required.');
    }
}
