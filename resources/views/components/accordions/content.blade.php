<div  {!! $attributes->merge(['class' => 'accordion-content relative z-[-1] max-h-0 rounded-b bg-gray-100 overflow-hidden transition-[max-height] duration-700 ease-in-out']) !!} >
    <div class="p-4 md:p-9 overflow-y-auto">
        {{ $slot }}
    </div>
</div>
