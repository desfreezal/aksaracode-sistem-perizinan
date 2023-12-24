@extends('walikota.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('walikota.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                {{-- HEADER --}}
                <div class="rounded-lg flex items-center gap-x-8 px-5 py-3 shadow-xl mb-9">
                    <img src="{{ asset('walikota/img/icon dashboard statistik.png') }}" alt="valid"
                        class="bg-primary p-3 aspect-square object-contain rounded-xl w-12">
                    <h1 class="font-medium text-xl">Dashboard Statistik</h1>
                </div>
                {{-- END HEADER --}}

                <div class="rounded-lg gap-x-8 px-5 py-5 shadow-xl mb-9">
                    <h1 class="font-semibold text-2xl mb-8">Total Pengajuan Permohonan</h1>

                    <div class="flex items-center justify-around">
                        <div class="text-center space-y-2">
                            <h1 class="font-semibold text-5xl">1.020</h1>
                            <h2 class="font-semibold text-xl text-for-icon">Berhasil</h2>
                        </div>
                        <div class="text-center space-y-2">
                            <h1 class="font-semibold text-5xl">586</h1>
                            <h2 class="font-semibold text-xl text-for-icon">Gagal</h2>
                        </div>
                        <div class="text-center space-y-2">
                            <h1 class="font-semibold text-5xl">1.606</h1>
                            <h2 class="font-semibold text-xl text-for-icon">Total Keseluruhan</h2>
                        </div>
                    </div>

                </div>

                {{-- DATA DAFTAR ULANG --}}
                <div class="rounded-lg gap-x-8 px-5 py-5 shadow-xl mb-9">
                    <h1 class="font-semibold text-2xl mb-8">Daftar Ulang Izin Operasional Satuan Pendidikan</h1>

                    <canvas id="daftar-ulang" width="150" height="75"></canvas>
                </div>

                {{-- DATA IZIN PENDIRIAN --}}
                <div class="rounded-lg gap-x-8 px-5 py-5 shadow-xl mb-9">
                    <h1 class="font-semibold text-2xl mb-8">Izin Pendirian Satuan Pendidikan</h1>

                    <canvas id="izin-pendirian" width="150" height="75"></canvas>
                </div>

                {{-- DATA IZIN Operasional --}}
                <div class="rounded-lg gap-x-8 px-5 py-5 shadow-xl mb-9">
                    <h1 class="font-semibold text-2xl mb-8">Izin Operasional Satuan Pendidikan</h1>

                    <canvas id="izin-operasional" width="150" height="75"></canvas>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // DAFTAR ULANG
        const daftarUlang = ["SD", "SMP", "TK"];
        const dataDaftarUlang = {
            labels: daftarUlang,
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

        const daftarElemen = document.getElementById("daftar-ulang").getContext("2d");
        const daftar = new Chart(daftarElemen, {
            type: 'bar',
            data: dataDaftarUlang,
            options: options,
        });

        // IZIN PENDIRIAN
        const izinPendirian = ["SD", "SMP", "TK"];
        const dataIzinPendirian = {
            labels: izinPendirian,
            datasets: [{
                    label: "Berhasil",
                    data: [260, 390, 420],
                    backgroundColor: "#B7605D",
                    barThickness: 20, //ukuran bar
                    barPercentage: 0.5,
                    borderColor: "rgb(255, 0, 0)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
                {
                    label: "Tidak Berhasil",
                    data: [205, 370, 270],
                    backgroundColor: "#D9D9D9",
                    barThickness: 20, //ukuran bar
                    barPercentage: 0.5,
                    borderColor: "rgb(119, 136, 153)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
            ],
        };

        const izinPendElement = document.getElementById("izin-pendirian").getContext("2d");
        const izinChart = new Chart(izinPendElement, {
            type: 'bar',
            data: dataIzinPendirian,
            options: options,
        });

        // IZIN OPERASIONAL
        const izinOperasional = ["SD", "SMP", "TK"];
        const dataIzinOperasional = {
            labels: izinOperasional,
            datasets: [{
                    label: "Berhasil",
                    data: [390, 480, 320],
                    backgroundColor: "#B7605D",
                    barThickness: 20, //ukuran bar
                    barPercentage: 0.5,
                    borderColor: "rgb(255, 0, 0)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
                {
                    label: "Tidak Berhasil",
                    data: [270, 310, 120],
                    backgroundColor: "#D9D9D9",
                    barThickness: 20, //ukuran bar
                    barPercentage: 0.5,
                    borderColor: "rgb(119, 136, 153)",
                    borderWidth: 1,
                    borderRadius: 15,

                },
            ],
        };

        const ctx = document.getElementById("izin-operasional").getContext("2d");
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: dataIzinOperasional,
            options: options,
        });
    </script>
@endpush
