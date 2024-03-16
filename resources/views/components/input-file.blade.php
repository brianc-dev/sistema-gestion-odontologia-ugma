@props(['disabled' => false, 'name' => ''])

<input {{$name ? 'name="' . $name . '"' : ''}} type="file" accept="image/png, image/jpeg" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none']) !!}>
