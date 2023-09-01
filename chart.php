<!DOCTYPE html>
<html>
<head>
    <title>Grafik Umur</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Grafik Umur</h1>
    <a href="index.php">Halaman Index</a>

    <!-- untuk chartnya -->
    <canvas id="diagram" width="400" height="200"></canvas>

    <script>
        $(document).ready(function() {
            // Mengambil data dari server PHP
            $.ajax({
                url: 'json.php', // Sesuaikan dengan nama file PHP kamu
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Ini data yang diperluin buat di grafik, aku ambilnya umur yaaa...
                    var umur = [];

                    // looping umur agar semua umur tampil
                    $.each(data, function(index, item) {
                        umur.push(item.umur);
                    });

                    // Membuat grafik dengan Chart.js
                    var ctx = $('#diagram');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: umur,
                            datasets: [{
                                label: 'Umur',
                                data: umur,
                                backgroundColor: '#00ff0020',
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
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + status + ' - ' + error);
                }
            });
        });
    </script>
</body>
</html>
