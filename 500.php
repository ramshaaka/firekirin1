<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Server Error - 500 | Firekirin Gaming Platform</title>
    <meta name="description" content="We're experiencing technical difficulties. Please try again later or contact us for support.">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://play.firekirin.in/500.php">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./media/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
    
    <style>
        .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #0E3A19 0%, #FFC71E 100%);
            color: white;
            padding: 20px;
        }
        
        .error-content {
            max-width: 600px;
        }
        
        .error-code {
            font-size: 8rem;
            font-weight: 900;
            margin: 0;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            background: linear-gradient(45deg, #FFC71E, #FFD700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .error-title {
            font-size: 2.5rem;
            margin: 20px 0;
            font-weight: 700;
        }
        
        .error-message {
            font-size: 1.2rem;
            margin: 20px 0;
            line-height: 1.6;
        }
        
        .error-actions {
            margin-top: 40px;
        }
        
        .error-btn {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            background: linear-gradient(45deg, #FFC71E, #FFD700);
            color: #0E3A19;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .error-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 199, 30, 0.3);
        }
        
        .error-btn.secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .error-btn.secondary:hover {
            background: white;
            color: #0E3A19;
        }
        
        @media (max-width: 768px) {
            .error-code {
                font-size: 5rem;
            }
            
            .error-title {
                font-size: 2rem;
            }
            
            .error-message {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1 class="error-code">500</h1>
            <h2 class="error-title">Server Error</h2>
            <p class="error-message">
                Oops! Something went wrong on our end. Our team is working to fix this issue. 
                Please try again in a few minutes or contact us for support.
            </p>
            <div class="error-actions">
                <a href="./" class="error-btn">🔄 Try Again</a>
                <a href="https://www.facebook.com/profile.php?id=61560330823467&mibextid=ZbWKwL" target="_blank" class="error-btn secondary">📱 Contact Support</a>
            </div>
        </div>
    </div>
    
    <!-- Google Analytics -->
    <?php include "google-analytics.php"; ?>
</body>
</html> 