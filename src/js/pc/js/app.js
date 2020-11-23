// DAY NIGHT  CYCLE
const hours = new Date().getHours();
const isDayTime = hours >= 6 && hours < 18; // day time 6:00AM and night time 6:00PM
console.log(hours);
var collection = document.querySelectorAll('[data-visual]'),
    i;
var collection_length = collection.length;
if (isDayTime) {
    console.log("Hey it's day time");
} else {
    console.log("Hey it's night time");
    for (i = 0; i < collection_length; i++) {
        if (collection[i].hasAttribute("href")) {
            collection[i].setAttribute("href", collection[i].getAttribute("data-visual"));
        } else {
            collection[i].setAttribute("data-src", collection[i].getAttribute("data-visual"));
        }
    }
}
document.addEventListener('DOMContentLoaded', function () {
    // INIT
    const burger = document.querySelector('#sp-links');
    const btn = document.querySelector('#sp-hamburger');
    const header = document.querySelector('#header');
    const blogSideBar = document.querySelector('#blogSideBar');
    btn.addEventListener("click", (e) => {
        burger.classList.toggle('open');
        btn.classList.toggle('show');
    });

    function setHeaderClass(isScroll, isUp, isDown) {
        if (isScroll) {
            if (!header.classList.contains('scroll')) {
                header.classList.add('scroll');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll')) {
                    blogSideBar.classList.add('scroll');
                }
            }
        } else {
            if (header.classList.contains('scroll')) {
                header.classList.remove('scroll');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll')) {
                    blogSideBar.classList.remove('scroll');
                }
            }
        }

        if (isUp) {
            if (!header.classList.contains('scroll-up')) {
                header.classList.add('scroll-up');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll-up')) {
                    blogSideBar.classList.add('scroll-up');
                }
            }
        } else {
            if (header.classList.contains('scroll-up')) {
                header.classList.remove('scroll-up');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll-up')) {
                    blogSideBar.classList.remove('scroll-up');
                }
            }
        }

        if (isDown) {
            if (!header.classList.contains('scroll-down')) {
                header.classList.add('scroll-down');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll-down')) {
                    blogSideBar.classList.add('scroll-down');
                }
            }
        } else {
            if (header.classList.contains('scroll-down')) {
                header.classList.remove('scroll-down');
            }
            // for specific page only
            if (blogSideBar != null) {
                if (!blogSideBar.classList.contains('scroll-down')) {
                    blogSideBar.classList.remove('scroll-down');
                }
            }
        }
    }

    // FOR HEADER TOGGLE SHOW WHEN SCROLL
    let pageY = 0;
    let prevY = 0;
    window.onscroll = function (ev) {
        prevY = pageY;
        pageY = window.pageYOffset;
        // console.log('prevY = ' + prevY + 'currentY = ' + pageY);
        if (window.pageYOffset === document.body.offsetTop) {
            // console.log("you're at the top of the page");
            setHeaderClass(false, false, false);
        } else if (pageY - prevY < 0) {
            // console.log("is scrolling up");
            setHeaderClass(true, true, false);
        } else if ((pageY - prevY) > 0) {
            // console.log("is scrolling down");
            setHeaderClass(true, false, true);
        }
        // if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
        // console.log("you're at the bottom of the page");
        // }
    };

    // PARTICLE JS FOR DAY AND NIGHT
    if (isDayTime) {
        console.log("Let us enjoy the sunlight");
        setTimeout(function () {
            day();
        }, 1500);
    } else {
        console.log("Let us enjoy the stars");
        setTimeout(function () {
            night();
        }, 1500);
    }

    function day() {
        // PARTICLE JS
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 34,
                    "density": {
                        "enable": true,
                        "value_area": 881.8766334760375
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 292.34779642848423,
                        "size": 4,
                        "duration": 8.851641614084663,
                        "opacity": 0.8689226171624392,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    }

    function night() {
        // PARTICLE JS
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 77,
                    "density": {
                        "enable": false,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "star",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "http://wiki.lexisnexis.com/academic/images/f/fb/Itunes_podcast_icon_300.jpg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 4,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 1,
                    "direction": "right",
                    "random": true,
                    "straight": false,
                    "out_mode": "bounce",
                    "bounce": false,
                    "attract": {
                        "enable": true,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 200,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    }
});
