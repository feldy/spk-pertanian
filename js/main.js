
var createChart = function(tanaman, score) {
	// var ctx = $("#myChart").get(0).getContext("2d");
	// var data = {
	// 	// labels : ["January","February","March","April","May","June","July"],
	// 	labels : tanaman,
	// 	datasets : [
	// 		{
	// 			fillColor : "rgba(220,220,220,0.5)",
	// 			strokeColor : "rgba(220,220,220,1)",
	// 			pointColor : "rgba(220,220,220,1)",
	// 			pointStrokeColor : "#fff",
	// 			// data : [65,59,90,81,56,55,40]
	// 			data : score
	// 		}
	// 	]
	// }
	// new Chart(ctx).Bar(data, {
	// 	//Boolean - If we show the scale above the chart data			
	// scaleOverlay : true,
	
	// //Boolean - If we want to override with a hard coded scale
	// scaleOverride : true,
	
	// //** Required if scaleOverride is true **
	// //Number - The number of steps in a hard coded scale
	// scaleSteps : 19,
	// //Number - The value jump in the hard coded scale
	// scaleStepWidth : 5,
	// //Number - The scale starting value
	// scaleStartValue : 10,

	// //String - Colour of the scale line	
	// scaleLineColor : "rgba(0,0,0,.1)",
	
	// //Number - Pixel width of the scale line	
	// scaleLineWidth : 1,

	// //Boolean - Whether to show labels on the scale	
	// scaleShowLabels : true,
	
	// //Interpolated JS string - can access value
	// scaleLabel : "<%=value%>",
	
	// //String - Scale label font declaration for the scale label
	// scaleFontFamily : "'Arial'",
	
	// //Number - Scale label font size in pixels	
	// scaleFontSize : 12,
	
	// //String - Scale label font weight style	
	// scaleFontStyle : "normal",
	
	// //String - Scale label font colour	
	// scaleFontColor : "#666",	
	
	// ///Boolean - Whether grid lines are shown across the chart
	// scaleShowGridLines : true,
	
	// //String - Colour of the grid lines
	// scaleGridLineColor : "rgba(0,0,0,.05)",
	
	// //Number - Width of the grid lines
	// scaleGridLineWidth : 1,	

	// //Boolean - If there is a stroke on each bar	
	// barShowStroke : true,
	
	// //Number - Pixel width of the bar stroke	
	// barStrokeWidth : 2,
	
	// //Number - Spacing between each of the X value sets
	// barValueSpacing : 5,
	
	// //Number - Spacing between data sets within X values
	// barDatasetSpacing : 1,
	
	// //Boolean - Whether to animate the chart
	// animation : true,

	// //Number - Number of animation steps
	// animationSteps : 60,
	
	// //String - Animation easing effect
	// animationEasing : "easeOutQuart",

	// //Function - Fires when the animation is complete
	// onAnimationComplete : null
	// });
	
	
	
	


	$(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        var s1 = score.map(Number);
        var ticks = tanaman;
		
		// console.log('created', s1, ticks); 
        plot1 = $.jqplot('myChart', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            // stackSeries: true,
            // captureRightClick: true,
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                },
                yaxis: {
	                pad: 1.05,
	                tickOptions: {formatString: '%d%'}
	            }
            },
            highlighter: { show: false }
        });
    });	
}