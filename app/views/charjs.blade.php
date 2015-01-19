<h1>Turtorial using charjs in laravel:</h1>
<div>
<h2>Setup:</h2>
+ download in : <a href="http://www.chartjs.org/">CharJs</a>
<br>
<h3>+ import:</h3>
<pre>
    +copy to forder want setup (public).
    +&lt;script type="text/javascript" src="/Chart.js/Chart.js"&gt;&lt;/script&gt;
</pre>
</div>
<h2>-Chart Types:</h2>
<h3>+ Draw a line chart</h3>
<h3>+ Draw a bar chart</h3>
<h3>+ Draw a rada chart</h3>
<h3>+ Draw a poral area chart</h3>
<h3>+ Draw a pie and doughnut chart</h3>
<h3>+ Using:</h3> <a href="http://www.chartjs.org/docs/"> Document</a>

<h3>example line chart</h3>
<h4>+ code:</h4>
<pre>
    <code>
            var lineChartData = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                    {
                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : "rgba(220,220,220,1)",
                        pointColor : "rgba(220,220,220,1)",
                        pointStrokeColor : "#fff",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,1)",
                        pointColor : "rgba(151,187,205,1)",
                        pointStrokeColor : "#fff",
                        data : [28,48,40,19,96,27,100]
                    }
                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
</pre>
<canvas id="canvas" height="450" width="600"></canvas>
<script src="/Chart.js/Chart.js"></script>
<script>
    var lineChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]
        
    }

var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

</script>