@extends('layouts.app')
# @Date:   2019-10-29T22:16:45+00:00
# @Last modified time: 2019-11-04T20:36:42+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an admin!
                     <a href="{{route('admin.patiant.index')}}">Patiants</a>
                   </br>
                   <a href="{{route('admin.doctor.index')}}">Doctors</a>
                 </br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
