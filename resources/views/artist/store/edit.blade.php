@extends('admin.layouts.layout')
@section('admin_page_title')
Edit - Store Panel
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Store</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                <form action="{{route('update.store', $store_info->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="store_name" class="fw-bold mb-2">Give name of your store.</label>
                    <input type="text" class="form-control" name="store_name" value="{{$store_info->store_name}}">

                    <button type="submit" class="btn btn-primary w-100 mt-2">Update Store</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection