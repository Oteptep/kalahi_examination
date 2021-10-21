@extends('layouts.main')

@section('content')
  <div>
    <select class="form-select" aria-label="Default select example" id="regions">
      <option>Select Region</option>
    </select>
  </div>
@endsection

@section('custom-script')
  <script>
    let select = document.getElementById('regions');
    const get = async () => {
      const response = await fetch('https://ncddpdb.dswd.gov.ph/api/ceac/lib_region')
      const result = await response.json();

      result.map(function (value){
        const { Id, Name } = value;
        let option = document.createElement('option');
        option.text = Name
        option.value = Id
        select.appendChild(option);
      })
    }
    get()
  </script>
@endsection