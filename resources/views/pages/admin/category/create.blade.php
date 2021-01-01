@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Category</h2>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{route('category.index')}}" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                  </div>
                  <div class="card-body">
                      <form action="{{route('category.store')}}" method="POST">
                        @csrf
                          <div class="form-group">
                              <label>Category Name</label>
                              <input type="text" class="form-control" name="category">
                          </div>
                          <button type="submit" class="btn btn-success btn-md">Save</button>
                      </form>
                  </div>
            </div>
          </div>
        </div>
    </section>
  </div>    
@endsection