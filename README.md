About
=====

    Please follow below instruction to run the file.

Pre installs
-------------
*npm*

    To use npm please install node.js from following link - https://nodejs.org/en/download/

*http-server*

    Please run **npm install -g http-server**

install
---------

Please run **npm install**

this will create *node_modules* folder and put all the dependency files from package.json

Building Application
----------------------

Please run **grunt build**

this will take all css and js and compress and uglify the files.

Start the server
------------------

Please run **grunt serve** 

Application will be served in *http://localhost:8080/*

Application Outcome Story
--------------------------

Positive case 
=============

You will be able to see a webpage with form to add name,email,message and all are required field it must be filled, once filled and submitted a email will be triggered to customer care email address and stored in databse.

Uses cases
=============
- form cannot be submmited without filling the all details
- email must be a valid
- user cannot directly subit a empty data from php
- Submmited data can be view

urls
=====
Form page - http://getappdata.website/
View post page - http://getappdata.website/customer_query.php

Technolgy stack
================
- Angular
- bootstrap
- php
- mysql




    

