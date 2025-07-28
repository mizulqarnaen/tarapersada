<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public $name, $label, $value, $rows;

    public function __construct($name, $label = null, $value = null, $rows = 4)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->rows = $rows;
    }

    public function render()
    {
        return view('components.form-textarea');
    }
}
