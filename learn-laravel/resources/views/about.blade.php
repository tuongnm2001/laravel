@for($i=1 ; $i <= 10 ; $i++)
    <h2>Number {{ $i }}</h2>
@endfor

@foreach ($name as $item)
    <h2 style="color: blue">{{ $item }}</h2>
@endforeach