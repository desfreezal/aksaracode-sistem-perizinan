
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
        margin: 0; /* Menghapus margin pada body */
        padding: 0px 50px; /* Menambahkan padding 100px ke seluruh sisi body */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column; /* Updated to column layout */
        height: 100vh; /* Menetapkan tinggi body 100% dari viewport height */
      }

      canvas {
        padding: 1rem;
        border: 1px solid black;
        border-radius: 1rem;
        background: white;
        box-shadow: 0 0 16px rgba(0, 0, 0, 1);
        margin-top: 20px; /* Added margin-top */
        max-height: 80vh; /* Menetapkan tinggi maksimum elemen canvas 80% dari viewport height */
      }

      .chart-heading {
        text-align: center; /* Membuat teks menjadi ditengah */
        padding-top: 0px;
        font-weight: bold;
        display: inline-block; /* Menjadikan teks menjadi elemen block */
        position: relative; /* Mengatur posisi relatif */
        font-size: 30px; /* Mengatur ukuran teks */
      }

      .chart-heading:after {
        content: "";
        position: absolute; /* Mengatur posisi absolut */
        bottom: -5px; /* Jarak dari teks */
        left: 50%; /* Posisi horizontal di tengah */
        width: 650px; /* Panjang garis */
        border-bottom: 4px solid #b7605d; /* Warna garis dan ketebalan */
        border-radius: 10px;
        transform: translateX(
          -50%
        ); /* Mentranslasi agar garis berada di tengah */
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
      const labels = ["Berhasil", "Tidak Berhasil"];
      const data = {
        labels: labels,
        datasets: [
          {
            label: "SD",
            data: [65, 59],
            backgroundColor: [
              "rgba(255, 0, 0, 0.3)",
              "rgba(119, 136, 153, 0.5)",
            ],
            borderColor: ["rgb(255, 0, 0", "rgb(119, 136, 153)"],
            borderWidth: 1,
          },
          {
            label: "SMP",
            data: [40, 30],
            backgroundColor: [
              "rgba(255, 255, 0, 0.3)",
              "rgba(192, 192, 192, 0.5)",
            ],
            borderColor: ["rgb(255, 255, 0)", "rgb(192, 192, 192)"],
            borderWidth: 1,
          },
          {
            label: "TK",
            data: [20, 40],
            backgroundColor: [
              "rgba(0, 255, 0, 0.3)",
              "rgba(176, 196, 222, 0.5)",
            ],
            borderColor: ["rgb(0, 255, 0)", "rgb(176, 196, 222)"],
            borderWidth: 1,
          },
        ],
      };
      // Get the canvas element
      const ctx = document.getElementById("myChart").getContext("2d");

      // Create a bar chart
      const myChart = new Chart(ctx, {
        type: "bar",
        data: data,
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
            x: {
              ticks: {
                fontSize: 100,
                fontWeight: "bold", // Atur ukuran font untuk sumbu x
              },
            },
            y: {
              beginAtZero: true,
              ticks: {
                fontSize: 100,
                fontWeight: "bold", // Atur ukuran font untuk sumbu y
              },
            },
          },
        },
      });
    </script>
  </body>
</html>
