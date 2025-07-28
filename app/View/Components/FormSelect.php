<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $name, $label, $options, $selected;

    public function __construct($name, $label = null, $options = [], $selected = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selected = $selected;
    }

    public function render()
    {
        return view('components.form-select');
    }
}
