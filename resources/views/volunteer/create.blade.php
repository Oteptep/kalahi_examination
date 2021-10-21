@extends('layouts.main')

@section('content')
  <form method="POST" action={{ route('volunteer.store') }}>
    @csrf
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Lastname</label>
      <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Firstname</label>
      <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Age</label>
      <input type="number" name="age" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
      <input type="date" name="birth_date" class="form-control" id="exampleFormControlInput1">
    </div>
    <label for="exampleFormControlInput1" class="form-label">Region</label>
    <select class="form-select" aria-label="Default select example" name="region_id">
      @foreach($regions as $region)
        <option value={{ $region->region_id }}>{{ $region->region_name }}</option>
      @endforeach
    </select>
    <label for="exampleFormControlInput1" class="form-label mt-3">Gender</label>
    <select class="form-select" aria-label="Default select example" name="sex_id">
      @foreach($genders as $gender)
        <option value={{ $gender->sex_id }}>{{ $gender->name }}</option>
      @endforeach
    </select>
    <div class="buttons mt-3">
      <button type="submit" class="btn btn-primary btn-block mb-3">Submit</button>
    </div>
  </form>
@endsection