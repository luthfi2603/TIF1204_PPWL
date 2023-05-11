@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Postingan Baru</h1>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <a href="postingan" class="btn btn-primary mt-2 mb-3">Kembali</a>
                    <div class="col-10">
                        <form action="/admin/store_post" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="author_id" value="1">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" required>
                                @error('title')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Excerpt</label>
                                <textarea type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" required>{{old('excerpt')}}</textarea>
                                @error('excerpt')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alifah">Content</label>
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="alifah" name="content" required>{{old('content')}}</textarea>
                                @error('content')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                @error('image')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection('content')