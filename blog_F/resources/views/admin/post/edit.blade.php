@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">Edit post {{$post->name}}</h3>
                <a  href="{{route('post.index')}}" class="btn btn-primary">go back to post</a>
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
                  <form action="{{route('post.update',[$post->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
  
                   <div class="card-body">
                    <div class="form-group">
                      <label for="title">post Title</label>
                      <input type="name" value="{{$post->title}}" name="title" class="form-control" placeholder="Enter Title">
                    </div>
  
                    <div class="form-group">
                      <label for="title">Post Catagory</label>
                    
                      <select name="catagory" id="catagory" class="form-control">
                        <option value="" style="display:none" selected>Selected catagory</option>
                        @foreach ($catagories as $catagory)
                          <option value="{{$catagory->id}}" 
                            @if($post->catagory_id==$catagory->id)> selected
                            @endif
                            {{$catagory->name}}</option>
  
                            
                        @endforeach
                      </select>
                    </div>
  
  
                    <div class="form-group">
                      <div class="row">
                      <div class="col-8">
                        <label for="image">image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                       
                      </div>

                      <div class="col-4">
                        <div style="max-width: 100px; max-height:100px;overflow:hidden">
                          <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                      </div>
                      </div>
                      </div>
                     
                      {{-- <textarea  name="description" rows="4" class="form-control" id="description" placeholder="enter description"></textarea> --}}
                    </div>
                    
                    @foreach ($tags as $tag)
                    <div class="form-group">
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="tags[]" id="{{$tag->id}}" value="{{$tag->id}}"
                      
                      @foreach ($post->tags as $t)
                          @if($tag->id == $t->id) checked @endif
                      @endforeach
                      
                      >
                        <label class="form-check-label">{{$tag->name}}</label>
                      </div>
                    </div>
                    @endforeach
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea  name="description" rows="4" class="form-control" id="description" placeholder="enter description">{{$post->description}}</textarea>
                    </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-primary">Updata post</button>
                </div>
              </form>
                   </div>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
@endsection