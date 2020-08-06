@extends('admin.layouts.adminLayout')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body">
                        <div class="row">
                            {{-- sidebar --}}
                            <div class="col-md-4">
                                <ul>
                                    <li><a href="/categories">Categories</a></li>
                                    <li><a href="/items">Items</a></li>
                                </ul>
                            </div>

                            {{-- main section --}}
                            <div class="col-md-8">
                                {{-- category section --}}
                                <section id="categories">
                                    <h3 class="mb-3">Items</h3>
                                    <ul class="mb-3">
                                        @foreach ($items as $item)
                                            <li class="mt-2">
                                                {{ $item -> name }}
                                                <a href="/edit_item/{{ $item->id }}" class="btn btn-primary btn-sm text-white">Edit</a>
                                                <span class="ml-2"><a href="/delete_item/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a></span>
                                            </li>
                                        @endforeach
                                        <a href="/add_item" class="btn btn-info mt-3">Add Item</a>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

