$(document).ready(function() {

	smoothScroll.init({
			speed: 1000,
			easing: 'easeInOutCubic',
			offset: 0,
			updateURL: false
	});	

	// Masking
	$("#date").mask("99/99/9999");
    $("#phone").mask("(999) 999-9999");
    $("#ipAddress").mask('099.099.099.099');
    $("#ccard").mask("0000-0000-0000-0000");
    $('#money').mask('#.##0,00', {reverse: true});


    // Color picker
    $(".colorpicker").spectrum({
        color: "#FFC107",
    });

    $("#colorpickerShow")
    	.spectrum({
	        color: "#FFC107",
	        preferredFormat: "hex"
	    })
    	.show();

    
    $(".cp-input").spectrum("option", "showInput");

    $("#cp-selection-palette").spectrum({
        color: "#f00",
        showPalette: true,
	    showSelectionPalette: true,
	    palette: [ ],
	    localStorageKey: "colorpicker-selection", // Any Spectrum with the same string will share selection
    });

    $("#cp-palette-only").spectrum({
        showPaletteOnly: true,
	    showPalette:true,
	    color: 'indigo',
	    palette: [
	        ['black', 'white', 'indigo',
	        'rgb(255, 128, 0);', 'hsv 100 70 50'],
	        ['red', 'yellow', 'green', 'blue', 'violet']
	    ]
    });

    $("#cp-palette-toggle").spectrum({
        showPaletteOnly: true,
	    togglePaletteOnly: true,
	    togglePaletteMoreText: 'more',
	    togglePaletteLessText: 'less',
	    color: 'blanchedalmond',
	    palette: [
	        ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
	        ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
	        ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"]
	    ]
    });

    // Color picker full example
    $("#colorPickerfull").spectrum({
	    color: "#FFC107",
	    showInput: true,
	    className: "full-spectrum",
	    showInitial: true,
	    showPalette: true,
	    showSelectionPalette: true,
	    maxSelectionSize: 10,
	    preferredFormat: "hex",
	    move: function (color) {
	        
	    },
	    show: function () {
	    
	    },
	    beforeShow: function () {
	    
	    },
	    hide: function () {
	    
	    },
	    change: function() {
	        
	    },
	    palette: [
	        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
	        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
	        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
	        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)"], 
	        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
	        "rgb(208, 224, 227)", "rgb(201, 218, 248)",
	        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
	        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
	        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
	        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
	        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
	        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
	        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
	        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)"]
	    ]
	});   


    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15 // Creates a dropdown of 15 years to control year
	});

	$('.clockpicker').clockpicker({
		//autoclose: true,
		placement: 'top',
	    align: 'left',
	    donetext: 'Done',
		'default': 'now',
		twelvehour: true

	});

	// Selectpicker validation
	$("#validateSelect")
		.find('[name="langauges"]')
			.on("change", function(){
				$('#langauges').valid();
			})
			.end()
		.validate({ // the "name=" attribute is the hook for the rules.
			rules: {	            
	            'langauges': {
	                required: true,
	                minlength: 1
	            }
	        },
	        messages: {
	            'langauges': {
	                required: 'Please select your langauges.'
	            }
	        }
		});

	// Typeahead
		var substringMatcher = function(strs) {
		return function findMatches(q, cb) {
	    var matches, substringRegex;

	    // an array that will be populated with substring matches
	    matches = [];

	    // regex used to determine if a string contains the substring `q`
	    substrRegex = new RegExp(q, 'i');

	    // iterate through the pool of strings and for any string that
	    // contains the substring `q`, add it to the `matches` array
	    $.each(strs, function(i, str) {
	      if (substrRegex.test(str)) {
	        matches.push(str);
	      }
	    });

	    cb(matches);
	  };
	};

	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
	  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
	  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
	  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
	  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
	  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
	  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
	  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
	  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];

	$('#the-basics .typeahead').typeahead({
	  hint: true,
	  highlight: true,
	  minLength: 1
	},
	{
	  name: 'states',
	  source: substringMatcher(states)
	});

	// jQuery knob
	$(".jknob").knob();

	

	/*----------------------------------------
		noUi slider
	------------------------------------------*/	
	
	var typeSlider = document.getElementById("typeSlider");
	noUiSlider.create(typeSlider,{
		start: 20, // value of the slider
      	connect: "lower", // shows a color fill from 0 to value.
      	range: {
        	min: 0, // the min max values of the slider
        	max: 100
    	}
	});

	var typeSliderScale = document.getElementById("typeSliderScale");
	noUiSlider.create(typeSliderScale,{
		start: 30,
      	connect: "lower",
      	range: {
        	min: 0,
        	max: 100
    	}
	});

	var typeSliderShadow = document.getElementById("typeSliderShadow");
	noUiSlider.create(typeSliderShadow,{
		start: 40,
      	connect: "lower",
      	range: {
        	min: 0,
        	max: 100
    	}
	});

	// To format the value noUiSlider has support for the wNumb formatting library.
	// examples: http://refreshless.com/nouislider/slider-read-write/
	// Libary: http://refreshless.com/wnumb/

	// For the balloon slider set "tooltips" to "true". 
	var typeSliderBalloon = document.getElementById('typeSliderBalloon');

	noUiSlider.create(typeSliderBalloon,{
		start: 50,
		tooltips: true,
		connect: "lower",
		step: 1,
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		})
	});

	var stepSlider = document.getElementById('slider-step');
	noUiSlider.create(stepSlider, {
		start: [ 4000 ],
		behaviour: "snap",
		connect: "lower",
		step: 1000,
		range: {
			'min': [  2000 ],
			'max': [ 10000 ]
		}
	});
	// output the value
	var sliderValueStep = document.getElementById('slider-step-value');
	stepSlider.noUiSlider.on('update', function ( values, handle ) {
		sliderValueStep.innerHTML = values[handle];
	});

	var twohandles = document.getElementById('slider-twohandles');
	noUiSlider.create(twohandles,{
		start: [ 20, 50 ],
		behaviour: 'drag',
		connect: true,
		step: 1,
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		})
	});

	var twohandlesfixed = document.getElementById('slider-twohandlesfixed');
	noUiSlider.create(twohandlesfixed,{
		start: [ 30, 60 ],
		behaviour: 'drag-fixed',
		connect: true,
		step: 1,
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		})
	});

	//single handle with value
	var sliderRange = document.getElementById('sliderRange');
	noUiSlider.create(sliderRange,{
		start: [ 40 ],
		connect: "lower",
		step: 1,
		range: {
			'min': [  10 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		})
	});
	// output the value
	var sliderValue = document.getElementById('slider-range-value');
	sliderRange.noUiSlider.on('update', function ( values, handle ) {
		sliderValue.innerHTML = values[handle];
	});
	

	// double handle with value
	var sliderRanges = document.getElementById('slider-ranges');
	noUiSlider.create(sliderRanges,{
		start: [ 20, 60 ],
		behaviour: "drag",
		connect: true,
		step: 1,
		range: {
			'min': [  0 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		})
	});
	// output min and max value
	var marginMin = document.getElementById('slider-ranges-value-lower'),
		marginMax = document.getElementById('slider-ranges-value-upper');

	sliderRanges.noUiSlider.on('update', function ( values, handle ) {
		if ( handle ) {
			marginMax.innerHTML = values[handle];
		} else {
			marginMin.innerHTML = values[handle];
		}
	});;


	
	// slider horizontal with pips-range
	var sliderPips = document.getElementById('slider-pips');
	noUiSlider.create(sliderPips, {
		start: [ 40 ],
		connect: "lower",
		tooltips: true,
		range: {
			'min': [   0 ],
			'25%': [  25 ],
			'50%': [  50 ],
			'75%': [  75 ],
			'max': [ 100 ]
		},
		format: wNumb({
			decimals: 0
		}),
		pips: {
			mode: 'range',
			density: 2,
			step: 1,
			format: wNumb({
				decimals: 0
			})
		}
	});

	// The following code is for demo purpose only.
	$('.slider-colors').on('click', 'li', function(){
		var color = $(this).attr('class'),
			sliderClass = $('#sliderColor');
		
		$('.demo-slider')
			.removeClass('slider-theme slider-info slider-warning slider-danger')
			.addClass('slider-' + color);
		sliderClass.html('');
		if (color != 'default' ) {
			sliderClass.html("<span class='sub-text'>Add Class: </span><code>slider-"+color+"</code>");
		}  
	});	

});