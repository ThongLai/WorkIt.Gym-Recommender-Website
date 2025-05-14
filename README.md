# WorkIt - AI Exercise Recommender Website

Welcome to the WorkIt AI Exercise Recommender Website, a web-based application designed to assist users in finding the perfect gym exercises tailored to their needs.

## Project Overview

WorkIt is an innovative web application that leverages artificial intelligence to recommend exercises based on user input. The application is currently built using a combination of front-end and back-end static web technologies, including HTML, CSS, JavaScript, and PHP. (*Note: This is just a quick demo work, the project will be migrated to dynamic web technologies soon!).

## Tech Stack

* **Front-end:** HTML5, CSS3, JavaScript
* **Back-end:** Python, Flask
* **Database:** MySQL RDS
* **AI Model:** TensorFlow, scikit-learn
* **Deployment:** Amazon Web Services (AWS) including `EC2`, `S3`, `Aurora and RDS`
* **Package Manager:** Poetry
* **Operating System:** Windows, Linux

These technologies work together to provide a scalable, secure, and reliable platform for the WorkIt AI Exercise Recommender Website.

## File Structure

The project is organized into the following directories:

* `AI/`: Contains the artificial intelligence component of the project, including dataset files, trained model files, and notebooks for training and prediction.
* `css/`: Contains the main stylesheet for the website.
* `images/`: Contains images used on the website.
* `js/`: Contains JavaScript files used on the website.
* `sign_up/`: Contains the sign-up page for the website.
* `root/`: Contains the main homepage, recommendation page, and video display page.

## AI Component

The AI component of the project is built using Python and utilizes the following files:

* `data/megaGymDataset_original.csv`: The original dataset used for training the model.
* `data/megaGymDataset.csv`: The processed dataset used for training the model.
* `model/`: Contains trained model files.
* `notebook/`: Contains notebooks for training and prediction, including `Train.ipynb`, `Predict.ipynb`, and `Ratings Assignments.ipynb`.
* `script/Predict.py`: Contains the prediction implementation using Flask.

## Website

The website is built using HTML, CSS, and JavaScript, and utilizes the following files:

* `index.php`: The main homepage of the website.
* `recommender.php`: The recommendation page of the website.
* `video.php`: The video display page of the website.
* `css/style.css`: The main stylesheet for the website.
* `js/`: Contains JavaScript files used on the website.

## Installation

To run the project locally, follow these steps:

1. Clone the repository: `git clone https://github.com/your-repo/WorkIt-Gym-Recommender-Website.git`
2. Navigate to the project directory: `cd WorkIt-Gym-Recommender-Website`
3. Install dependencies: `poetry install`
4. Run the Flask server: `python script/Predict.py`
5. Open the website in your web browser: `http://localhost:5000`

## Deployment

The WorkIt AI Exercise Recommender Website is deployed on Amazon Web Services (AWS), utilizing a combination of services to ensure scalability, reliability, and performance. The project is deployed using the following AWS services:

* **EC2**: Provides a scalable and secure environment for the Flask server, allowing for easy management and monitoring of the application.
* **RDS**: Offers a managed relational database service, enabling the storage and management of user data, exercise recommendations, and other relevant information.
* **S3**: Provides a durable and highly available object store, used for storing and serving static assets, such as images, and CSS files.

```
 [User]
 |
 [Internet]
 |
 [Nginx/Apache on EC2]
 |         \
 [PHP site]   [Reverse proxy to Flask AI backend]
 |                |
 [MySQL RDS]     [Python AI Model]
 |
 [S3 for static assets]
```

This architecture allows for a scalable and secure deployment of the WorkIt AI Exercise Recommender Website, with the PHP site handling user requests, the reverse proxy routing requests to the Flask AI backend, and the MySQL RDS and Python AI Model handling data storage and processing.

## Contributing

If you'd like to contribute to the project, please submit a pull request or open an issue in this repository. Your contributions are welcome!

## Complete project's structure

```plaintext
WorkIt.Gym-Recommender-Website/
├─ AI/
├── data/                                       # Dataset files
│   ├── megaGymDataset_original.csv             # Original dataset
│   └── megaGymDataset.csv                      # Processed dataset
├── model/                                      # Trained model files
├── notebook/                   
│   ├── Train.ipynb                             # Model training
│   ├── Predict.ipynb                           # Prediction implementation
│   └── Ratings Assignments.ipynb               # Rating system logic
├── script/                     
│   └── Predict.py                              # Prediction running back-end Flask server
├── pyproject.toml/                             # Poetry project packages configuration
├── poetry.toml/                                # Poetry configuration
├── poetry.lock/                                # Poetry lock file
└── README.md/                                  # README file for the AI component
├── css/
│   └── style.css                               # Main stylesheet
├── images/                                     # Website images
├── js/                                         # Website JavaScript files
├── sign_up/                                    # Sign-up page
├── .gitignore                                  # Git ignore file
├── index.php                                   # Main homepage
├── recommender.php                             # Recommendation page
├── video.php                                   # Video display page
└── README.md                                   # Project documentation
```