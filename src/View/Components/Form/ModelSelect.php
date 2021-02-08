<?php

namespace TomSix\Components\View\Components\Form;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ModelSelect extends Select
{
    /**
     * Create a new component instance.
     *
     * @param string                $name
     * @param Collection|null       $models
     * @param string|null           $label
     * @param array|string          $inputAttributes
     * @param Model|string|int|null $value
     * @param string|null           $prepend
     * @param string|null           $append
     * @param string|null           $keyAttribute
     * @param string|null           $valueAttribute
     */
    public function __construct(string $name, ?Collection $models = null, ?string $label = null, $inputAttributes = [], $value = null, ?string $prepend = null, ?string $append = null, string $keyAttribute = null, string $valueAttribute = null)
    {
        $keyAttribute = $keyAttribute ? $keyAttribute : config('library.model_select.key_attribute');
        $valueAttribute = $valueAttribute ? $valueAttribute : config('library.model_select.value_attribute');

        $options = $models ? $models->pluck($valueAttribute, $keyAttribute) : [];

        if (isset($value) && $value instanceof Model) {
            $value = $value->getAttribute($keyAttribute);
        }

        parent::__construct($name, $options, $label, $inputAttributes, $value, $prepend, $append);
    }
}
