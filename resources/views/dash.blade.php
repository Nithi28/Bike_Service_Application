@extends('layouts.template2')
@section('content')
<div class="col-lg-3">
    <div class="card mb-4 ">
        <div class="card-header">
            <i class="fas fa-chart-pie me-1"></i>
                Pie Chart Example
        </div>
        <div class="card-body"><canvas id="myPieChart" width="100%" height=""></canvas></div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        var chartData = @json($data);
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var data = {
            labels: ['oil', 'all', 'water'],
            datasets: [{
                data: [chartData.oil, chartData.all, chartData.water], // Replace with your data values
                backgroundColor: ['#FF5733', '#33FF57', '#5733FF'], // Customize colors
            }]
        };
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
        });
    });
</script>

@endsection