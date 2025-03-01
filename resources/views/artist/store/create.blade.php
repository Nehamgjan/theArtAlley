@extends('artist.layouts.layout')
@section('artist_page_title')
    Create Store
@endsection
@section('artist_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Store</h5>
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

                <form action="{{route('create.store')}}" method="POST">
                    @csrf
                    <label for="store_name" class="fw-bold mb-2">Give name of your store.</label>
                    <input type="text" class="form-control" name="store_name" placeholder="Canvaso">

                    <label for="details" class="fw-bold mb-2 mt-2">Give description of your store.</label>
                    <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>

                    <label for="slug" class="fw-bold mb-2 mt-2">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Canvaso-store">

                    <button type="submit" class="btn btn-primary w-100 mt-2">Create Store</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection