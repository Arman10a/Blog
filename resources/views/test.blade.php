{{-- <h1>Hello , {{ $name ?? "John" }} </h1>

@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@switch($i)
    @case(1)
        First case...
        @break
    @case(2)
        Second case...
        @break
    @default
        Default case...
@endswitch --}}

@foreach ($colors as $color)
    <ul>
      <li>{{ $color }}</li>
    </ul>

@endforeach
