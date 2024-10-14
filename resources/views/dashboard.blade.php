@extends('home')

@section('content')

    <section class="content">
        <div class="container-fluid">
        &nbsp;
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
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- Add Pie Chart here -->
            <div class="row">
                <canvas id="mailChart" width="430" height="430"></canvas>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('mailChart').getContext('2d');
            var mailChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Received Mails', 'Pending Mails', 'Sent Mails'],
                    datasets: [{
                        label: '# of Mails',
                        data: [34, 44, 21],
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.2)', 
                            'rgba(255, 99, 132, 0.2)', 
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
@endsection

