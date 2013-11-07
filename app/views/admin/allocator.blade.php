<div id="content" style="margin-top:50px">
  Allocator
{{ $month }}
<table id="table">
  <thead>
    <th>Name</th>
    <th>Profile</th>
    @foreach ($month as $week)
      @foreach ($week as $day)
      <th>{{ $day->format('d') }}</th>
      @endforeach
    @endforeach


  </thead>
  @foreach ($resources as $r)
  <tr>
    <td>{{ $r->last_name }} {{ $r->first_name }}</td>
    <td>{{ $r->profile }}</td>
      @foreach ($week as $day)
      <td>&nbsp;</td>
      @endforeach

  </tr>
  @endforeach

</div>
