@extends('home')

@section('content')


            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Track Mail</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Track Mail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">T/O Form</h3>
                            <div class="card-tools">

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mail Reference</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <button type="button" class="btn btn-primary">Search</button>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Ref</th>
                                                <th scope="col">Current Loc</th>
                                                <th scope="col">Remarks</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Lorem Ipsum/Lorem/Sep/(09)</td>
                                                <td>SFHQ (W)</td>
                                                <td>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical </td>
                                                <td><span class="badge badge-warning">Forwarding</span></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="card-footer">
                           SLSC - Software solution
                        </div>
                    </div>
                </div>
            </section>


    {{--</div>--}}

@endsection
