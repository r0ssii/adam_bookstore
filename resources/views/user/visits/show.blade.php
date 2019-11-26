@extends('layouts.app');
# @Date:   2019-11-04T20:19:49+00:00
# @Last modified time: 2019-11-04T20:49:12+00:00




@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Visit: {{$book->title}}
          </div>
          <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Date</td>
                    <td>{{$visit->date}}</td>
                  </tr>
                  <tr>
                    <td>Time</td>
                    <td>{{$visit->time}}</td>
                  </tr>
                  <tr>
                    <td>Duration</td>
                    <td>{{$visit->duration}}</td>
                  </tr>
                  <tr>
                    <td>Patiant</td>
                    <td>{{$visit->patiant}}</td>
                  </tr>
                  <tr>
                    <td>Doctor</td>
                    <td>{{$visit->doctor}}</td>
                  </tr>
                  <tr>
                    <td>Cost</td>
                    <td>{{$visit->cost}}</td>
                  </tr>
                </tbody>
              </table>

              <a href="{{route('user.visit.index')}}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
