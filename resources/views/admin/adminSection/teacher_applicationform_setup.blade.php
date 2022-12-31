@extends('masterAdmin')
@section('teacherApplicationForm')



<br><br><br>

<form method="POST" action="{{ route('teacherFormsetupSubmit') }}">
    @csrf
    
  <div class="form-group col-md-4">
    <label for="labelName">Label Name</label>
    <input type="text" id="labelName" name="labelName" class="form-control"  >
  </div>
  <div class="form-group col-md-4">
    <label for="relatedField">Select Field</label>
    <select id="relatedField" name="relatedField" class="form-control" >

    @foreach($formfields as $fields)

        @if($fields->labelName == null)

            <option value="{{ $fields->relatedField }}">{{ $fields->relatedField }}</option>

        @endif

    @endforeach

    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection