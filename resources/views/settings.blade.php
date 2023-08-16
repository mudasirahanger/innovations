@include('components.header')

<div class="container">
    <div class="row">


    <div class="d-flex justify-content-center align-items-center bg-light">
	<div class="card p-3 shadow mb-5" style="width: 800px;">
		<h2 class="text-center p-3 pageh1">Settings</h2>
		<nav>
			<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Universities</button>
				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Departments</button>
				<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Settings</button>
			</div>
		</nav>
		<div class="tab-content p-3 border bg-light" id="nav-tabContent">
			<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				
			<form class="row g-3">
			<div class="col-auto">
				<label for="" class="visually-hidden">Name</label>
				<input type="text" class="form-control" id="" placeholder="University Name">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary mb-3"> <i class="fa-solid fa-plus"></i> </button>
			</div>
			</form>
           
			<table class="table table-striped" id="universities">
              <thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			  </thead>
				<tbody>
					@foreach ($universities as $university)
					<tr>
						<td>{{$university->uni_id}}</td>
						<td>{{$university->name}}</td>
						<td><button class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </button></td>
					</tr>
					@endforeach
				</tbody>

			</table>


			</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

			<form class="row g-3">
			<div class="col-auto">
				<label for="" class="visually-hidden">Name</label>
				<input type="text" class="form-control" id="" placeholder="Department Name">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary mb-3"> <i class="fa-solid fa-plus"></i> </button>
			</div>
			</form>
           
			<table class="table table-striped" id="departments">
              <thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			  </thead>
				<tbody>
					@foreach ($departments as $department)
					<tr>
						<td>{{$department->dept_id}}</td>
						<td>{{$department->name}}</td>
						<td><button class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> </button></td>
					</tr>
					@endforeach
				</tbody>

			</table>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				<p><strong>This is some placeholder content the Contact tab's associated content.</strong>
					Clicking another tab will toggle the visibility of this one for the next.
					The tab JavaScript swaps classes to control the content visibility and styling. You can use it with
					tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
			</div>
		</div>
	</div>
</div>


    </div>


</div>
<script>
  new DataTable('#universities');
  new DataTable('#departments');
  
</script>

@include('components.footer')
