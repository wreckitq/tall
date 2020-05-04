<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Verify extends Component
{
    public function resend()
    {
        if (Auth::user()->hasVerifiedEmail()) {
            redirect(RouteServiceProvider::HOME);
        }

        Auth::user()->sendEmailVerificationNotification();

        session()->flash('resent');
    }

    public function render()
    {
        return view('livewire.auth.verify');
    }
}