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
  <p>Testing JSON-LD</p>
</div>
</body>
</html>
