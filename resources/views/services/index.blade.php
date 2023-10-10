@extends('layouts.template2')
@section('content')
<section>
<style>
  /* Table Styles */
  .table {
    /* Your table styles here */
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .table th,
  .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  .table th {
    background-color: #2e4ead;
    color: #fff;
  }

  /* Pagination Styles */
  .pagination {
    /* Your pagination styles here */
    display: flex;
    justify-content: center;
    list-style-type: none;
    padding: 0;
  }

  .page-item {
    margin: 0 5px;
  }

  .page-link {
    color: #2e4ead;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #2e4ead;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }

  .page-link:hover {
    background-color: #2e4ead;
    color: #fff;
  }

  /* Button Styles */
  .btn-container {
    display: flex;
  }

  .btn-primary,
  .btn-danger {
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
  }

  .btn-primary {
    background-color: #2e4ead;
    margin-right: 5px;
  }

  .btn-primary:hover {
    background-color: #1d357c;
  }

  .btn-danger {
    background-color: #ff0000;
  }

  .btn-danger:hover {
    background-color: #cc0000;
  }
  .alert-success {
    color: #155724; /* Text color for success alerts */
    background-color: #d4edda; /* Background color for success alerts */
    border-color: #c3e6cb; /* Border color for success alerts */
    padding: 15px;
    border: 1px solid transparent;
    border-radius: 4px;
    margin-bottom: 20px;
}
</style>
<div class="container mt-5">
  @if(session('success'))
      <div class="alert-success">
          {{ session('success') }}
      </div>
  @endif
  <table class="table table-striped table-dark" style="transform: translateX(-100%); transition: transform 0.5s ease-in-out;">
    <thead>
      <tr>
        <th scope="col">User Name</th>
        <th scope="col">service_type</th>
        <th scope="col">status</th>
        <th scope="col">service_date</th>
        <th scope="col">vehicle_name</th>
        @hasrole('admin')
          <th scope="col">Actions</th>
        @endhasrole
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr>
        <td>{{$service->user->name}}</td>
        <td>{{$service->service_type}}</td>
        <td>{{$service->status}}</td>
        <td>{{$service->service_date}}</td>
        <td>{{$service->vehicle_name}}</td>
        @hasrole('admin')
          <td>
            <div class="btn-container">
              <a href="{{route('service.edit',['service'=> $service])}}" class="btn btn-primary">Edit</a>
              <form action="{{ route('service.destroy', ['service' => $service]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </td>
        @endhasrole
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$services->links('pagination::bootstrap-5')}}
</div>
<style>
  .custom-margin {
    margin-right: 10px;
  }
</style>
<script>
  window.addEventListener("load", function () {
    const table = document.querySelector(".table");
    table.style.transform = "translateX(0)";
  });
</script>
</section>
@endsection
