@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">Edit user {{$user->name}}</h3>
                <a  href="{{route('user.index')}}" class="btn btn-primary">go back to user</a>
                </div>
                

                <!-- <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div> -->
              </div>
              <!-- /.card-header -->
               <div class="card-body p-0">
               <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                @include('includes.errors')
                <form action="{{route('user.update',[$user->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                

                 <div class="card-body">
                  <div class="form-group">
                    <label for="name">user Name</label>
                    <input type="name" name="name" class="form-control" id="name" value="{{$user->name}}">
                  </div>
                  <div class="form-group">
                    <label for="description">Email</label>
                    <input type="email" name="email" rows="4" class="form-control" id="email" value="{{$user->email}}">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"  class="form-control" id="password" >
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Updata user</button>
                </div>
              </form>
                   </div>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
@endsection