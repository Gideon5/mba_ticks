<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;


class Logout extends Component
{
    public function logout(){
        Auth::logout();
        return redirect()->route('/'); // Replace 'home' with the name of your route for the home view
}

    public function render()
    {
        return view('livewire.logout');
    }
}
