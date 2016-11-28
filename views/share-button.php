<?php

/* @var $this \yii\web\View */
/* @var $url string */
/* @var $layout string */
/* @var $size string */
/* @var $mobileIframe boolean */
/* @var $meta array */
/* @var $query string */
/* @var $language string */

foreach ($meta as $name => $content) {
    $this->registerMetaTag([
        'name'    => $name,
        'content' => $content,
    ], $name);
}
?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/<?= $language ?>/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your share button code -->
<div class="fb-share-button"
     data-href="<?= $url ?>"
     data-layout="<?= $layout ?>"
     data-size="<?= $size ?>"
    <?= $mobileIframe ? 'data-mobile-iframe="true"' : null ?>>
</div>

