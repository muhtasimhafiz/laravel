@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">user List</h3>
                <a  href="{{route('user.create')}}" class="btn btn-primary">Create user</a>
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
                      <th>image</th>
                      <th>Slug</th>
                      <th>Email</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (($users) as $user)

                        
                   
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->image}}</td>
                      <td>{{$user->name}}</td>
                      <td>
                        {{$user->email}}
                      </td>
                      <td class="d-flex">
                        <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                        {{-- <a href="#" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>   --}}
                        <form action="{{ route('user.destroy', [$user->id])}}" class="mr-1" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        {{-- <a href="{{'user.show', ['$user->id']}}" class="btn btn-sm btn-eye mr-1"><i class="fas fa-edit"></i></a>    --}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection