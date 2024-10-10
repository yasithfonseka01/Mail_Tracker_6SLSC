@extends('home')

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2>Create New Role</h2>--}}
            {{--</div>--}}
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-primary btn-sm mb-2" href="{{ route('roles.index') }}"><i class="fa fa-arrow-left"></i> Back</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Role</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create New Role</li>
                    </ol>

                </div>
            </div>
            <a class="btn btn-primary btn-sm mb-2" href="{{ route('roles.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </section>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">

            <div class="card card-default">
                {{--<div class="card-header">--}}
                    {{--<h3 class="card-title">Roles</h3>--}}
                    {{--<div class="card-tools">--}}

                    {{--</div>--}}
                {{--</div>--}}

                <div class="card-body">
                    <div class="row">

                            <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                    @foreach($permission as $value)
                        <label><input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="name">
                            {{ $value->name }}</label>
                        <br/>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-sm mb-3"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </div>
        </div>
    </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
