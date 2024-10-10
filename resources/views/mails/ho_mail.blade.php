@extends('home')

@section('content')

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Hand over Mail</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Take over Mail</li>
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mail H/O number</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mail Reference</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service NO</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Rank</label>
                                        <select class="form-control" style="width: 100%;">
                                            <option selected="selected">Pte</option>
                                            <option>L/Cpl</option>
                                            <option>Cpl</option>
                                            <option>Sgt</option>
                                            <option>S/Sgt</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Internal Mail
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                External Mail
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="date" class="form-control" data-target="" />

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>To Location</label>
                                        <select class="form-control" style="width: 100%;">
                                            <option selected="selected">1 SLSC</option>
                                            <option>3 SLSC</option>
                                            <option>5 SLSC</option>
                                            <option>11 SLSC</option>
                                            <option>12 SLSC</option>
                                            <option>2(V) SLSC</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control">

                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <button type="button" class="btn btn-secondary">Clear</button>
                                        <button type="button" class="btn btn-primary">Save</button>
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



@endsection
