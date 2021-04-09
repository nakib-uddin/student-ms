
@extends('master')
@section('content')
<div class ="container">
    <table class="table table-reponsive table-hover">
      <tr>
            <th>Sl</th>
            <th>name</th>
            <th>Registration</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th> 
      </tr>
     @php $i=0; @endphp
      @foreach  ($students as $student)

    @php $i++; @endphp
        <tr>
        <td>{{$i}}</td>
        <td>{{ $student->name  }}</td>
        <td>{{ $student->Registration_id }}</td>
        <td>{{ $student->Department }}</td>
        <td>{{ $student->Info }}</td>
        <td><a href="#" class="btn btn-success">Edit</a></td>
        </tr>
        @endforeach
       </div>
       </table>



@endsection

   