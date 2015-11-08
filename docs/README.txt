Project description
===================

This is Zend PHP Framework Project at ITI , done by 3 members
It is a Fourm like fatakat 
Tools : Zend PHP Framework , html , jquery, Ajax , bootstrap .


Features
===========

1-Normal user can sign up
2-Normal user can Sign in if he already registered
3-Normal user can Add category if he already registered
4-Normal user can Add to category if he already registered
5-Normal user can Add thread if he already registered
6-Normal user can write comments and  emotions on thread if he already registered
7-public chat between members of forum
8-It has one admin can add , edit , delete and list (users, category,to category,thread, comments) , Lock the system and ban user
9-Normal user can (only show)  categories ,to category , thread if he does not registered
10-each Form has validation on its fields.

 
Add project directory
=====================
You must add RNR directory in  your /var/www/html directory 

Setting Up Your VHOST
=====================

The following is a sample VHOST you might want to consider for your project.

<VirtualHost *:80>
   DocumentRoot "/var/www/html/RNR/public"
   ServerName RNR.local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development

   <Directory "/var/www/html/RNR/public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>

</VirtualHost>

Import Sql file 
===============
Create database named RNR and import RNR.sql file 

Running the application
========================
write in your URL : localhost/RNR/public/

Run Public chat
================
Cd to /RNR/application/views/scripts/chatroom
the run the command php -q server.php

