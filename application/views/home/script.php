<script>
    $(window).on('load', function() {
        var options = {
            series: <?= json_encode($chart1['jlh']) ?>,
            chart: {
                width: 500,
                type: 'pie',
            },
            labels: <?= json_encode($chart1['nama_kab_kota']) ?>,
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();


        var options2 = {
            series: <?= $chart2['data'] ?>,
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Jlh Artikel',
                align: 'left'
            },
            // grid: {
            //     row: {
            //         colors: ['#fff'], // takes an array which will be repeated on columns
            //         opacity: 0.5
            //     },
            // },
            xaxis: {
                categories: <?= $chart2['bulan'] ?>,
            }
        };

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();
    });
</script>