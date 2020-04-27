<?php

namespace TomSix\Components\View\Components;


class Select extends FromGroup
{
    /**
     * A list with the value and text of the select options
     *
     * @var iterable $options
     */
	public iterable $options;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param iterable $options
     * @param string|null $label
     * @param bool $disabled
     * @param bool $readonly
     * @param string|int|null $value
     */
	public function __construct(string $name, iterable $options, ?string $label = null, bool $disabled = false, bool $readonly = false, $value = null)
    {
        parent::__construct($name, $label, $disabled, $readonly, $value);

        $this->options = $options;
    }

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\View\View|string
	 */
	public function render()
	{
		return view('library::form.select');
	}

    /**
     * Determine if the given option is the current selected option.
     *
     * @param  string|int  $option
     * @return string
     */
    public function isSelected($option): string
    {
        return $option == old($this->name, $this->value) ? 'selected' : '';
    }
}
