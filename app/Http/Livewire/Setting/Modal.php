<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

class Modal extends Component
{
    public $setting = '';
    public $value = '';

    public function render()
    {
        return view('livewire.setting.modal');
    }

    public function mount($setting = ''){
        $this->setting = $setting;
        $this->value = $this->setting->value ?? '';
    }

    public function changeSetting($value = ''){

        $this->value = $value;

    }
}
