<?php
// Google Analytics Tracking Code
// ⚠️ IMPORTANT: Replace GA_MEASUREMENT_ID with your actual Google Analytics Measurement ID
// Example: $ga_measurement_id = 'G-ABC123DEF4'; (your actual ID will look like this)
$ga_measurement_id = 'G-6DFK4FBWKE'; 

?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_measurement_id; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $ga_measurement_id; ?>', {
    'page_title': '<?php echo isset($page_title) ? $page_title : "Firekirin"; ?>',
    'page_location': window.location.href,
    'custom_map': {
      'custom_parameter_1': 'gaming_platform',
      'custom_parameter_2': 'firekirin'
    }
  });

  // Track custom events
  gtag('event', 'page_view', {
    'page_title': '<?php echo isset($page_title) ? $page_title : "Firekirin"; ?>',
    'page_location': window.location.href
  });

  // Track button clicks
  document.addEventListener('DOMContentLoaded', function() {
    // Track game download clicks
    const downloadButtons = document.querySelectorAll('a[href*="download"], a[href*="play"]');
    downloadButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        gtag('event', 'game_download', {
          'game_name': this.textContent.trim(),
          'page_location': window.location.href
        });
      });
    });

    // Track sign up clicks
    const signUpButtons = document.querySelectorAll('a[href*="facebook"][href*="sign"], a[href*="signup"]');
    signUpButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        gtag('event', 'sign_up_click', {
          'page_location': window.location.href
        });
      });
    });

    // Track contact form submissions
    const contactForm = document.querySelector('form[action*="contact"]');
    if (contactForm) {
      contactForm.addEventListener('submit', function() {
        gtag('event', 'contact_form_submit', {
          'page_location': window.location.href
        });
      });
    }
  });
</script>

<!-- Enhanced Ecommerce Tracking (if applicable) -->
<script>
  // Track virtual currency purchases
  function trackPurchase(amount, currency) {
    gtag('event', 'purchase', {
      'transaction_id': 'T_' + Date.now(),
      'value': amount,
      'currency': currency || 'USD',
      'items': [{
        'item_id': 'virtual_currency',
        'item_name': 'Firekirin Credits',
        'price': amount,
        'quantity': 1
      }]
    });
  }

  // Track game plays
  function trackGamePlay(gameName) {
    gtag('event', 'game_play', {
      'game_name': gameName,
      'page_location': window.location.href
    });
  }
</script>

<!-- Facebook Pixel (optional) -->
<!--
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', 'YOUR_FACEBOOK_PIXEL_ID');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=YOUR_FACEBOOK_PIXEL_ID&ev=PageView&noscript=1"
/></noscript>
--> 