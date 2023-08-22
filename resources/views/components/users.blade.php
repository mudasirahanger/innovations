<h3>Users</h3>
<table class="mb-5 table table-striped" style="width:100%"  id="users">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php
  $users = App\Models\User::all()->except(Auth::id());
  @endphp
  @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->lname}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->email}}</td>
      <td><a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a> <a class="btn btn-danger" href="{{ url('/remove') }}/{{$user->id}}/users"> <i class="fa-solid fa-trash-can"></i> </a>   </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
  new DataTable('#users');
</script>