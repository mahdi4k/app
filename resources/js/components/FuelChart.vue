<template>
    <canvas ref="fuelChart" width="400" height="200"></canvas>

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
                        borderColor: "#80b6f4",
                        pointBorderColor: "#80b6f4",
                        pointBackgroundColor: "#80b6f4",
                        pointHoverBackgroundColor: "#80b6f4",
                        pointHoverBorderColor: "#80b6f4",
                        pointBorderWidth: 6,
                        pointHoverRadius: 6,
                        pointHoverBorderWidth: 1,
                        label: 'میزان مصرف سوخت ',
                        data: this.values ,
                        backgroundColor: [
                            'rgb(83, 82, 237 , .5)'
                        ],

                        borderColor: [
                            '#0fbcf9'
                        ],
                        borderWidth: 1
                    }]
                },
                options : {
                    legend: {
                        display: true,
                        position: 'top',
                        fontColor:'red',
                        labels:{
                            fontFamily: "iransansLight",
                        }
                    },
                    scales: {
                        yAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: 'لیتر',
                                fontFamily: "iransansLight",
                                fontSize:"15"
                            },
                            ticks: {
                                fontFamily: "iransansLight",

                            }
                        }],
                        xAxes: [{

                            gridLines: {
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                padding: 10,
                                fontColor: "rgba(0,0,0,1)",
                                fontFamily: "iransansLight"
                            },


                        }]
                    }
                }
            });


        }
    }
</script>
