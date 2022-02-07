document.addEventListener("DOMContentLoaded", function () {
    // start here
    initImageSliderComparisons(); // init image compare related to p-imageCompare and object/project/_imageCompare.scss
    /**
     * FOR PARTSLIST PAGE
     */
    let btnShowMenu = document.querySelector('.partslist__floatMenu__toggle');
    let showMenuLinks = btnShowMenu.parentElement.querySelectorAll('.partslist__floatMenu__item > a');
    scrollToAnchorPoint(showMenuLinks);
    btnShowMenu.addEventListener("click", (e) => {
        btnShowMenu.parentElement.classList.toggle('isOpen');
    });

    let dummyForm = new FormModal('#test_formModal');
    dummyForm.info();
});