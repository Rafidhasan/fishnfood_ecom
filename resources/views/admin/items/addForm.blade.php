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
                                    <li>Add Items</li>
                                </ul>
                            </div>

                            {{-- main section --}}
                            <div class="col-md-8">
                                <form action="/items" method="post" type="submit" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="name">Item Name</label>
                                      <input name="name" type="text" class="form-control" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Chosse Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option  name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Item Image</label>
                                        <input name="image" type="file" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input name="amount" type="text" class="form-control" placeholder="Enter amount">
                                      </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

