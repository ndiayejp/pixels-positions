@php
 $classes = "bg-white/10 w-full p-5 cursor-pointer rounded-xl  border border-transparent hover:border-blue-800 group transition-colors duration-1000";
@endphp
<div {{$attributes(['class'=>$classes])}}>
    {{$slot}}
</div>
