@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="fw-bold text-center">Blog's</h4>
        <hr class="text-secondry">
        @foreach ($data as $data)
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="card">
                    <h5 class="card-header">{{$data->title}}</h5>
                    <div class="card-body">
                      <p class="card-text">{{$data->content}}</p>
                    </div>
                  </div>
            </div> 
        </div>
        @endforeach
        </div>
        @if(Session::has('Blog_add'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('Blog_add') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
       
    </div>
@endsection
