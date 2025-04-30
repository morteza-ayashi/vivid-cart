<?php

namespace Modules\Auth\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\User\Models\User;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public readonly User $user)
    {
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        $locale = app()->getLocale();

        return $this->view("auth::mail.{$locale}.welcome", ['user' => $this->user])
            ->subject(__('Welcome to :app', ['app' => config('app.name')]));
    }
}
