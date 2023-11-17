@extends('Template.main')

@section('content')
    <main id="main" class="main">

        <canvas id="myChart"></canvas>

        <script src="{{ asset('js/chart.js') }}"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var data = @json($data); // Mengkonversi data PHP menjadi JSON

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Data Chart',
                        data: data.values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </main>
@endsection
