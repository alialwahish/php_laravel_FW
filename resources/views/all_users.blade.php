<table>
  <tr>
    <th>First Name -</th> 
    <th>Last Name</th>
  </tr>
@foreach($users as $user)
  <tr>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
  </tr>
@endforeach
</table>

<a href="/">home</a>