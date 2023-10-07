@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">category Form</h6>
                        <hr/>
                        <form action="{{route('blogs.store')}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">select category</option>
                                    @foreach($categories as $category )
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"> Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">image </label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

