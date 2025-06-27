<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Test - Firekirin</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .test-section { background: #f5f5f5; padding: 20px; margin: 20px 0; border-radius: 8px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .warning { background: #fff3cd; color: #856404; border: 1px solid #ffeaa7; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        button { background: #0E3A19; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 5px; }
        button:hover { background: #FFC71E; color: #0E3A19; }
    </style>
</head>
<body>
    <h1>🔍 Firekirin Tracking Test Page</h1>
    
    <div class="test-section">
        <h2>📊 Google Analytics Status</h2>
        <div id="ga-status" class="warning">
            <strong>Status:</strong> Checking Google Analytics...
        </div>
        <p><strong>Measurement ID:</strong> <span id="measurement-id">Not set</span></p>
        <p><strong>Instructions:</strong></p>
        <ol>
            <li>Go to <a href="https://analytics.google.com/" target="_blank">Google Analytics</a></li>
            <li>Create a new property for "Firekirin Gaming Platform"</li>
            <li>Copy your Measurement ID (starts with G-)</li>
            <li>Update the <code>google-analytics.php</code> file</li>
            <li>Refresh this page to test</li>
        </ol>
    </div>

    <div class="test-section">
        <h2>🎯 Test Events</h2>
        <p>Click these buttons to test custom event tracking:</p>
        <button onclick="testGameDownload()">Test Game Download Event</button>
        <button onclick="testSignUp()">Test Sign Up Event</button>
        <button onclick="testContactForm()">Test Contact Form Event</button>
        <button onclick="testPageView()">Test Page View Event</button>
    </div>

    <div class="test-section">
        <h2>📈 Real-time Analytics</h2>
        <p>After setting up Google Analytics, you can view real-time data:</p>
        <a href="https://analytics.google.com/analytics/web/#/realtime" target="_blank">
            <button>Open Real-time Reports</button>
        </a>
    </div>

    <div class="test-section">
        <h2>🔧 Troubleshooting</h2>
        <ul>
            <li><strong>No data showing?</strong> Check that your Measurement ID is correct</li>
            <li><strong>Events not tracking?</strong> Open browser console (F12) to check for errors</li>
            <li><strong>Still not working?</strong> Make sure the website is live and accessible</li>
        </ul>
    </div>

    <script>
        // Check if Google Analytics is loaded
        function checkGoogleAnalytics() {
            if (typeof gtag !== 'undefined') {
                document.getElementById('ga-status').className = 'test-section success';
                document.getElementById('ga-status').innerHTML = '<strong>✅ Status:</strong> Google Analytics is loaded and working!';
                
                // Try to get measurement ID from gtag
                if (window.dataLayer && window.dataLayer.length > 0) {
                    const config = window.dataLayer.find(item => item[0] === 'config');
                    if (config && config[2]) {
                        document.getElementById('measurement-id').textContent = config[2];
                    }
                }
            } else {
                document.getElementById('ga-status').className = 'test-section error';
                document.getElementById('ga-status').innerHTML = '<strong>❌ Status:</strong> Google Analytics is not loaded. Check your Measurement ID.';
            }
        }

        // Test event functions
        function testGameDownload() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'game_download', {
                    'game_name': 'Test Game',
                    'page_location': window.location.href
                });
                alert('✅ Game download event sent to Google Analytics!');
            } else {
                alert('❌ Google Analytics not loaded. Please set up your Measurement ID first.');
            }
        }

        function testSignUp() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'sign_up_click', {
                    'page_location': window.location.href
                });
                alert('✅ Sign up event sent to Google Analytics!');
            } else {
                alert('❌ Google Analytics not loaded. Please set up your Measurement ID first.');
            }
        }

        function testContactForm() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'contact_form_submit', {
                    'page_location': window.location.href
                });
                alert('✅ Contact form event sent to Google Analytics!');
            } else {
                alert('❌ Google Analytics not loaded. Please set up your Measurement ID first.');
            }
        }

        function testPageView() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'page_view', {
                    'page_title': 'Tracking Test Page',
                    'page_location': window.location.href
                });
                alert('✅ Page view event sent to Google Analytics!');
            } else {
                alert('❌ Google Analytics not loaded. Please set up your Measurement ID first.');
            }
        }

        // Check GA status after page loads
        window.addEventListener('load', function() {
            setTimeout(checkGoogleAnalytics, 2000); // Wait 2 seconds for GA to load
        });
    </script>

    <?php include "google-analytics.php"; ?>
</body>
</html> 