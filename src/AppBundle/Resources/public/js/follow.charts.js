
$(document).ready(function(){
    var memberId = $('.chart').attr('data_memberid');
    var url = Routing.generate('app_judoka_ajax_weight');
    var weights = [];
    console.log(url);
    console.log(memberId);
    $.ajax({
        type: "POST",
        url: url,
        data: 'memberId='+memberId,
        cache: false,
        success: function(data){
            weights = data['weights'];
            console.log(weights);
            var dayOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];

            var plot = $.plot($(".chart"),
                [ { data: weights, label: "Poids", color: "#ee7951"} ], {
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    grid: { hoverable: true, clickable: true },
                    yaxis: { min: 75, max: 85 },
                    xaxes: [{
                        mode: "time",
                        timeformat: "%0d/%0m/%y"
                    }],
                    mode: "time",
                    timeformat: "%m/%d",
                });
        }
    });

    // === Point hover in chart === //
    var previousPoint = null;
    $(".chart").bind("plothover", function (event, pos, item) {

        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $('#tooltip').fadeOut(200,function(){
					$(this).remove();
				});
                var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);

                maruti.flot_tooltip(item.pageX, item.pageY,item.series.label + " of " + x + " = " + y);
            }

        } else {
			$('#tooltip').fadeOut(200,function(){
					$(this).remove();
				});
            previousPoint = null;
        }
    });
    

	
});
