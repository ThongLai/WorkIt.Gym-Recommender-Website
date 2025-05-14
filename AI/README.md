# WorkIt Gym Exercise Recommender AI

This directory contains the AI component of the WorkIt Gym Recommender system, which uses artificial neural networks to provide personalized exercise recommendations.

## Requirements

- Python 3.10.11
- Poetry package manager
- TensorFlow 2.10.1 (with Windows Native GPU support)
- Pandas
- NumPy
- Scikit-learn
- PyMySQL
- sshtunnel

## Poetry Setup

1. Install Poetry following the [official installation guide](https://python-poetry.org/docs/#installing-with-the-official-installer):
```bash
curl -sSL https://install.python-poetry.org | python3 -
```

2. Set up Poetry in Windows Environment Variables:

**On Windows:**
```
a. Open Windows Start menu and search for "Environment Variables"
b. Click "Edit the system environment variables"
c. Click "Environment Variables" button
d. Under "User variables for [username]", click "New"
e. Variable name: POETRY
   Variable value: %APPDATA%\Python\Scripts
f. Click "OK"
g. Under "User variables for [username]", select "Path" and click "Edit"
h. Click "New" and add: %POETRY%
i. Click "OK" on all windows to save
j. Restart any open terminal windows
```

**On Linux/Mac OS:**
```bash
# Add Poetry to PATH
echo 'export PATH="$HOME/.local/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc
```

**Verify installation:**
```bash
poetry --version
```

**Install poetry-plugin-shell:**
```bash
poetry self add poetry-plugin-shell
```

3. Install dependencies and activate environment:
```bash
cd AI
poetry install
poetry shell
```

### Local Testing

1. First run `Train.ipynb` to train and save the model
2. Use `Ratings Assignments.ipynb` to generate exercise ratings
3. Start the recommender system backend:
```bash
# Using default settings
python script/Predict.py

# Or with custom settings
set FLASK_HOST=0.0.0.0 && set FLASK_PORT=8000 && python script/Predict.py
```

## Server Configuration

The recommender system runs as a Flask server with the following default settings:
- Host: localhost (127.0.0.1)
- Port: 5000
- Debug mode: enabled

To change these settings, you can use environment variables:
```bash
set FLASK_HOST=0.0.0.0  # Allow external connections
set FLASK_PORT=8000     # Change port number
set FLASK_DEBUG=False   # Disable debug mode
```

The server will start and listen for POST requests at:
- Default: http://localhost:5000/predict
- Custom: http://{FLASK_HOST}:{FLASK_PORT}/

## Model Architecture

The recommendation system uses a neural network with:
- Input layer: 4 features (`Type`, `BodyPart`, ``Equipment`, `Level`)
- Hidden layers: 2 layers with 64 neurons each
- Output layer: Softmax activation for exercise prediction

## Data Format

The system expects exercise data with the following columns:
- ID
- Type
- BodyPart
- Equipment
- Level
- Rating


## Structure

```
AI/
├── data/                           # Dataset files
├── model/                          # Trained model files
├── notebook/         
│   ├── Train.ipynb                 # Model training
│   ├── Predict.ipynb               # Prediction implementation
│   └── Ratings Assignments.ipynb   # Rating system logic
├── script/         
│   └── Predict.py                  # Prediction running back-end Flask server
├── pyproject.toml/                 # Poetry project packages configuration
├── poetry.toml/                    # Poetry configuration
├── poetry.lock/                    # Poetry lock file
└── README.md/                      # README file for the AI component
```