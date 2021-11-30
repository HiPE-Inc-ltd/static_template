<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partslist', 'headCSS' => ['page/partslist.css']]) ?>
<section class="l-wrap partslist">
    <p class="partslist__heading">
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

    <p class="partslist__heading">
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
    <p class="partslist__heading">
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
    <p class="partslist__heading">
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
    <p class="partslist__heading">
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
</section>
<?php
includeWithVariables('includes/footer.php', []) ?>