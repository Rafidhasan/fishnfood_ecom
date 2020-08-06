@extends('admin.layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body">
                        <div class="row">
                            {{-- sidebar --}}
                            <div class="col-md-4">
                                <ul>
                                    <li>Edit Category - <strong>{{ $category->name }}</strong> </li>
                                </ul>
                            </div>

                            {{-- main section --}}
                            <div class="col-md-8">
                                <form action="/admin/{{$category->id }}" method="post" type="submit">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" name="name" placeholder="Add Category" class="form-control" value="{{ $category->name }}">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" value="Edit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

