@extends('layouts.app');
# @Date:   2019-11-04T18:46:42+00:00
# @Last modified time: 2019-11-04T19:15:11+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Doctor
            <a href="{{route('admin.doctor.create')}}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($docotrs) === 0)
              <p> There are no doctors</p>
            @else
              <table id="table-doctor" class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Start Date</th>
                </thead>
                <tbody>
                  @foreach ($doctors as $doctor)
                    <tr data-id="{{$doctor->id}}">
                      <td>{{$doctor->name}}</td>
                      <td>{{$doctor->address}}</td>
                      <td>{{$doctor->phone}}</td>
                      <td>{{$doctor->email}}</td>
                      <td>{{$doctor->startdate}}</td>
                      <td>
                        <a href="{{route('admin.doctor.show', $doctor->id)}}" class="btn btn-default">View</a>
                        <a href="{{route('admin.doctor.edit', $doctor->id)}}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{route('admin.doctor.destroy', $doctor->id)}}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <button type="submit" class="form-control btn btn-danger"> Delete</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
