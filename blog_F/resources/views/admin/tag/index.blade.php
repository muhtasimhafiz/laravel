@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">tag List</h3>
                <a  href="{{route('tag.create')}}" class="btn btn-primary">Create tag</a>
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
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Post Count</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (($tags) as $tag)

                        
                   
                    <tr>
                      <td>{{$tag->id}}</td>
                      <td>{{$tag->name}}</td>
                      <td>{{$tag->slug}}</td>
                      <td>
                        {{$tag->id}}
                      </td>
                      <td class="d-flex">
                        <a href="{{ route('tag.edit', [$tag->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                        {{-- <a href="#" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>   --}}
                        <form action="{{ route('tag.destroy', [$tag->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        {{-- <a href="{{'tag.show', ['$tag->id']}}" class="btn btn-sm btn-eye mr-1"><i class="fas fa-edit"></i></a>    --}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection