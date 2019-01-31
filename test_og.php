<!-- Example -->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Facebook Pixel Code -->
<?php
  function echo_param_or_default($param_name, $default_value) {
      if (isset($_GET[$param_name])) { 
        echo $_GET[$param_name];
      } else {
        echo $default_value;
      };
  }
?>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php echo_param_or_default("pixel_id", "1318150291580859"); ?>');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent', {
    content_ids: ['heroku_item'],
  });
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?php echo_param_or_default("pixel_id", "1318150291580859"); ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  
<!-- Open Graph Metadata -->
  <meta property="og:type" r="website">
  <meta property="product:retailer_item_id" content="<?php echo_param_or_default("retailer_item_id", "id_01"); ?>">
  <meta property="og:url" content="<?php echo "http://cat-test-sm-px-100.herokuapp.com".$_SERVER['REQUEST_URI']; ?>">
  <meta property="og:title" content="<?php echo_param_or_default("title", "some title"); ?>">
  <meta property="og:description" content="<?php echo_param_or_default("description", "some description"); ?>">
  <meta property="og:image" content="<?php echo_param_or_default("image_url", "https://example.org/image.jpg"); ?>">
  <meta property="og:image" content="https://example.org/additional_image.jpg">
  <meta property="og:site_name" content="Hero Lightime kolyanich 2">
  <meta property="product:brand" content="<?php echo_param_or_default("brand", "some brand"); ?>">
  <meta property="product:availability" content="<?php echo_param_or_default("availability", "in stock"); ?>">
  <meta property="product:condition" content="<?php echo_param_or_default("condition", "new"); ?>">
  <meta property="product:price:amount" content="<?php echo_param_or_default("price_amount", "53"); ?>">
  <meta property="product:price:currency" content="<?php echo_param_or_default("price_currency", "USD"); ?>">
  <meta property="product:custom_label_0" content="<?php echo_param_or_default("custom_label_0", "flag_0"); ?>">
  <meta property="product:custom_label_1" content="<?php echo_param_or_default("custom_label_1", "flag_1"); ?>">
<!-- End Open Graph Metadata -->
</head>
</body>
</html>
