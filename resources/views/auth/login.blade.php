@extends('layouts.main')

@section('content')
  <div class="wrapper">
    <div class="card mt-5">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="buttons">
            <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection