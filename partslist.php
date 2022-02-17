<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partslist', 'headCSS' => ['page/partslist.css']]) ?>
<section class="l-wrap partslist">
    <ul class="partslist__floatMenu">
        <button class="partslist__floatMenu__toggle">
        </button>
        <?php
        $globalLinks = [
            ['section_heading', 'Heading Component'],
            ['section_button', 'button Component'],
            ['section_button_variation', 'button Component Variation'],
            ['section_card', 'card Component'],
            ['section_card_variation', 'card Component Variation'],
            ['section_form', 'form Component'],
            ['section_form_variation', 'form Component Variation'],
            ['section_project', 'project Component'],
        ];
        foreach ($globalLinks as $links) :
        ?>
            <li class="partslist__floatMenu__item">
                <a href="#<?= $links[0] ?>"><?= $links[1] ?></a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
    <p class="partslist__heading" id="section_heading">
        HEADING COMPONENT
    </p>
    <div class="l-row l-row--wrap partslist__inner">
        <div class="u-col-l-6 u-col-responsive-12">
            <div class="c-heading01">
                <h2 class="c-heading01__main">
                    News
                </h2>
                <h3 class="c-heading01__sub">
                    新着情報
                </h3>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('           
<div class="c-heading01">
    <h2 class="c-heading01__main">
        News
    </h2>
    <h3 class="c-heading01__sub">
        新着情報
    </h3>
</div>')) ?>
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_button">
        BUTTON COMPONENT
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--main">c-button c-button--xl c-button--main</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--main">c-button c-button--xl c-button--main</a>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--main--w">c-button c-button--xl c-button--main--w</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--main--w">c-button c-button--xl c-button--main--w</a>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--accent">c-button c-button--xl c-button--accent</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--accent">c-button c-button--xl c-button--accent</a>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--accent--w">c-button c-button--xl c-button--accent--w</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--accent--w">c-button c-button--xl c-button--accent--w</a>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--sub">c-button c-button--xl c-button--sub</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--sub">c-button c-button--xl c-button--sub</a>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <a href="#" class="c-button c-button--xl c-button--sub--w">c-button c-button--xl c-button--sub--w</a>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<a href="#" class="c-button c-button--xl c-button--sub">c-button c-button--xl c-button--sub</a>')) ?>
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_button_variation">
        BUTTON COMPONENT VARIATION
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
PATTERN
    c-button c-button--<size> c-button--<color>
SIZE - big - small
    [ xl , l , m , s ]
COLOR
    [ main , accent , sub ]
INVERSE COLOR
    [ <color>--w ]

')) ?> 
            </pre>
        </div>
        <div class="u-col-l-6 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
EXTRA 
    c-button--return            * inverse of the current :after design
    c-button--nobullet          * remove all :before & :after
    c-button--nohover           * remove hover effect for button, :before & :after
    c-button--disable           * remove clickable events
    c-button--roundCorner       * make the button sides round
    c-button--smoothCorner      * smooth the corner of the button
')) ?> 
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_card">
        CARD COMPONENT
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            contruction in progress......
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('')) ?>
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_card_variation">
        CARD COMPONENT VARIATION
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
PATTERN
')) ?> 
            </pre>
        </div>
        <div class="u-col-l-6 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
EXTRA 
')) ?> 
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_form">
        FORM COMPONENT
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <input type="text" class="c-text01" name="name" id="name" placeholder="Dummy Text">
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<input type="text" class="c-text01" placeholder="Dummy Text">')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <textarea class="c-textarea01" name="message" id="message" cols="30" rows="10" placeholder="Dummy Text"></textarea>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<textarea class="c-textarea01" name="message" id="message" cols="30" rows="10"></textarea>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <select class="c-select01" name="selection_cars" id="selection_cars">
                <option selected>Please choose..</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<select class="c-select01" name="selection_cars" id="selection_cars">
            <option selected>Please choose..</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
