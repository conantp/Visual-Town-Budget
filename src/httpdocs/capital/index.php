<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Raleigh, NC Budget Visualization</title>
  <meta name='description' content='Government budgets can be tough to understand, but now the City of Raleigh, North Carolina is providing the next generation of accessibility in financial information that allows citizens to view, engage, and discuss.'>
  <?php include '../includes/template_elements/resources.php'; ?>
  <!-- PAGE SPECIFIC CSS -->
  <link rel="stylesheet" href="flexslider/flexslider.css">
  <!-- END PAGE SPECIFIC CSS -->

  <!-- PAGE SPECIFIC SCRIPTS -->
  <!-- END PAGE SPECIFIC SCRIPTS -->
</head>

<body class="whatsnew">
  <!-- <img src="splash/images/background.jpg" class="background-image" alt="background image" /> -->
  <div class='header-container'>
    <?php include '../includes/template_elements/top-bar.php'; ?>     
  </div>
  <div>
	  <iframe width="100%" height="600" scrolling="no" src="http://ral.maps.arcgis.com/apps/Embed/index.html?webmap=1cb47fb4459644baaaf7a141b7792c83&amp;extent=-78.7884,35.7223,-78.4293,35.8727&amp;home=true&amp;zoom=true&amp;scale=true&amp;search=true&amp;searchextent=false&amp;legend=true&amp;theme=light"></iframe>
  </div>
  <?php include '../includes/template_elements/footer.php'; ?>
</body>
<!-- SLIDER -->
<script type="text/javascript">
$('document').ready(function(){
  /*$('.flexslider').flexslider({
    animation: "slide",
    // animationLoop: false,
    // itemWidth: 210,
    // itemMargin: 5,
    // pausePlay: true,
    start: function(slider){
      $('body').removeClass('loading');
    }
  });*/
});
</script>
</html>