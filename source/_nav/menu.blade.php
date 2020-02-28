@php $level = $level ?? 0 @endphp

<ul class="my-0 @if($level != 0) pl-6 @endif">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>
