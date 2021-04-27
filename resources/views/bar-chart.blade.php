<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
</head>
<body>
    <div style="height:400px; width:900px; margin:auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        $(function(){
            var datas = <?php echo json_encode($datas); ?>
            var barCanvas = $("#barChart");
            var barChart = new Chart(barCanvas, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    datasets: [
                        {
                            label: 'New User Growth, 2020',
                            data: datas,
                            backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'pink', 'indigo', 'silver', 'gold']
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        })
    </script>
</body>
</html>