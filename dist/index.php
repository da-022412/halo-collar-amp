<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Shop Halo - Halo with Cesar Millan</title>

    <!-- ## Setup ## -->
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>

    <link rel="canonical" href="https://www.halocollar.com/shop-halo/">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      <?php include("css/styles.css") ?>
    </style>
  </head>
  <body>
    <div>
        <amp-carousel id="carouselWithPreview" width="400" height="300" layout="responsive" type="slides" on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)">
        <amp-img src="https://unsplash.it/400/300?image=10" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=11" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=12" layout="fill" alt="a sample image"></amp-img>
        <amp-img src="https://unsplash.it/400/300?image=13" layout="fill" alt="a sample image"></amp-img>
        </amp-carousel>
        <amp-selector id="carouselWithPreviewSelector" class="carousel-preview" on="select:carouselWithPreview.goToSlide(index=event.targetOption)" layout="container">
        <amp-img option="0" selected src="https://unsplash.it/60/40?image=10" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="1" src="https://unsplash.it/60/40?image=11" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="2" src="https://unsplash.it/60/40?image=12" width="60" height="40" alt="a sample image"></amp-img>
        <amp-img option="3" src="https://unsplash.it/60/40?image=13" width="60" height="40" alt="a sample image"></amp-img>
        </amp-selector>
    </div>
  </body>
</html>