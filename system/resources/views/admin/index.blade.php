@extends('template.admin')
@section('title', ' SUPER ADMIN')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box">
                    <div class="info-box-content">
                        <h3 class="section-title-underline text-center">Data Peminat</h3>
                        <canvas id="peminat" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                        <h3 class="section-title-underline text-center">Data Lulusan</h3>
                        <canvas id="lulusan" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                        <h3 class="section-title-underline text-center">Data Mahasiswa</h3>
                        <canvas id="mahasiswa" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box mb-3">
                    <div class="info-box-content">
                        <h3 class="section-title-underline text-center">Rata-Rata IPK</h3>
                        <canvas id="ipk" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>

            <div class="clearfix hidden-md-up"></div>


        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script>
        var peminat = {
            labels: ['2015', '2016', '2017', '2018', '2019'],
            datasets: [{
                label: 'Pendaftar',
                borderColor: "#f00",
                backgroundColor: "#f00",
                fill: false,
                data: [
                    152,
                    250,
                    380,
                    480,
                    560,
                ]
            }, {
                label: 'Diterima',
                borderColor: "#00f",
                backgroundColor: "#00f",
                fill: false,
                data: [
                    67,
                    98,
                    99,
                    62,
                    60,
                ]
            }]
        };

        var lulusan = {
            labels: ['2015', '2016', '2017', '2018', '2019'],
            datasets: [{
                label: 'Lulusan',
                borderColor: "#f00",
                backgroundColor: "#f00",
                fill: false,
                data: [
                    0,
                    0,
                    0,
                    48,
                    87,
                ]
            }]
        };
        var mahasiswa = {
            labels: ['2015', '2016', '2017', '2018', '2019'],
            datasets: [{
                label: 'Mahasiswa',
                borderColor: "#0f0",
                backgroundColor: "#0f0",
                fill: false,
                data: [
                    57,
                    148,
                    289,
                    267,
                    278,
                ]
            }]
        };
        var ipk = {
            labels: ['2015 Ganjil', '2015 Genap', '2016 Ganjil', '2016 Genap', '2017 Ganjil', '2017 Genap',
                '2018 Ganjil', '2018 Genap', '2019 Ganjil'
            ],
            datasets: [{
                label: 'Mahasiswa',
                borderColor: "#0ff",
                backgroundColor: "#0ff",
                fill: false,
                data: [
                    randomIntFromInterval(2, 3.5),
                    randomIntFromInterval(2.5, 3),
                    randomIntFromInterval(2.5, 3.5),
                    randomIntFromInterval(2, 3.5),
                    randomIntFromInterval(2, 3.5),
                    randomIntFromInterval(2, 3.5),
                    randomIntFromInterval(3, 3.5),
                    randomIntFromInterval(2, 3.5),
                    randomIntFromInterval(3, 3.5),
                ]
            }]
        };

        var ctx = document.getElementById('peminat').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: peminat,
            options: {
                scales: {
                    yAxes: [{
                            type: 'linear',
                            display: true,
                            position: 'left',
                            id: 'y-axis-1',
                            gridLines: {
                                display: false
                            },
                            labels: {
                                show: true
                            }
                        },
                        {
                            type: 'linear',
                            display: false,
                            position: 'right',
                            id: 'y-axis-2',
                            gridLines: {
                                display: false
                            },
                            labels: {
                                show: true
                            }
                        }
                    ]
                }
            }
        });

        var ctx = document.getElementById('lulusan').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: lulusan,
            options: {
                scales: {
                    yAxes: [{
                        type: 'linear',
                        display: true,
                        position: 'left',
                        id: 'y-axis-1',
                        gridLines: {
                            display: false
                        },
                        labels: {
                            show: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById('mahasiswa').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: mahasiswa,
            options: {
                scales: {
                    yAxes: [{
                        type: 'linear',
                        display: true,
                        position: 'left',
                        id: 'y-axis-1',
                        gridLines: {
                            display: false
                        },
                        labels: {
                            show: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById('ipk').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: ipk,
            options: {
                scales: {
                    yAxes: [{
                        type: 'linear',
                        display: true,
                        position: 'left',
                        id: 'y-axis-1',
                        gridLines: {
                            display: false
                        },
                        labels: {
                            show: true
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        function randomIntFromInterval(min, max) { // min and max included
            return Math.floor(Math.random() * (max - min + 1) + min);
        }
    </script>
@endpush
