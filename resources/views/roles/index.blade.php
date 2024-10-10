@extends('home')

@section('content')
    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2></h2>--}}
            {{--</div>--}}
            {{--<div class="pull-right">--}}
                {{--@can('role-create')--}}
                    {{--<a class="btn btn-success btn-sm mb-2" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> Create New Role</a>--}}
                {{--@endcan--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Role Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Role Management</li>
                    </ol>

                </div>
            </div>
            @can('role-create')
                <a class="btn btn-success btn-sm mb-2" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> Create New Role</a>
            @endcan
        </div>
    </section>



    @session('success')
    <div class="alert alert-success" role="alert">
        {{ $value }}
    </div>
    @endsession


    <section class="content">
        <div class="container-fluid">

            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Roles</h3>
                    <div class="card-tools">

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <table class="table table-bordered">
            <tr>
                <th width="100px">No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        @can('role-edit')
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        @endcan

                        @can('role-delete')
                            <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>

    {!! $roles->links('pagination::bootstrap-5') !!}

@endsection
