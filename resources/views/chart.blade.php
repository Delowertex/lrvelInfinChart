<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="chart-container"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        var datas = <?php echo json_encode($datas) ?>

        Highcharts.chart('chart-container', {
            title:{
                text: 'New User Growth, 2020'
            },
            subtitle:{
                text: 'Source: Surface Media'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            },

            yAxis: {
                title:{
                    text: 'Number of the New User';
                }
            },
            legend:{
                layout: 'vertical',
                align: 'right',
                verticalAlign:'middle'
            },
            plotOptions:{
                series: {
                    allowPointSelect: true
                }
            },
            series:[{
                name: 'New User',
                data: 'datas'
            }],
            responsive:{
                rules:[
                    {
                        condition:{
                            maxWidth: 500
                        },
                        chartOptions:{
                            legend:{
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'buttom'
                            }
                        }
                    }
                ]
            }

        })
    
    </script>
</body>
</html>