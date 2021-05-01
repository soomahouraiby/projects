<?php


namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskComplete extends Notification implements ShouldQueue
{
    use Queueable;

    use Queueable;

    private $order;

    public function __construct (Order $order) {
        // the order class
        $this->order = $order;
    }

    public function via ($notifiable) {
        return [ 'mail', 'broadcast' ];
    }

    public function toMail ($notifiable) {
        $trackingId = $this->order->tracking_id;
        $url = route('order.tracking', ['id' => $trackingId]);
        return (new MailMessage)
            ->subject('Your order is placed')
            ->line('Your order tracking id is: ' . $trackingId)
            ->action('Track order from here', $url)
            ->line('Thank you for using our application!');
    }

    public function toArray ($notifiable) {
        return [
            'id'     => $this->order->id,
            'status' => 'placed',
        ];
    }


}
