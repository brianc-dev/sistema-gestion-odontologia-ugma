@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none']) !!}>{{ $slot }}</select>
