
$(function() {

	/* - - Controls - - - */

    console.log( "ready!" );
    $('#playButton').click(function(){
    	$("#audio").trigger('play');
	});
	$('#pauseButton').click(function(){
    	$("#audio").trigger('pause');
	});
	$('#upButton').click(function(){
		volumeUp();
		console.log("+");
	});
	$('#downButton').click(function(){
    	volumeDown();
    	console.log("-");
	});

	/* - - End Controls - - - */

	/* - - - D3 CANVAS - - - */


	var svgHeight = 100;
		var svgWidth = window.innerWidth;;
		var barPadding = 1;

		function createSvg(parent, height, width) {
			return d3.select(parent)
					 .append('svg')
					 .attr('height', height)
					 .attr('width', width);
		}

		var graph = createSvg('#graph', svgHeight, svgWidth);
		var dataset = [12, 19, 8, 17, 22, 9, 15, 12, 22, 25, 17, 12, 25, 16];

		graph.selectAll('rect')
		   .data(dataset)
		   .enter()
		   .append('rect')
		   .attr('width', svgWidth / dataset.length - barPadding)
		   .attr('height', function (d) {
		   		return d * 4;
		   })
		   .attr('x', function (d, i) {
		   		return i * (svgWidth / dataset.length);
		   })
		   .attr('y', function (d) {
		   		return svgHeight - (d * 4); // Align the bars to the bottom of the SVG.
	   });

	/* - - - END D3 CANVAS - - - */


	var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
	var audioElement = document.getElementById('audio');
	var audioSrc = audioCtx.createMediaElementSource(audioElement);
	var analyser = audioCtx.createAnalyser();

	// Bind our analyser to the media element source.
	audioSrc.connect(analyser);
	audioSrc.connect(audioCtx.destination);


});



function volumeUp(){
    var volume = $("#audio").prop("volume")+0.2;
    if(volume >1){
        volume = 1;
    }
    $("#audio").prop("volume",volume);
}

function volumeDown(){
    var volume = $("#audio").prop("volume")-0.2;
    if(volume <0){
        volume = 0;
    }
    $("#audio").prop("volume",volume);
}