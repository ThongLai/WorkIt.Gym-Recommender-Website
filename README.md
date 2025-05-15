# WorkIT - AI Fitness Recommender

A fitness website with AI-powered workout recommendations based on user preferences.

## Project Structure

### Core Files
- `index.php` - Main page that includes modular components
- `video.php` - Page for viewing workout videos
- `deployment_note.md` - Notes for deployment process
- `user_data_script.txt` - User data management script
- `.gitignore` - Git ignore configuration
- `workit-key.pem` - Authentication key

### Includes (Components)
- `includes/` - Modular components for the website
  - Configuration, header, footer, and recommender system components

### Assets
- `css/` - Stylesheet files
  - `style.css` - Original styling
  - Other CSS files for different components
- `js/` - JavaScript files
  - Site functionality and animation libraries
- `images/` - Website images

### User Authentication
- `sign_up/` - User registration and authentication components

### AI System
- `AI/` - Artificial Intelligence components
  - `data/` - Training data
  - `model/` - AI models
  - `script/` - Python scripts for the recommender
  - `notebook/` - Jupyter notebooks for AI development
  - `.venv/` - Python virtual environment

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
