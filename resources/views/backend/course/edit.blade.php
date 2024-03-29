@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Course Edit Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Course List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Course Edit Form</li>
                            </ol>
                          </nav>

                    </div>
                </div>
                <form action="{{ route('admin.course.update',$course) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="title">Title *</label>
                            <input class="form-control" id="title" type="text" name="title"
                                value="{{ old('title',$course->title ??'') }}">
                            <span class="text-warning">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="slug">Slug *</label>
                            <input class="form-control" id="slug" type="text" name="slug"
                                value="{{ old('slug',$course->slug ??'') }}">
                            <span class="text-warning">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="time">Time *</label>
                            <input class="form-control" id="time" type="text" name="time"
                                value="{{ old('time',$course->time ??'') }}">
                            <span class="text-warning">
                                @error('time')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="price">Price*</label>
                            <input class="form-control" id="price" type="text " name="price"
                                value="{{ old('price',$course->price ??'') }}">
                            <span class="text-warning">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="image"> Image*</label>
                            <span>
                                <img src="{{ $course->image ?? '' }}" height="70" alt="">
                            </span>
                            <input class="form-control" id="image" type="file" name="image">
                            <span class="text-warning">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-12 form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea_editor form-control border-radius-0" id="description" type="text"
                                name="description">{{ old('description',$course->description ?? '') }}</textarea>
                            <span class="text-warning">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
