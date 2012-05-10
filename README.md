rerephpfw-startup-kit
=====================

Startup kit for rerephpfw (A PHP Web Application Framework)

Install:
--------

1. Rename folder your_app_name to your app name
2. In root/app.yml
+ Change your app name. 
+ If you install it in htdocs root, leave basefolder blank.
+ If you install it on localhost, change mode to localhost or leave it blank.

3. In root/your_app_name/configs/config.yml (or root/your_app_name/configs/config.localhost.yml if your are running on localhost)
+ Config your database

4. Execute db.sql to your database. It will create two tables (members, sessions)