<?php

?>

<div class="row raise_the_roof">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body medium_minimum_height">
                            <div class="well">
                                <h1>Compare to Last Year's Conversions</h1>
                                <canvas id="myChart" width="800" height="500">

                            </div>
                            <div class="well">
                                <h1>Male vs. Female Interest Survey</h1>
                                <canvas id="myChart2" width="800" height="500">
                            </div>
                            <div class="well">
                                <h1>Compare to Last Year's Conversions</h1>
                                <canvas id="myChart3" width="800" height="500">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
<script>


$(function() {

        //declare
                var ctx = $("#myChart").get(0).getContext("2d");
                var ctx2 = $("#myChart2").get(0).getContext("2d");
                var ctx3 = $("#myChart3").get(0).getContext("2d");


        //line data
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            fillColor: "rgba(100,220,220,0.5)",
                            strokeColor: "rgba(100,220,220,1)",
                            pointColor: "rgba(100,220,220,1)",
                            pointStrokeColor: "#fff",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                }

        //bar data
                var data2 = {
                    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                };

        // bar data
                var data3 = {
                    labels: ["December","January", "February", "March", "April", "May", "June"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.5)",
                            strokeColor: "rgba(220,220,220,0.8)",
                            highlightFill: "rgba(220,220,220,0.75)",
                            highlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.5)",
                            strokeColor: "rgba(151,187,205,0.8)",
                            highlightFill: "rgba(151,187,205,0.75)",
                            highlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
                Chart.defaults.global.responsive = true;
                var myNewChart = new Chart(ctx).Line(data);
                var myRadarChart = new Chart(ctx2).Radar(data2);
                var myBarChart = new Chart(ctx3).Bar(data3);
            });
</script>

