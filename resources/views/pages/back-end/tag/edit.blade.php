@extends('layouts.adminPanel')

@section('title', 'Edit Tag')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-success" style="margin-top: 2rem;">
                    <div class="card-header">
                        <h3 class="card-title">edit tag</h3></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ Route('tag.update', ['id'=>$tag->id]) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('post')}}
                        <div class="card-body">
                            <!-- Tag Name -->
                            <div class="form-group">
                                <label for="name">Tag Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    placeholder="Add Tag Name"
                                    value="{{$tag->name}}"
                                    required>
                                @error('name')
                                    <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                update
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection

