// // START OF menu initialization

$(document).ready(function () {
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
});

// // END OF drop down menu initiatialization
// //______________________________________________________


// //______________________________________________________
// // START OF tab initialization
$('.tabs').tabs();
// // END OF tab initialization
// //______________________________________________________



// // START OF Materialize slider
// //______________________________________________________


if (document.getElementsByClassName('slider')[0]) {
	document.addEventListener('DOMContentLoaded', function () {
		var elems = document.querySelectorAll('.slider');
		var instances = M.Slider.init(elems);
		document.getElementById('prev').addEventListener('click', function () {
			instances[0].prev();
		})
		document.getElementById('next').addEventListener('click', function () {
			instances[0].next();
		})
	})
};

// // END OF Materialize slider
// //______________________________________________________

//_________________________________________________________
// START OF Materialize paralax
$(document).ready(function () {
	$('.parallax').parallax();
});
// END OF Materialize paralax
//_________________________________________________________

// //______________________________________________________
// // START OF jQuery image slider

$(document).ready(function () {

	$('.next').on('click', function () {
		nextImg();
	});

	$('.prev').on('click', function () {
		prevImg()
	});

	setInterval("nextImg()", 3000);

});

function nextImg() {
	var currentImg = $('.active-img');
	var nextImg = currentImg.next();

	if (nextImg.length) {
		currentImg.removeClass('active-img').css('z-index', '1');
		nextImg.addClass('active-img').css('z-index', '2');
	} else {
		$('#first-image').addClass('active-img').css('z-index', '2');
	}
}

function prevImg() {
	var currentImg = $('.active-img');
	var prevImg = currentImg.prev();

	if (prevImg.length) {
		currentImg.removeClass('active-img').css('z-index', '1');
		prevImg.addClass('active-img').css('z-index', '2');
	} else {
		$('#last-image').addClass('active-img').css('z-index', '2');
	}
}

// // END OF jQuery image slider
//______________________________________________________


// //______________________________________________________
// // START OF vanillaJS image slider
if (document.getElementsByClassName('vanilla-slider')[0]) {

	var i = 0;
	var images = [];
	var time = 3000;

	// add images here
	images[0] = 'resources/galaDarbsRCS/natureSliderImg1.jpg'
	images[1] = 'resources/galaDarbsRCS/natureSliderImg2.jpg'
	images[2] = 'resources/galaDarbsRCS/natureSliderImg3.jpg'
	images[3] = 'resources/galaDarbsRCS/natureSliderImg4.jpg'

	function changeImg() {
		document.slide.src = images[i];

		if (i < images.length - 1) {
			i++;
		} else {
			i = 0
		}
		setTimeout("changeImg()", time);
	};
	changeImg();
}

// // END OF vanillaJS image slider
// //______________________________________________________