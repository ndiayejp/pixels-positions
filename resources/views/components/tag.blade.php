@props(['tag','size'=>'base'])

@php
    $classes = "bg-white/10 rounded-xl  hover:bg-white/25 transition-colors duration-300";

    if($size ==="base"){
        $classes .= " px-4 py-1.5 text-md";
    }
    if($size==="small") {
        $classes .= " px-2 py-2 text-2xs";
    }
@endphp

<a href="/tag/{{$tag->name}}" class="{{ $classes }}">{{ $tag->name }}</a>
