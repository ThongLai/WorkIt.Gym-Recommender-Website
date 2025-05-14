# WorkIT - AI Fitness Recommender

A fitness website with AI-powered workout recommendations based on user preferences.

## Project Structure

### Core Files
- `index.php` - Main page that includes modular components
- `video.php` - Page for viewing workout videos

### Includes (Components)
- `includes/config.php` - Configuration settings
- `includes/header.php` - Common header with navigation
- `includes/footer.php` - Common footer with scripts
- `includes/recommender.php` - AI recommender system logic

### Assets
- `css/` - Stylesheet files
  - `style.css` - Original styling
  - `main.css` - New modular styling for main components
  - `login.css` - Login-specific styling
- `js/` - JavaScript files
  - `main.js` - Main site functionality
  - `wow.min.js` - Animation library
- `images/` - Website images

### AI System
- `AI/` - Artificial Intelligence components
  - `data/` - Training data
  - `model/` - AI models
  - `script/` - Python scripts for the recommender

## Setup Instructions

1. Clone the repository
2. Make sure PHP and a web server (Apache/Nginx) are installed
3. Start the Flask server for the AI recommender:
   ```
   cd AI
   python app.py
   ```
4. Access the website via your web server

## Features

- AI-driven workout recommendations
- User profile and workout tracking
- Video demonstrations of exercises
- Responsive design for all devices
