<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ];

    protected function clearFields() {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function save() 
    {
        $data = $this->validate();
        
        User::create($data);

        $this->clearFields();
        
    }
    
    public function render()
    {
        return view('livewire.user.create');
    }
}
