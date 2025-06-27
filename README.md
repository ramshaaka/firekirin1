# Firekirin PHP - Heroku Deployment

## How to Deploy to Heroku

1. **Install the Heroku CLI** (if not already):
   https://devcenter.heroku.com/articles/heroku-cli

2. **Login to Heroku:**
   ```sh
   heroku login
   ```

3. **Create a new Heroku app:**
   ```sh
   heroku create your-app-name
   ```

4. **Deploy your code:**
   ```sh
   git init
   git add .
   git commit -m "Initial commit"
   heroku git:remote -a your-app-name
   git push heroku master
   ```

5. **Visit your app:**
   ```sh
   heroku open
   ```

---

### Notes
- This project uses PHP and is ready for Heroku with the included `composer.json` and `Procfile`.
- Static assets (css, js, media) are served as-is.
- If you need custom domain or SSL, configure via Heroku dashboard.
- For environment variables, use `heroku config:set`. 