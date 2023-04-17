@props(["arrow" => "true"])

<div {!! $attributes->merge(['class' => 'accordion-title accordion-trigger sticky top-[53px] group flex justify-between items-center px-5 py-0.5 w-full text-left cursor-pointer transition-all duration-700 ease-in-out
group-[.active]:sm:w-[104%] group-[.active]:sm:-mr-[2%] group-[.active]:sm:-ml-[2%] group-[.active]:sticky group-[.active]:shadow-lg group-[.active]:shadow-gray-900/40 group-[.active]:bg-gray-800
     text-lg hover:bg-gray-100 text-gray-900 sm:rounded']) !!} >
    <h2 class="group-[.admin]:text-base">{{ $slot }}</h2>

    @if( filter_var( $arrow, FILTER_VALIDATE_BOOLEAN ) )
        <div class="arrow rotate-90 group-[.active]:-rotate-90 p-2.5 text-[22px] text-center font-bold transition-all duration-300 ease-in-out"> &#x276F; </div>
    @endif
</div>
