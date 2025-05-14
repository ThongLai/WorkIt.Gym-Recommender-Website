## Selene database SSH connection (UNVAILABLE NOW):
```bash
Username:  workit
Password: umbra(despair>Quartz218
```

## AWS EC2 server SSH connection:
```bash
ssh -i "workit-key.pem" ec2-user@18.170.221.113
```
OR
```bash
ssh -i "workit-key.pem" ec2-user@ec2-18-170-221-113.eu-west-2.compute.amazonaws.com
```

## Install dependencies (on AWS Linux 2023):
```bash
# Update the system
sudo dnf update -y

# Install Apache and PHP
sudo dnf install -y httpd php php-mysqlnd

# Install Python and development tools
# As the server is on Linux, higher python version than 3.10 are also supported Tensorflow GPU
sudo dnf install -y python3 python3-pip python3-devel

# Install Git
sudo dnf install -y git

# Start and enable Apache
sudo systemctl start httpd
sudo systemctl enable httpd

# Install additional PHP extensions
sudo dnf install -y php-mbstring php-xml php-gd php-json

# Add the MySQL Yum repository
sudo su -
dnf -y install https://dev.mysql.com/get/mysql84-community-release-el9-1.noarch.rpm
dnf -y install mysql mysql-community-client
```

## Install Poetry
```bash
curl -sSL https://install.python-poetry.org | python3 -

# Add Poetry to PATH (if not already done, you can check with `poetry --version`)
# This step is usually done automatically, but in case to do it manually:
# echo 'export PATH="$HOME/.local/bin:$PATH"' >> ~/.bashrc
# source ~/.bashrc

# Verify installation
poetry --version

# Install poetry-plugin-shell
poetry self add poetry-plugin-shell
```

## Clone the repository
```bash
cd /var/www/html
sudo git clone https://github.com/ThongLai/WorkIt.Gym-Recommender-Website
```

## Add the current user to the Apache group
```bash
sudo usermod -a -G apache ec2-user

# Set proper ownership
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www
find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;

# Logout and log back in to check group change
exit
ssh -i "workit-key.pem" ec2-user@18.170.221.113

# Check if the user is in the apache group
groups ec2-user
```

## Configure Apache
```bash
sudo nano /etc/httpd/conf.d/workit.conf
```

**Add the following content:**

```bash
<VirtualHost *:80>
    ServerName workit.com
    DocumentRoot /var/www/html/WorkIt.Gym-Recommender-Website
    
    <Directory /var/www/html/WorkIt.Gym-Recommender-Website>
        AllowOverride All
        Require all granted
    </Directory>
    
    # Proxy for AI Flask server
    ProxyPass /ai http://localhost:5000
    ProxyPassReverse /ai http://localhost:5000
    
    ErrorLog /var/log/httpd/workit_error.log
    CustomLog /var/log/httpd/workit_access.log combined
</VirtualHost>
```

## Restart Apache
```bash
sudo systemctl restart httpd

# Check if the server is running
sudo systemctl status httpd
sudo tail -n 20 /var/log/httpd/error_log
```

## Install dependencies for the AI Flask server
```bash
cd /var/www/html/WorkIt.Gym-Recommender-Website/AI
poetry install
```

## Create a systemd service for the AI Flask server
```bash
sudo nano /etc/systemd/system/workit-ai.service
```

**Add the following content:**
```bash
[Unit]
Description=WorkIt Gym AI Recommender Flask Server
After=network.target

[Service]
User=ec2-user
WorkingDirectory=/var/www/html/WorkIt.Gym-Recommender-Website/AI/script
ExecStart=/home/ec2-user/.local/bin/poetry run python Predict.py
Restart=always

[Install]
WantedBy=multi-user.target
```

## Start and enable the AI Flask server
```bash
sudo systemctl daemon-reload
sudo systemctl start workit-ai
sudo systemctl enable workit-ai   # Start on boot
sudo systemctl status workit-ai   # Check status
```