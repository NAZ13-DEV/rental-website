@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 text-2xl focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
