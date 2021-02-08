<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\View\Component;

class Error extends Component
{
    /**
     * @var string
     */
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('laravel-components-library::form.error');
    }
}
