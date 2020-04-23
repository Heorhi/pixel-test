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
</head>
<body>
<div itemscope itemtype="">
  <div itemscope itemtype="http://schema.org/Product">
    <span itemprop="name"><?php echo_param_or_default("title", "some title"); ?></span>
    <span itemprop="description"><?php echo_param_or_default("description", "some description"); ?></span>
    <span itemprop="brand"><?php echo_param_or_default("brand", "some brand"); ?></span>
    <span itemprop="productID"><?php echo_param_or_default("retailer_item_id", "id_1"); ?></span>
    <a itemprop="url" href="<?php echo "https://fb-pixel-test.herokuapp.com/test_schema_org.php".$_SERVER['REQUEST_URI']; ?>">url</a>
    <a itemprop="image" href="<?php echo_param_or_default("image_url", "https://example.org/image.jpg"); ?>">image</a>
    <div itemscope itemtype="http://schema.org/PropertyValue">
      <meta itemprop="propertyID" content="custom_label_0" />
      <meta itemprop="value" content="<?php echo_param_or_default("custom_label_0", "flag_0"); ?>" />
    </div>
    <div itemscope itemtype="http://schema.org/PropertyValue">
      <meta itemprop="propertyID" content="custom_label_1" />
      <meta itemprop="value" content="<?php echo_param_or_default("custom_label_1", "flag_1"); ?>" />
    </div>
    <div itemscope itemtype="http://schema.org/Offer">
      <link itemprop="itemCondition" href="http://schema.org/NewCondition" />
      <link itemprop="availability" href="http://schema.org/InStock" />
      <meta itemprop="price" content="<?php echo_param_or_default("price_amount", "53"); ?>">
      <meta itemprop="priceCurrency" content="<?php echo_param_or_default("price_currency", "USD"); ?>">
    </div>
  </div>
</div>
</body>
</html>
