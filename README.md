## Project in Informatics for Web Development - Uniplast Website 

This project was developed mainly by me and my partner Fabio as a presentation to Uniplast S.A company's tech representatives as an initial model/proposal website, so that we could be informed by them about possible upgrades and new funtionalities implementations that would satisfy the company's needs. It contains a SQL database, wich was runned through mySQL relational database, it's worth mention that we mostly accessed it via phpMyAdmin. The code is back-end written in PHP and contains the basics of front end technologies (HTML/CSS/JS) and also Bootstrap as CSS/framework. 

>We're still implementing new funcionalities and adapting a considering part of the code (the latest version of PHP made some of our code outdated, so we're still working on that). You're welcome to help. 

I'd recommend you to follow these steps so you can run the files in your ___Ubuntu 20.04+ distribution___:

- First, install apache2
```
sudo apt update
sudo apt install php libapache2-mod-php
```

- Maybe you'll need to restart it:

```
sudo systemctl restart apache2
```
- You'll also need php in the 7+ version:
```
sudo apt install php-fpm
```
- A relational database such as mySQL :
```
sudo apt install mysql-server
```
- And if it's your preference, also the phpMyAdmin administration tool:
```
sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl
```
