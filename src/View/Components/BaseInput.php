<?php


namespace TomSix\Components\View\Components;


abstract class BaseInput extends FromGroup
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
     * Specifies the required attribute
     *
     * @var string $required
     */
    public string $required;


    /**
     * InputField constructor.
     * @param string $name
     * @param string|null $label
     * @param string|null $placeholder
     * @param string|null $type
     * @param bool $required
     * @param bool $disabled
     * @param bool $readonly
     * @param mixed|null $value
     */
    public function __construct(string $name, ?string $label = null, ?string $placeholder = null, ?string $type = null, bool $required = false, bool $disabled = false, bool $readonly = false, $value = null)
    {
        parent::__construct($name, $label, $disabled, $readonly, $value);

        $this->placeholder = $placeholder ?? '';
        $this->required = $required ? 'required' : '';
        $this->type = $type ?? 'text';
    }
}