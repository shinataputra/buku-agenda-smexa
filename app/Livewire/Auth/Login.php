<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required', message: 'Email tidak boleh kosong')]
    #[Validate('email', message: 'Email tidak valid')]
    public $email;

    #[Validate('required', message: 'Password tidak boleh kosong')]
    public $password;

    public $remember = false;

    #[Title('Login')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return $this->redirectRoute('dashboard', navigate: true);
        }

        $this->showErrorAlert();
        $this->reset(['password']);
    }

    public function showErrorAlert()
    {
        return $this->js("swal.fire({
            title: 'Login gagal',
            text: 'Silahkan periksa email dan password anda',
            icon: 'error',
            timer: 3000,
            showConfirmButton: false
        })");
    }
}