</select>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <label class="c-checkbox01" for="c-checkbox01">
                <input class="c-checkbox01__input" type="checkbox" name="xxxx[]" id="c-checkbox01" value="xxxx">
                <span class="c-checkbox01__parts">
                    c-checkbox01</span>
            </label>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<label class="c-checkbox01" for="c-checkbox01">
                <input class="c-checkbox01__input" type="checkbox" name="xxxx[]" id="c-checkbox01" value="xxxx">
                <span class="c-checkbox01__parts">
                    c-checkbox01</span>
            </label>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <ul class="checkboxGroup">
                <li class="c-checkbox02">
                    <input class="c-checkbox02__input" type="checkbox" name="options[]" id="c-checkbox02-01" value="xxxx">
                    <label class="c-checkbox02__label" for="c-checkbox02-01">
                        <span class="c-checkbox02__check"></span>
                        <span class="c-checkbox02__name">
                            c-checkbox02</span>
                    </label>
                </li>
                <li class="c-checkbox02">
                    <input class="c-checkbox02__input" type="checkbox" name="options[]" id="c-checkbox02-02" value="xxxx">
                    <label class="c-checkbox02__label" for="c-checkbox02-02">
                        <span class="c-checkbox02__check"></span>
                        <span class="c-checkbox02__name">
                            c-checkbox02</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<ul class="checkboxGroup">
                <li class="c-checkbox02">
                    <input class="c-checkbox02__input" type="checkbox" name="options[]" id="c-checkbox02-01" value="xxxx">
                    <label class="c-checkbox02__label" for="c-checkbox02-01">
                        <span class="c-checkbox02__check"></span>
                        <span class="c-checkbox02__name">
                            c-checkbox02</span>
                    </label>
                </li>
                <li class="c-checkbox02">
                    <input class="c-checkbox02__input" type="checkbox" name="options[]" id="c-checkbox02-02" value="xxxx">
                    <label class="c-checkbox02__label" for="c-checkbox02-02">
                        <span class="c-checkbox02__check"></span>
                        <span class="c-checkbox02__name">
                            c-checkbox02</span>
                    </label>
                </li>
            </ul>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <ul class="checkboxGroup">
                <li class="c-checkbox03">
                    <input class="c-checkbox03__input" type="checkbox" name="options[]" id="c-checkbox03-01" value="xxxx">
                    <label class="c-checkbox03__label" for="c-checkbox03-01">
                        <span class="c-checkbox03__check"></span>
                        <span class="c-checkbox03__name">
                            c-checkbox03</span>
                    </label>
                </li>
                <li class="c-checkbox03">
                    <input class="c-checkbox03__input" type="checkbox" name="options[]" id="c-checkbox03-02" value="xxxx">
                    <label class="c-checkbox03__label" for="c-checkbox03-02">
                        <span class="c-checkbox03__check"></span>
                        <span class="c-checkbox03__name">
                            c-checkbox03</span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<ul class="checkboxGroup">
    <li class="c-checkbox03">
        <input class="c-checkbox03__input" type="checkbox" name="options[]" id="c-checkbox03-01" value="xxxx">
            <label class="c-checkbox03__label" for="c-checkbox03-01">
                <span class="c-checkbox03__check"></span>
                <span class="c-checkbox03__name">
                            option 1</span>
            </label>
    </li>
    <li class="c-checkbox03">
        <input class="c-checkbox03__input" type="checkbox" name="options[]" id="c-checkbox03-02" value="xxxx">
            <label class="c-checkbox03__label" for="c-checkbox03-02">
                <span class="c-checkbox03__check"></span>
                <span class="c-checkbox03__name">
                        option 2</span>
            </label>
    </li>
