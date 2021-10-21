@extends('layouts.main')

@section('content')
  @if(Session::has('message'))
    <p class="alert alert-succes">{{ Session::get('message') }}</p>
  @endif

  <a class="btn btn-info mb-3 float-end" href={{ route ('volunteer.create')}}>Add</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Lastname</th>
        <th scope="col">Firstname</th>
        <th scope="col">Age</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Sex</th>
        <th scope="col">Region</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($volunteers as $volunteer)
        <tr>
          <td>{{ $volunteer->last_name }}</td>
          <td>{{ $volunteer->first_name }}</td>
          <td>{{ $volunteer->age }}</td>
          <td>{{ $volunteer->birth_date_formatted }}</td>
          <td>{{ $volunteer->sex->name }}</td>
          <td>{{ $volunteer->region->region_name }}</td>
          <td>
            <a href={{ route ('volunteer.edit', $volunteer->volunteer_id) }} class="btn btn-info">Edit</a> 
            <a href={{ route ('volunteer.delete', $volunteer->volunteer_id) }} class="btn btn-danger mr-2">Delete</a> 
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection