@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- Button trigger modal -->
                    <div class="card-header d-flex justify-content-end">
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add New Blog
                        </button>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Session::has('Blog_add'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('Blog_add') }}
                                <button type="button" class="btn-close " data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('Delete_blog'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('Delete_blog') }}
                                <button type="button" class="btn-close " data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif


                        <!-- Modal For Add-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/addblog') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="title" id=""
                                                    placeholder="Title">
                                            </div>
                                            <div class="mb-3">
                                                <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Content"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                        <div class="mt-2">

                            <h4 class="mb-3 text-center fw-bold">Previous Blogs</h4>
                            <hr class="text-secondry">
                            @if (count($data) > 0)
                                @foreach ($data as $data)
                                    <div class="row mb-3">
                                        <div class="card">
                                            <div class="card-header fw-bold fs-5 d-flex justify-content-end">
                                                <a href="{{ route('blog.update', ['id' => $data->id]) }}" class="border border-0 text-primary ms-3"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                                <a href="{{ route('blog.delete', ['id' => $data->id]) }}"
                                                    class="text-danger ms-3"><i class="fa fa-trash"></i></a>
                                            </div>
                                            <div class="card-body">
                                                <div class="fw-bold fs-5">
                                                    {{ $data->title }}
                                                </div>
                                                <p class="card-text">{{ $data->content }}</p>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h3 class="text-center">No Blog Yet</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
