@extends('layouts.admin')

@section('content')

<div class="card">
              <div class="card-header">

              <div class=" d-flex justify-content-between">
                <h3 class="card-title">View post</h3>
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
                  <table class="table table-bordered table-pimary">
                    <tbody>
                      <tr>
                        <th style="max-width: 800px">Image </th>
                        <td>
                          <div style="max-width: 300px; max-height:300px;overflow:hidden; align:center">
                            <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                        </div>
                        </td>
                       
                      </tr>
                     
                      <tr>
                        <th style="max-widht: 800px">Title </th>
                          <td>
                            {{$post->title}}
                          </td>
                       
                      </tr>

                      <tr>
                        <th style="max-width: 800px">Catagory ID</th>
                          <td>
                            {{$post->catagory->name}}
                          </td>
                       
                      </tr>

                      <tr>
                        <th style="max-width: 800px">Tags</th>
                          <td>
                            @foreach ($post->tags as $tag)
                            <span class="badge badge-primary">
                              {{$tag->name}}
                            </span>

                        @endforeach
                          </td>
                        
                      </tr>

                      
                      <tr>
                        <th style="max-width: 800px">Author</th>
                          <td>
                            {{$post->user->name}}
                          </td>
                        
                      </tr>


                        
                      <tr>
                        <th style="max-width: 800px">Description</th>
                         
                            <td>{!! $post->description !!}</td>
                        

                          {{-- <td>
                            <div id="summernote">Hello Summernote</div>

                          </td> --}}
                        
                      </tr>



                    </tbody>
                    
                  </table>
               
                   </div>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
@endsection