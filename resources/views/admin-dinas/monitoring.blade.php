@extends('admin-dinas.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            @include('admin-dinas.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="space-y-14">
                    <h1 class="font-bold text-3xl">Monitoring</h1>

                    <div id="container" class="flex items-center gap-x-5">

                        <a href="{{ route('admin-dinas-monitoring-detail', ['type' => 'daftar-ulang']) }}">
                            <div class="pl-8 pr-5 flex items-center max-w-[342px] rounded-lg bg-primary text-white">
                                <h1 class="font-bold text-sm py-[22px] pr-1">Monitoring Permohonan Daftar Ulang Izin
                                    Operasional
                                    Satuan
                                    Pendidikan</h1>

                                <div class="p-[18px] bg-edu-bg rounded-full">
                                    <img src="{{ asset('home/img/Folder.png') }}" alt="folder" class="">
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('admin-dinas-monitoring-detail', ['type' => 'izin-pendirian']) }}">
                            <div class="pl-8 pr-5 flex items-center max-w-[342px] rounded-lg bg-primary text-white">
                                <h1 class="font-bold text-sm py-[22px] pr-1">Monitoring Permohonan Izin Pendirian Satuan
                                    Pendidikan</h1>

                                <div class="p-[18px] bg-edu-bg rounded-full">
                                    <img src="{{ asset('home/img/School.png') }}" alt="folder" class="">
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('admin-dinas-monitoring-detail', ['type' => 'izin-operasional']) }}">
                            <div class="pl-8 pr-5 flex items-center max-w-[342px] rounded-lg bg-primary text-white">
                                <h1 class="font-bold text-sm py-[22px] pr-1">Monitoring Permohonan Izin Operasional Satuan
                                    Pendidikan</h1>

                                <div class="p-[18px] bg-edu-bg rounded-full">
                                    <img src="{{ asset('home/img/Compliant.png') }}" alt="folder" class="">
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="flex justify-between items-start w-full">
                        <div class="space-y-3">
                            <h1 class="font-semibold text-base text-font-abu">Status Dokumen</h1>

                            <div class="flex items-center gap-[14px]">
                                <p class="font-semibold text-font-abu">Filter</p>

                                <select name="" id=""
                                    class="text-font-kuning border-0 focus:ring-0 ring-transparent ">
                                    <option value="" class="text-font-kuning ring-transparent">Hari ini</option>
                                </select>
                            </div>

                        </div>
                        <div class="space-y-1">
                            <p class="text-font-kuning text-xs">Hari ini</p>
                            <p class="text-primary font-semibold">06/11/2023</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <canvas id="myChart" style="width:100%;max-width:300px; max-height: 300px"></canvas>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var xValues = ["Izin Pendirian", "Daftar Ulang", "Izin Operasional"];
        var yValues = [{{ $data['pendirian'] }}, {{ $data['daftarUlang'] }}, {{ $data['operasional'] }}];
        var barColors = [
            "#A155B9",
            "#F765A3",
            "#16BFD6",
        ];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Dokumen Permohoanan"
                },
                plugins: {
                    legend: {
                        position: 'right', // Menempatkan legend di sebelah kanan
                        align: 'center', // Aligment dari legend
                        labels: {
                            usePointStyle: true // Menggunakan style point untuk label
                        }
                    },
                    datalabels: {
                        display: true, // Menampilkan data label
                        color: 'white', // Warna teks
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
@endpush
