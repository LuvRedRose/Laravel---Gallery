@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gallery</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Gallery</h2>
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('gallery.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallerys</a>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Location</th>
                        <th scope="col">Description</th>
                        <th scope="col">Most Rated</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0; ?>
                      @forelse ($items as $gallery)
                      <?php  $no++ ?>
                      <tr>
                        <th scope="row">{{$no}}</th>
                        <td><img src="{{Storage::url($gallery->image)}}" alt="" style="width: 100px" class="img-thumbnail" /></td>
                        <td>{{$gallery->categories->category}}</td>
                        <td>{{$gallery->locations->name}}</td>
                        <td>{{$gallery->description}}</td>
                        <td>
                        @if ($gallery->most == 1)
                            <span class="badge badge-info">Yes</span>
                        @else
                            <span class="badge badge-success">No</ span>
                        @endif
                        </td>
                        <td>
                          <a href="{{route('location.edit', $gallery->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a>
                          <a href="#Deletemodal"
                                        data-remote="{{route('location.show', $gallery->id)}}" 
                                        data-toggle="modal"
                                        data-target="#Deletemodal"
                                        data-title="Delete Location"
                                        class="bnt btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Delete</a>
                        </td> 
                      </tr>
                      @empty
                    <tr>
                        <td colspan="7" class="text-center">
                          <i class="fa fa-spinner"</i>  
                          Data Empty
                        </td>
                    </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>      
@endsection
  