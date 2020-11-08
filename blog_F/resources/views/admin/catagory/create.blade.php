@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-name">create catagory</h3>
                <a  href="{{route('catagory.index')}}" class="btn btn-primary">go back to catagory</a>
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
                <form action="{{route('catagory.store')}}" method="POST">
                @csrf

                 <div class="card-body">
                  <div class="form-group">
                    <label for="name">catagory Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  name="description" rows="4" class="form-control" id="description" placeholder="enter description"></textarea>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>
              </form>
                   </div>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
@endsection