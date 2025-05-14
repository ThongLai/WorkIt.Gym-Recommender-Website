## Selene database SSH connection (UNVAILABLE NOW):
```
Username:  workit
Password: umbra(despair>Quartz218
```

## AWS EC2 server SSH connection:
```
ssh -i "workit-key.pem" ec2-user@3.8.148.213
```
OR
```
ssh -i "workit-key.pem" ec2-user@ec2-3-8-148-213.eu-west-2.compute.amazonaws.
```

## Install dependencies
```
# Update the system
sudo dnf update -y

# Install Apache and PHP
sudo dnf install -y httpd php php-mysqlnd

# Install Python and development tools
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