</ul>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <label class="c-checkbox04">
                <input class="c-checkbox04__input" type="checkbox" name="xxxx[]" value="xxxx"><span class="c-checkbox04__parts">c-checkbox04</span>
            </label>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<label class="c-checkbox04">
                <input class="c-checkbox04__input" type="checkbox" name="xxxx[]" value="xxxx"><span class="c-checkbox04__parts">c-checkbox04</span>
            </label>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <div class="c-radio01">
                <input class="c-radio01__input" type="radio" id="c-radio01" value="xxxx" name="c-radio">
                <label class="c-radio01__label" for="c-radio01">
                    <span class="c-radio01__check"></span>
                    <span class="c-radio01__name">
                        c-radio01</span>
                </label>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<div class="c-radio01">
                <input class="c-radio01__input" type="radio" id="c-radio01" value="xxxx" name="c-radio">
                <label class="c-radio01__label" for="c-radio01">
                    <span class="c-radio01__check"></span>
                    <span class="c-radio01__name">
                        c-radio01</span>
                </label>
            </div>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <div class="c-radio02">
                <input class="c-radio02__input" type="radio" id="c-radio02" value="xxxx" name="c-radio">
                <label class="c-radio02__label" for="c-radio02">
                    <span class="c-radio02__check"></span>
                    <span class="c-radio02__name">
                        c-radio02</span>
                </label>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<div class="c-radio02">
                <input class="c-radio02__input" type="radio" id="c-radio02" value="xxxx" name="c-radio">
                <label class="c-radio02__label" for="c-radio02">
                    <span class="c-radio02__check"></span>
                    <span class="c-radio02__name">
                        c-radio02</span>
                </label>
            </div>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <div class="c-radio03">
                <input class="c-radio03__input" type="radio" id="c-radio03" value="xxxx" name="c-radio">
                <label class="c-radio03__label" for="c-radio03">
                    <span class="c-radio03__check"></span>
                    <span class="c-radio03__name">
                        c-radio03</span>
                </label>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<div class="c-radio03">
                <input class="c-radio03__input" type="radio" id="c-radio03" value="xxxx" name="c-radio">
                <label class="c-radio03__label" for="c-radio03">
                    <span class="c-radio03__check"></span>
                    <span class="c-radio03__name">
                        c-radio03</span>
                </label>
            </div>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <label class="c-radio04">
                <input class="c-radio04__input" type="radio" value="xxxx" name="c-radio">
                <span class="c-radio04__parts">c-radio04</span>
            </label>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<label class="c-radio04">
                <input class="c-radio04__input" type="radio" value="xxxx" name="c-radio">
                <span class="c-radio04__parts">c-radio04</span>
            </label>')) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <div class="c-file01" id="test_fileUpload">
                <label class="c-file01__label">Updated Resume (.pdf only)<span>*</span></label>
                <label class="c-file01__button c-button c-button--l c-button--sub c-button--smoothCorner c-button--nobullet">
                    <input type="file" name="resumeFile" id="resumeFile">
                    <i class="fa fa-cloud-upload"></i> Choose File
                </label>
                <p class="c-file01__indicator">No file chosen...</p>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<div class="c-file01" id="test_fileUpload">
                <label class="c-file01__label">Updated Resume (.pdf only)<span>*</span></label><br>
                <label class="c-file01__button c-button c-button--l c-button--sub c-button--smoothCorner c-button--nobullet">
                    <input type="file" name="resumeFile" id="resumeFile">
                    <i class="fa fa-cloud-upload"></i> Choose File
                </label>
                <p class="c-file01__indicator">No file chosen...</p>
            </div>')) ?>
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_form_variation">
        FORM COMPONENT VARIATION
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
PATTERN
')) ?> 
            </pre>
        </div>
        <div class="u-col-l-6 u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('
