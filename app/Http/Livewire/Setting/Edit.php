<?php

namespace App\Http\Livewire\Setting;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use TCG\Voyager\Models\Setting;

class Edit extends Component
{

    use AuthorizesRequests;

    public $value = '';
    public $key = '';
    public $setting = null;
    public $default = '';



    public function render()
    {
        return view('livewire.setting.edit');
    }

     public function mount($key = '', $default = ''){
         $this->setting = Setting::where('key','=',$key)->first();
         $this->value = $this->setting->value ?? $default;
         $this->default = $default;
         $this->key = $key;
     }

     public function updatedValue($value){
        if($this->authorize('edit', $this->setting)){
            $this->setting->value = $value;
            $this->setting->save();
         }else{
            $this->value = $this->setting->value;
         }
     }

}
