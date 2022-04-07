<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */



$title = $data['title'];


?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?> - <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
        <?= $this->Html->css('all.min.css') ?>
        <?= $this->Html->css('jarallax.css') ?>
        <?= $this->Html->css('jquery.magnific-popup.css') ?>
        <?= $this->Html->css('nouislider.min.css') ?>
        <?= $this->Html->css('nouislider.pips.css') ?>
        <?= $this->Html->css('odometer.min.css') ?>
        <?= $this->Html->css('swiper.min.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('tiny-slider.min.css') ?>
        <?= $this->Html->css('stylesheet.css') ?>

        <?= $this->Html->css('owl.carousel.min.css') ?>
        <?= $this->Html->css('owl.theme.default.min.css') ?>
        <?= $this->Html->css('twentytwenty.css') ?>
        <?= $this->Html->css('jquery.bxslider') ?>
    
    <?= $this->Html->css('aivons.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('page.css') ?>
    <?= $this->Html->css('aivons-responsive.css') ?>
    <?= $this->Html->css('aivons-rtl.css') ?>
    <?= $this->Html->css('aivons-toolbar.css') ?>
    
    <?= $this->Html->css('colors/color-default.css') ?>
    
    <?= $this->Html->css('modes/aivons-normal.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
    <?= $this->element('navbar') ?>

    <?= $this->Flash->render() ?>
  
        <?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>
</div>
<?= $this->Html->script('jquery-3.5.1.min') ?>
<?= $this->Html->script('bootstrap.bundle.min') ?>
<?= $this->Html->script('jarallax.min') ?>
<?= $this->Html->script('jquery.ajaxchimp.min') ?>
<?= $this->Html->script('jquery.appear.min') ?>
<?= $this->Html->script('jquery.circle-progress.min') ?>
<?= $this->Html->script('jquery.magnific-popup.min') ?>
<?= $this->Html->script('jquery.validate.min') ?>
<?= $this->Html->script('nouislider.min') ?>
<?= $this->Html->script('odometer.min') ?>
<?= $this->Html->script('swiper.min') ?>
<?= $this->Html->script('tiny-slider.min') ?>
<?= $this->Html->script('wNumb.min') ?>
<?= $this->Html->script('wow') ?>
<?= $this->Html->script('isotope') ?>
<?= $this->Html->script('countdown.min') ?>
<?= $this->Html->script('owl.carousel.min') ?>
<?= $this->Html->script('twentytwenty') ?>
<?= $this->Html->script('jquery.event.move') ?>
<?= $this->Html->script('jquery.bxslider.min') ?>
<script>
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 2000
                })
            });
        </script>
<?= $this->Html->script('aivons') ?>
<?= $this->Html->script('jQuery.style.switcher.min') ?>
<?= $this->Html->script('lang') ?>
<?= $this->Html->script('color-switcher.js') ?>

</body>
</html>
