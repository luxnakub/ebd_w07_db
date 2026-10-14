@extends('layouts.app')

@section('title', 'Gaming & Esports Report - w10')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-md max-w-4xl mx-auto my-6 border border-gray-100">
    <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800 tracking-tight">Gaming & Esports Community Report</h2>
        <p class="text-gray-500 text-sm mt-1">สถิติความนิยมประเภทเกมของผู้เล่น (สำรวจจากผู้ใช้งานจำนวน 100 คน)</p>
    </div>
    
    <div style="height: 400px; position: relative;">
        <canvas id="gamingChart"></canvas>    
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels = {{ Js::from($labels) }};
    var datas = {{ Js::from($data) }};

    const data = {
        labels: labels,
        datasets: [{
            label: 'จำนวนผู้เล่น (คน)',
            backgroundColor: [
                'rgba(147, 51, 234, 0.65)',  // Purple
                'rgba(59, 130, 246, 0.65)',  // Blue
                'rgba(239, 68, 68, 0.65)',   // Red
                'rgba(245, 158, 11, 0.65)',  // Yellow
                'rgba(16, 185, 129, 0.65)',  // Green
                'rgba(236, 72, 153, 0.65)'   // Pink
            ],
            borderColor: [
                'rgb(147, 51, 234)',
                'rgb(59, 130, 246)',
                'rgb(239, 68, 68)',
                'rgb(245, 158, 11)',
                'rgb(16, 185, 129)',
                'rgb(236, 72, 153)'
            ],
            borderWidth: 2,
            borderRadius: 6,
            data: datas,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { 
                    display: true, 
                    position: 'top' 
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { precision: 0 }
                }
            }
        }
    };

    const gamingChart = new Chart(
        document.getElementById('gamingChart'),
        config
    );
</script>
@endsection