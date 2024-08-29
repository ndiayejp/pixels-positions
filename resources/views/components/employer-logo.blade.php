@props(['employer', 'width' => 90])
@if (!empty($employer->logo))
    <img src="{{ asset('storage/' . $employer->logo) }}" class="rounded-xl" width="{{ $width }}" />
@else
    <img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" class="rounded-xl"
        width="{{ $width }}" />
@endif
