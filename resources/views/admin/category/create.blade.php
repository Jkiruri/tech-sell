@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h4> Add Category
                    <a href="{{ url ('admin/category/create') }}" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method = "POST" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                        {{-- require a name field --}}
                        @error('name') <small class="text-danger">{{ $message }}</small>
                            
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Status</label><br>
                        <input type="checkbox" name="status" >
                    </div>
                    <div class="col-md-12">
                        <h4> SEO Tags</h4>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Meta Decription</label>
                        <textarea name="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type = "submit" class="btn btn-primary float-end">Save</button>
                    </div>
                
                </form>

            </div>
        </div>
    </div>
</div>
@endsection