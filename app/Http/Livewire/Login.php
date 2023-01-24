<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6']
    ];

    public function authenticate()
    {
        // authenticate the user
        $this->validate();
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $authenticated = Auth::attempt($credentials);
        if ($authenticated) {
            request()->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        $this->emit('loginFailed');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
