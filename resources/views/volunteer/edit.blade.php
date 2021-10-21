@extends('layouts.main')

@section('content')
  <form method="POST" action={{ route('volunteer.update', $volunteer->volunteer_id) }}>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Lastname</label>
      <input value={{ $volunteer->last_name }} type="text" name="last_name" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Firstname</label>
      <input value={{ $volunteer->first_name }} type="text" name="first_name" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Age</label>
      <input value={{ $volunteer->age }} type="number" name="age" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
      <input value={{ $volunteer->birth_date }} type="date" name="birth_date" class="form-control" id="exampleFormControlInput1">
    </div>
    <label for="exampleFormControlInput1" class="form-label">Region</label>
    <select class="form-select" aria-label="Default select example" name="region_id" value={{ $volunteer->region_id }}>
      @foreach($regions as $region)
        <option value={{ $region->region_id }} {{ $volunteer->region_id  ? 'selected' : ''}}>{{ $region->region_name }}</option>
      @endforeach
    </select>
    <label for="exampleFormControlInput1" class="form-label mt-3">Gender</label>
    <select class="form-select" aria-label="Default select example" name="sex_id" value={{ $volunteer->sex_id }}>
      @foreach($genders as $gender)
        <option value={{ $gender->sex_id }}  {{ $volunteer->sex_id  ? 'selected' : ''}}>{{ $gender->name }}</option>
      @endforeach
    </select>
    <div class="buttons mt-3">
      <a href={{ route('volunteer.index') }} class="btn btn-danger btn-block">Back</a>
      <button type="submit" class="btn btn-primary btn-block">Update</button>
    </div>
  </form>
@endsection