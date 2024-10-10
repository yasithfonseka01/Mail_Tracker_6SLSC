@extends('home')

@section('content')

    <section class="content">
        <div class="container-fluid">



                <div class="row">

                    <div class="col-md-4">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>34</h3>
                                <p>Received Mails</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-mail-bulk"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>44</h3>
                                <p>Pending Mails</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-mail-bulk"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>21</h3>
                                <p>Sent Mails</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-mail-bulk"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>



                </div>




        </div>
    </section>

@endsection