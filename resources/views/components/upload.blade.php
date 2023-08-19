<h4>Innovations List</h4>  
<table class="table" id="upload">
  <thead>
  <tr>
      <th scope="col">Innovation id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Heading </th>
      <th scope="col">Status </th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php
  $uploads = App\Models\Upload::where('user_id','=', Auth::id())->simplePaginate(10); 
  $uploads->withPath('dashboard');
  @endphp
 
  @foreach ($uploads as $upload)
  <tr>      
      <td>{{$upload->innovation_id}} </td>
      <td>{{$upload->phone_innovator}} </td> 
      <td>{{$upload->name_innovator}} </td>     
      <td>{{$upload->heading_innovator}}</td>
      <td><span class="badge text-bg-warning">{{$upload->status}}</span></td>    
      <td>{{$upload->created_at}}</td>
      <td><a href="{{ url('/view') }}/{{$upload->innovation_id}}" class="btn btn-primary"> <i class="fa-solid fa-eye"></i> </a> <a href="{{ url('/print') }}/{{$upload->innovation_id}}" class="btn btn-info" target="_blank" > <i class="fa-solid fa-print"></i> </a> <button class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </button>  </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
  {{ $uploads->links() }}
  </tfoot>
</table>

<script>
  $('button .fa-trash-can').click(function(){
    alert("Do You Want to Delete.");
});
  new DataTable('#upload');
</script>