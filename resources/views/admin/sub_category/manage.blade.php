@extends('admin.layouts.layout')
@section('admin_page_title')
Manage - Sub Category Pannel
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Sub Category</h5>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>SubCategory</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($subcategories as $subcat)
                            <tr>
                                <td>{{$subcat->id}}</td>
                                <td>{{$subcat->subcategory_name}}</td>
                                <td>{{$subcat->category->category_name}}</td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
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