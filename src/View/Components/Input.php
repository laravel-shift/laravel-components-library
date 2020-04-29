<?php


namespace TomSix\Components\View\Components;

class Input extends Group
{
    /**
     * Specifies the placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * Set the type of the input
     *
     * @var string $type
     */
    public string $type;

    /**
     * Set a Bootstrap prepend to the input
     *
     * @var string|null $prepend
     */
    public ?string $prepend;

    /**
     * Set a Bootstrap append to the input
     *
     * @var string|null $append
     */
    public ?string $append;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param array|string $inputAttributes
     * @param mixed $value
     * @param string $placeholder
     * @param string $type
     * @param string|null $prepend
     * @param string|null $append
     */
    public function __construct(string $name, ?string $label = null, $inputAttributes = [], $value = null, string $placeholder = '', string $type = 'text', ?string $prepend = null, ?string $append = null)
    {
        parent::__construct($name, $label, $inputAttributes, $value);

        $this->placeholder =$placeholder;
        $this->type = $type;
        $this->prepend = $prepend;
        $this->append = $append;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        return view('library::form.input');
    }
}
