@extends('layouts.app');
# @Date:   2019-11-04T20:19:40+00:00
# @Last modified time: 2019-11-04T20:47:59+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Visits
          </div>
          <div class="card-body">
            @if (count($books) === 0)
              <p> There are no visits</p>
            @else
              <table id="table-visits" class="table table-hover">
                <thead>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Duration</th>
                  <th>Doctor</th>
                  <th>Cost</th>
                </thead>
                <tbody>
                  @foreach ($visits as $visit)
                    <tr data-id="{{$visit->id}}">
                      <td>{{$visit->date}}</td>
                      <td>{{$visit->time}}</td>
                      <td>{{$visit->duration}}</td>
                      <td>{{$visit->patiant}}</td>
                      <td>{{$visit->doctor}}</td>
                      <td>{{$visit->cost}}</td>

                      <td>
                        <a href="{{route('user.visit.show', $visit->id)}}" class="btn btn-primary">View</a>
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
