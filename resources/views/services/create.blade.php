@extends('layouts.template2')
@section('content')
<style>
  #form {
    background-color: #2e4ead;
    padding: 70px 40px;
    border-radius: 15px;
    color: white;
    font-weight: 500;
  }

  .form-group {
    padding: 10px 10px;
  }

  #datepicker, #vehicle_name, #service_type, #status {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: white;
    color: #333;
    outline: none;
  }

  #datepicker-label {
    display: block;
    margin-top: 10px;
    color: white;
  }

  #button-container {
    display: flex;
    justify-content: center;
  }

  #button {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #FFA500;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #button:hover {
    background-color: #FF7F00;
  }
  .text-danger {
  color: #ff0000; 
}
</style>
<form method="post" action="{{ route('service.store') }}">
  @csrf
  @if(session('success'))
    <div class=" alert-success">
        {{ session('success') }}
    </div>
  @endif
  <div class="container mt-5">
    <div id="form">
      <div class="form-group">
        <label for="vehicle_name">Vehicle Name</label>
        <input type="text" class="form-control" id="vehicle_name" placeholder="Enter Your name here" name="vehicle_name">
        <!-- Display validation error for vehicle_name field -->
        @error('vehicle_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label id="datepicker-label" for="datepicker">Select Date</label>
        <input type="date" class="form-control" id="datepicker" name="selected_date">
        <!-- Display validation error for selected_date field -->
        @error('selected_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="service_type">Service Type</label>
        <select class="form-control" id="service_type" name="service_type">
          <option value="oil change">Oil Change</option>
          <option value="water service">Water service</option>
          <option value="general service">General service</option>
        </select>
        <!-- Display validation error for service_type field -->
        @error('service_type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div id="button-container">
        <button class="custom-button" id="button">Create</button>
      </div>
    </div>
  </div>
</form>
@endsection
