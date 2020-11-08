@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">post List</h3>
                <a  href="{{route('post.create')}}" class="btn btn-primary">Create post</a>
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
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Tittle</th>
                      <th>Category</th>
                      <th>Tags</th>
                      <th>Author</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   

                        
                    @foreach ($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>  
                        <div style="max-width: 70px; max-height:70px;overflow:hidden">
                        <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                    </div>
                  </td>
                      <td>{{$post->title}}</td>
                      
                      <td>{{$post->catagory->name}}</td> 
                      <td>
                        @foreach ($post->tags as $tag)
                            <span class="badge badge-primary">{{$tag->name}}</span>
                        @endforeach
                        
                      </td>

                      <td>{{$post->user->name}}</td>
                    
                      <td class="d-flex">
                        <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                        {{-- <a href="#" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>   --}}
                        <form action="{{ route('post.destroy', [$post->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        <a href="{{route('post.show', [$post->id])}}" class="btn btn-sm btn-eye mr-1"><i class="fas fa-eye"></i></a> 
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection