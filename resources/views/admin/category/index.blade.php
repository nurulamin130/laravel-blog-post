@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">category Form</h6>
                        <hr/>
                        <table class="table table-hover table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as  $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->status == 1 ?'Active':'Inactive'}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm">edit</a>

                                    @if($category->status == 1)
                                         <a href="{{route('categories.show',$category->id)}}" class="btn btn-warning btn-sm"> Inactive</a>
                                    @else
                                         <a href="{{route('categories.show',$category->id)}}" class="btn btn-success btn-sm">action</a>
                                    @endif

                                    <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm flat-start m-1"
                                                onclick="return confirm('Are you delete This!!!!')"> delete</button>



                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

