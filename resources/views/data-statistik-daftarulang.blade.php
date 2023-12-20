<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bar Chart Example</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Add some styles for better appearance */
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            /* Menghapus margin pada body */
            padding: 0px 50px;
            /* Menambahkan padding 100px ke seluruh sisi body */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            /* Updated to column layout */
            height: 100vh;
            /* Menetapkan tinggi body 100% dari viewport height */
        }

        canvas {
            padding: 1rem;
            border: 1px solid black;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 0 16px rgba(0, 0, 0, 1);
            margin-top: 20px;
            /* Added margin-top */
            max-height: 80vh;
            /* Menetapkan tinggi maksimum elemen canvas 80% dari viewport height */
        }

        .chart-heading {
            text-align: center;
            /* Membuat teks menjadi ditengah */
            padding-top: 0px;
            font-weight: bold;
            display: inline-block;
            /* Menjadikan teks menjadi elemen block */
            position: relative;
            /* Mengatur posisi relatif */
            font-size: 30px;
            /* Mengatur ukuran teks */
        }

        .chart-heading:after {
            content: "";
            position: absolute;
            /* Mengatur posisi absolut */
            bottom: -5px;
            /* Jarak dari teks */
            left: 50%;
            /* Posisi horizontal di tengah */
            width: 650px;
            /* Panjang garis */
            border-bottom: 4px solid #b7605d;
            /* Warna garis dan ketebalan */
            border-radius: 10px;
            transform: translateX(-50%);
            /* Mentranslasi agar garis berada di tengah */
        }
    </style>
</head>

<body>
    <!-- Heading -->
    <div class="chart-heading">
        Data Statistik Daftar Ulang Izin Operasional
    </div>

    <!-- Create a canvas element to render the chart -->
    <canvas id="myChart" width="150" height="75"></canvas>

    <!-- Chart data -->
    <script>
        const labels = ["SD", "SMP", "TK"];
        const data = {
            labels: labels,
            datasets: [{
                    label: "Berhasil",
                    data: [420, 330, 490],
                    backgroundColor: "#B7605D",
                    barThickness: 20,
                    barPercentage: 0.5,
                    borderColor: "rgb(255, 0, 0)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
                {
                    label: "Tidak Berhasil",
                    data: [310, 250, 190],
                    backgroundColor: "#D9D9D9",
                    barThickness: 20,
                    barPercentage: 0.5,
                    borderColor: "rgb(119, 136, 153)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
            ],
        };

        const options = {
            indexAxis: 'x',
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',
                },
            },
            tooltip: {
                borderRadius: 10, // Atur tingkat kebulatan tooltip
            },
        };

        const ctx = document.getElementById("myChart").getContext("2d");
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options,
        });
    </script>
</body>

</html>
