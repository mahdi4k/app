<template>
    <canvas ref="fuelChart" width="400" height="400"></canvas>

</template>

<script>
    import Chart from 'chart.js';
    export default {
        props :['labels','values'],
        mounted() {

            var ctx = this.$refs.fuelChart.getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: this.labels,
                    datasets: [{
                        label: '# of Votes',
                        data: this.values,
                        backgroundColor: [
                            'rgb(83, 82, 237 , .5)'
                        ],
                        borderColor: [
                            '#0fbcf9'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });


        }
    }
</script>
