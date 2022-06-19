Assignment Date of submission :2022/06/19- 2022/06/20

PHP

PHP : Hypertext Preprocessor

PHP is a widely-used, open source scripting language PHP scripts are executed on the server PHP files can contain text, HTML, CSS, JavaScript, and PHP code PHP files have extension ".php"
PHP setup

Download and install XAMMP :https://www.apachefriends.org/download.html start apache and my sql
virtual host setup

Virtual Host

A virtual host is used for hosting multiple domain names on a single server.

Create a folder in htdocs of xammp then write php code syntax: <?php> echo "Echo is use to print in php" ?>
Open apachi > conf >extra >httpd-vhosts.conf in notepad (run as administrator) Then add:
 DocumentRoot "C:\xampp\htdocs\folder location"
 ServerName name.local
</VirtualHost>
then save
Then open /Applications/XAMPP/xamppfiles/htdocs/ in notepad add 127.0.01 name.local then you are ready to go:search localhost/location of your directory
