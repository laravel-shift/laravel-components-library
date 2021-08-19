<div {{ $attributes->class(config('library.css.form.input.group')) }} >

    @isset($prepend)
        <div class="{{ config('library.css.form.input.prepend') }}">
            <div class="{{ config('library.css.form.input.text') }}">{{ $prepend }}</div>
        </div>
    @endisset

    {{ $slot }}

    @isset($append)
        <div class="{{ config('library.css.form.input.append') }}">
            <div class="{{ config('library.css.form.input.text') }}">{{ $append }}</div>
        </div>
    @endisset

    @if($showErrors && $hasError($name))
        <x-form::error :name="$name" />
    @endif
</div>
