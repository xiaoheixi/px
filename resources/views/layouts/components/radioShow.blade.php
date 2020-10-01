<audio controls>
@foreach ($radioContent as $radio)
  <source src="/{{$radio -> file}}" type="audio/mp3">
  Your browser does not support the audio element.
@endforeach
</audio>