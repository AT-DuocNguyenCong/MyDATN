    var dataTemp; // temp
    var dataPh; //pH

    /**
     * Request data from the server, add it to the graph and set a timeout to request again
     */
    function requestDataTemp() {
        $.ajax({    
            url: '/temp', 
            success: function(point) {
                var series = dataTemp.series[0],
                    shift = series.data.length > 20; // shift if the series is longer than 20
                // add the point
                dataTemp.series[0].addPoint(eval(point), true, shift);
              
                // call it again after one second
                setTimeout(requestDataTemp, 1000);   
            },
            cache: false
        });
    }

    /**
     * Request data from the server, add it to the graph and set a timeout to request again
     */
    function requestDataPH() {
        $.ajax({
            url: '/ph', 
            success: function(point) {
                console.log(point);
                var series1 = dataPh.series[0],
                    shift1 = series1.data.length > 20; // shift if the series is longer than 20
                // add the point
                dataPh.series[0].addPoint(eval(point), true, shift1);
                
                // call it again after one second
                setTimeout(requestDataPH, 1000);  
            },
            cache: false
        });
    }   
    $(document).ready(function() {
        dataTemp = new Highcharts.Chart({
            chart: {
                renderTo: 'chart-temp',
                defaultSeriesType: 'spline',
                events: {
                    load: requestDataTemp
                }
            },
            title: {
                text: 'BIỂU ĐỒ THEO DÕI THÔNG SỐ NHIỆT ĐỘ'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150,
                maxZoom: 20 * 1000
            },
            yAxis: {
                minPadding: 0.2,
                maxPadding: 0.2,
                title: {
                    text: 'Thông số nhiệt độ',
                    margin: 80
                }
            },
            series: [{
                name: 'Dữ liệu nhiệt độ',
                data: []
            }]
        });

        dataPh = new Highcharts.Chart({
            chart: {
                renderTo: 'chart-ph',
                defaultSeriesType: 'spline',
                events: {
                    load: requestDataPH
                }
            },
            title: {
                text: 'BIỂU ĐỒ THEO DÕI THÔNG SỐ PH'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150,
                maxZoom: 20 * 1000
            },
            yAxis: {
                minPadding: 0.2,
                maxPadding: 0.2,
                title: {
                    text: 'Thông số PH',
                    margin: 80
                }
            },
            series: [{
                name: 'Dữ liệu PH',
                data: []
            }]
        });
    });