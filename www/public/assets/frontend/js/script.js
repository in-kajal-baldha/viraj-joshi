
$('.portfolio-slider').owlCarousel({
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout:2000,
    responsiveClass:true,
    center:true,
    dots: false,
    responsive: {
        0: {
            items: 3.5,
            margin: 30,
            
        },
        640: {
            items: 4.5,
            margin: 35,
        },
        1024: {
            items: 5,
            margin: 115,
        }
    }
});

$('.instagram-slider').owlCarousel({
    loop: true,
    responsiveClass:true,
    nav: true,
    dots: false,
    margin: 22,
    center: true,
    responsive: {
        0: {
            items: 2,
        },
        1024: {
            items: 4.6,
        }
    }
});

const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});