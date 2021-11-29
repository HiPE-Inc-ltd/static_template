/** FUNCTION SECTION */
const removeElements = (elms) => elms.forEach(el => el.remove());
// helper function from jquery $.css
const css = (el, styles) => {
    for (var property in styles)
        el.style[property] = styles[property];
};
const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    if (c > 0) {
        document.body.setAttribute('style', 'overflow:hidden;');
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, c - c / 28);
        setTimeout(function () {
            document.body.setAttribute('style', 'overflow-x:hidden;');
        }, 500);
    }
};

const scrollClass = (targetElement, classes = {
    default: "scrolling",
    up: 'scroll-up',
    down: 'scroll-down',
    top: 'scrolling-reached-top',
    bottom: 'scrolling-reached-bottom',
}) => {

    /**
     * check if there are unsetted classes
     */
    classes = {
        default: typeof classes.default !== 'undefined' ? classes.default : "scrolling",
        up: typeof classes.up !== 'undefined' ? classes.up : 'scroll-up',
        down: typeof classes.down !== 'undefined' ? classes.down : 'scroll-down',
        top: typeof classes.top !== 'undefined' ? classes.top : 'scrolling-reached-top',
        bottom: typeof classes.bottom !== 'undefined' ? classes.bottom : 'scrolling-reached-bottom',
    }
    /**
     * check if page position is top or bottom then set class
     */
    if (window.pageYOffset === document.body.offsetTop) {
        targetElement.classList.add(classes.top);
    } else if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
        targetElement.classList.add(classes.bottom);
    }
    /**
     * set class when scroll
     */
    let pageY = 0;
    let prevY = 0;
    document.addEventListener('scroll', () => {
        prevY = pageY;
        pageY = window.pageYOffset;
        if (targetElement) {
            // console.log('prevY = ' + prevY + 'currentY = ' + pageY);
            if (window.pageYOffset === document.body.offsetTop) {
                // console.log("you're at the top of the page");
                targetElement.classList.add(classes.top);
                if (targetElement.classList.contains(classes.up) || targetElement.classList.contains(classes.down)) {
                    targetElement.classList.remove(classes.default);
                    targetElement.classList.remove(classes.up);
                    targetElement.classList.remove(classes.down);
                }
            } else if ((pageY - prevY) < 0) {
                // console.log("is scrolling up");
                targetElement.classList.add(classes.default);
                if (targetElement.classList.contains(classes.bottom)) {
                    targetElement.classList.remove(classes.bottom);
                }
                if (targetElement.classList.contains(classes.down)) {
                    targetElement.classList.replace(classes.down, classes.up);
                } else {
                    targetElement.classList.add(classes.up);
                }
            } else if ((pageY - prevY) > 0) {
                // console.log("is scrolling down");
                targetElement.classList.add(classes.default);
                if (targetElement.classList.contains(classes.top)) {
                    targetElement.classList.remove(classes.top);
                }
                if (targetElement.classList.contains(classes.up)) {
                    targetElement.classList.replace(classes.up, classes.down);
                } else {
                    targetElement.classList.add(classes.down);
                }
            }
            if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
                // console.log("you're at the bottom of the page");
                targetElement.classList.add(classes.bottom);
                if (targetElement.classList.contains(classes.up) || targetElement.classList.contains(classes.down)) {
                    targetElement.classList.remove(classes.default);
                    targetElement.classList.remove(classes.up);
                    targetElement.classList.remove(classes.down);
                }
            }
        }
    });
};
const toggleDisplay = function (initiator = {
    elem: null,
    class: null,
    childClass: null
}, target = {
    elem: null,
    class: null
}) {
    this.initiatorElement = initiator.elem;
    this.initiatorClassToggle = initiator.class;
    this.initiatorChildClassToggle = initiator.childClass;
    this.targetElement = target.elem;
    this.targetClassToggle = target.class;
    this.mount = () => {
        let initiator = this.initiatorElement;
        let target = this.targetElement;
        initiator.addEventListener('click', (e) => {
            initiator.classList.toggle(this.initiatorClassToggle);
            this.initiatorChildClassToggle != null ? initiator.children[0].classList.toggle(this.initiatorChildClassToggle) : '';
            target.classList.toggle(this.targetClassToggle);
        });
    }
}
const isScrolledIntoView = (el) => {
    var rect = el.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    // Only completely visible elements return true:
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
};