@extends('admin.templates.default')

@section('content')
            <div class="page-content-inner">

                <div class="d-flex">
                    <nav id="breadcrumbs" class="mb-3">
                        <ul>
                            <li><a href="{{ route('admin.index') }}"> <i class="uil-home-alt"></i> </a></li>
                            <li><a href="{{ route('category.index') }}"> Categories </a></li>
                            <li>Create New Category</li>
                        </ul>
                    </nav>
                </div>



                <div class="card">
                    <div class="card-header border-bottom-0 py-4">
                        <h5> Add Category </h5>
                    </div>
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                    <div class="row">

                                    <div class="col-xl-9 m-auto">
                                        <div class="form-group row mb-3 {{ $errors->has('name') ? 'has-error' : ''}}">
                                            <label class="col-md-3 col-form-label" for="name">Category name<span
                                                    class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ old('name') }}"
                                                    placeholder="Enter category name" required="">
                                                    @if ($errors->has('name'))
                                                <p class="help-block">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                            </div>

                                        </div>

                                        <div class="form-group row mb-3 {{ $errors->has('describtion') ? 'has-error' : ''}}">
                                            <label class="col-md-3 col-form-label" for="describtion">Short
                                                description</label>
                                            <div class="col-md-9">
                                                <textarea name="describtion" id="describtion"
                                                    class="form-control">{{ old('describtion') }}</textarea>
                                                    @if ($errors->has('describtion'))
                                                <p class="help-block">
                                                    {{ $errors->first('describtion') }}
                                                </p>
                                            @endif
                                            </div>

                                        </div>


                                        <div class="text-center">
                                            <div class="mb-3 mt-3">
                                                <a href="{{ route('category.index') }}" class="btn btn-danger">Cancel</a>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    </form>
            </div>
@endsection
