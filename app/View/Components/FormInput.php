<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $name;
    public $label;
    public $value;
    public $type;

    public function __construct($name, $label = null, $value = null, $type = 'text')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.form-input');
    }
}
