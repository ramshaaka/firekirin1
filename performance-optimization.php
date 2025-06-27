<?php
// Performance Optimization Functions and Settings

// Enable GZIP compression
if (extension_loaded('zlib')) {
    ini_set('zlib.output_compression', 1);
    ini_set('zlib.output_compression_level', 5);
}

// Set cache headers
function setCacheHeaders($seconds = 3600) {
    header("Cache-Control: public, max-age=$seconds");
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + $seconds) . " GMT");
}

// Image optimization function
function optimizeImage($imagePath, $width = null, $height = null) {
    // This would integrate with an image optimization service
    // For now, return the original path
    return $imagePath;
}

// Lazy loading script
function addLazyLoading() {
    return '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img[data-src]"));
        
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });
            
            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });
    </script>
    <style>
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    .lazy.loaded {
        opacity: 1;
    }
    </style>';
}

// Preload critical resources
function addPreloadTags() {
    return '
    <link rel="preload" href="./css/styles.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <link rel="preload" href="./css/responsive.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <link rel="preload" href="./js/app.js" as="script">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//www.facebook.com">
    ';
}

// Critical CSS inline function
function getCriticalCSS() {
    return '
    <style>
    /* Critical CSS for above-the-fold content */
    body { margin: 0; font-family: Arial, sans-serif; }
    .main-header { background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .home-hero { position: relative; height: 100vh; background: linear-gradient(135deg, #0E3A19, #FFC71E); }
    .g-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    .g-flex { display: flex; }
    @media (max-width: 768px) { .g-flex { flex-direction: column; } }
    </style>';
}

// Service Worker registration
function addServiceWorker() {
    return '
    <script>
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function() {
            navigator.serviceWorker.register("/sw.js")
            .then(function(registration) {
                console.log("ServiceWorker registration successful");
            })
            .catch(function(err) {
                console.log("ServiceWorker registration failed");
            });
        });
    }
    </script>';
}

// Resource hints for better performance
function addResourceHints() {
    return '
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.facebook.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    ';
}

// Performance monitoring
function addPerformanceMonitoring() {
    return '
    <script>
    // Performance monitoring
    window.addEventListener("load", function() {
        setTimeout(function() {
            var perfData = performance.getEntriesByType("navigation")[0];
            var loadTime = perfData.loadEventEnd - perfData.loadEventStart;
            var domContentLoaded = perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart;
            
            // Send to analytics if load time is slow
            if (loadTime > 3000) {
                console.warn("Page load time is slow:", loadTime + "ms");
                // You can send this data to your analytics
            }
        }, 0);
    });
    </script>';
}
?> 