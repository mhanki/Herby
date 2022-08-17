<h1>{{ $heading }}</h1>

@unless(count($plants) == 0)

@foreach ($plants as $plant)
  <h2>
    <a href="/plants/{{$plant['id']}}">
    {{ $plant['common-name'] }}
    </a>
  </h2>
  <p>{{ $plant['latin-name'] }}</p>
  <p>{{ $plant['description'] }}</p>
@endforeach

@else
<p>No plants found</p>
@endunless