EXTRA 
')) ?> 
            </pre>
        </div>
    </div>
    <p class="partslist__heading" id="section_project">
        PROJECT COMPONENT
    </p>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <form class="p-form" method="post" action="<?= callScript('contact') ?>" enctype="multipart/form-data" id="test_formModal" form-modal-trigger="false" form-modal="true" form-modal-role="confirmation" form-title="Please Confirm Data Inputted!" form-title-success="Send Successfully" form-title-error="Something went wrong!">
                <label class="c-label01 c-label01--displayNone" for="hidden_id">Job ID</label>
                <input type="hidden" class="c-text01" id="hidden_id" name="hidden_id" value="J001">
                <div class="p-form__container">
                    <label class="c-label01" for="company">Company Name</label>
                    <input type="text" class="c-text01" id="company" name="company" placeholder="ex. Hipe">
                </div>
                <div class="p-form__group">
                    <div class="p-form__container">
                        <label class="c-label01" for="first_name">First Name</label>
                        <input type="text" class="c-text01" id="first_name" name="first_name" placeholder="ex. John">
                    </div>
                    <div class="p-form__container">
                        <label class="c-label01" for="last_name">Last Name</label>
                        <input type="text" class="c-text01" id="last_name" name="last_name" placeholder="ex. doe">
                    </div>
                </div>
                <div class="p-form__group">
                    <div class="p-form__container">
                        <label class="c-label01" for="email">Email</label>
                        <input type="email" class="c-text01" id="email" name="email" placeholder="ex. example@gmail.com">
                    </div>
                    <div class="p-form__container">
                        <label class="c-label01" for="emailConfirm">Confirm Email</label>
                        <input type="email" class="c-text01" id="emailConfirm" name="emailConfirm" placeholder="ex. example@gmail.com">
                    </div>
                </div>
                <div class="p-form__container">
                    <label class="c-label01" for="message">Message</label>
                    <textarea class="c-textarea01" id="message" cols="30" rows="10" name="message" placeholder="ex. I would like to inquire....."></textarea>
                </div>
                <div class="p-form__container">
                    <div class="c-file01" id="test_fileUpload_modal">
                        <label class="c-file01__label" for="resumeFile">Updated Resume (.pdf only)<span>*</span></label><br>
                        <label class="c-file01__button c-button c-button--l c-button--sub c-button--smoothCorner c-button--nobullet">
                            <input type="file" name="resumeFile" id="resumeFile">
                            <i class="fa fa-cloud-upload"></i> Choose File
                        </label>
                        <p class="c-file01__indicator">No file chosen...</p>
                    </div>
                </div>
                <div class="p-form__group p-form__group--buttonArea">
                    <button class="c-button c-button--l c-button--main">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<form class="p-form" method="post" action="<?= callScript("contact") ?>" 
            enctype="multipart/form-data" id="test_formModal" form-modal-trigger="false" form-modal="true" form-modal-role="confirmation" 
            form-title="Please Confirm Data Inputted!" form-title-success="Send Successfully" form-title-error="Something went wrong!">
                <label class="c-label01 c-label01--displayNone" for="hidden_id">Job ID</label>
                <input type="hidden" class="c-text01" id="hidden_id" name="hidden_id" value="J001">
                <div class="p-form__container">
                    <label class="c-label01" for="company">Company Name</label>
                    <input type="text" class="c-text01" id="company" name="company" placeholder="ex. Hipe">
                </div>
                <div class="p-form__group">
                    <div class="p-form__container">
                        <label class="c-label01" for="first_name">First Name</label>
                        <input type="text" class="c-text01" id="first_name" name="first_name" placeholder="ex. John">
                    </div>
                    <div class="p-form__container">
                        <label class="c-label01" for="last_name">Last Name</label>
                        <input type="text" class="c-text01" id="last_name" name="last_name" placeholder="ex. doe">
                    </div>
                </div>
                <div class="p-form__group">
                    <div class="p-form__container">
                        <label class="c-label01" for="email">Email</label>
                        <input type="email" class="c-text01" id="email" name="email" placeholder="ex. example@gmail.com">
                    </div>
                    <div class="p-form__container">
                        <label class="c-label01" for="emailConfirm">Confirm Email</label>
                        <input type="email" class="c-text01" id="emailConfirm" name="emailConfirm" placeholder="ex. example@gmail.com">
                    </div>
                </div>
                <div class="p-form__container">
                    <label class="c-label01" for="message">Message</label>
                    <textarea class="c-textarea01" id="message" cols="30" rows="10" name="message" placeholder="ex. I would like to inquire....."></textarea>
                </div>
                <div class="p-form__container">
                    <div class="c-file01" id="test_fileUpload_modal">
                        <label class="c-file01__label" for="resumeFile">Updated Resume (.pdf only)<span>*</span></label><br>
                        <label class="c-file01__button c-button c-button--l c-button--sub c-button--smoothCorner c-button--nobullet">
                            <input type="file" name="resumeFile" id="resumeFile">
                            <i class="fa fa-cloud-upload"></i> Choose File
                        </label>
                        <p class="c-file01__indicator">No file chosen...</p>
                    </div>
                </div>
                <div class="p-form__group p-form__group--buttonArea">
                    <button class="c-button c-button--l c-button--main">
                        Submit
                    </button>
                </div>
            </form>')) ?>
            </pre>
            <pre>
<?= trim(htmlspecialchars("document.addEventListener('DOMContentLoaded', function () {
    let dummyForm = new FormModal('#test_formModal');
    dummyForm.mount();
    });")) ?>
            </pre>
        </div>
    </div>
    <div class="l-row l-row--wrap partslist__inner u-mb-30">
        <div class="u-col-l-5  u-col-responsive-12">
            <div class="p-imageCompare__container">
                <div class="p-imageCompare__image">
                    <div class="p-imageCompare__frame">
                        <img src="<?= resource('img', 'raw/img_example_after.jpg') ?>">
                    </div>
                </div>
                <div class="p-imageCompare__image p-imageCompare__overlayImage">
                    <div class="p-imageCompare__frame">
                        <img src="<?= resource('img', 'raw/img_example_before.jpg') ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="u-col-l-6  u-col-responsive-12">
            <pre>
<?= trim(htmlspecialchars('<div class="p-imageCompare__container">
                <div class="p-imageCompare__image">
                    <div class="p-imageCompare__frame">
                        <img src="<?= resource("img", "raw/img_example_after.jpg") ?>">
                    </div>
                </div>
                <div class="p-imageCompare__image p-imageCompare__overlayImage">
                    <div class="p-imageCompare__frame">
                        <img src="<?= resource("img", "raw/img_example_before.jpg") ?>">
                    </div>
                </div>
            </div>')) ?>
            </pre>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>