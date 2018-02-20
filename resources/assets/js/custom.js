
//Load chart using ajsx
$.ajax({url: "/user-onboarding/show-chart", success: function(result){
        console.log(result);
            var myChart = Highcharts.chart('container', {
            chart :{
                "type" : 'spline'
            }
            ,
            "title" : {
                "text" :'Onboarding Process'
            },
            "subtitle" : {
                "text" : 'created by: ABC'
            },
            "yAxis" :{
                "title" :{
                    "text" : 'Each week user onboarding percentage'
                }
            },
            "xAxis": {
               "title": {
                 "text" : 'User onbording percentage levels'
               }
            },
            "series": result
        });
    }});




