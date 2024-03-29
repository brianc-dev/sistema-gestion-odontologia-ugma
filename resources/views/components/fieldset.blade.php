@props(['disabled' => false])

<fieldset {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none']) !!}>{{ $slot }}</fieldset>
