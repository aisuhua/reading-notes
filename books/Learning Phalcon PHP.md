# Learning Phalcon PHP

## Table of Contents

```
Cover
Copyright
Credits
About the Author
About the Reviewers
www.PacktPub.com
Table of Contents
Preface
Chapter 1: Getting Started with Phalcon
	Installing the required software
		Installing PHP
		Installing Nginx
		Installing MySQL
		Installing Redis
		Installing MongoDB
		Installing Git
	Installing Phalcon
	The Apache and Nginx configuration files
		Apache
		The host file
		Nginx
	Understanding the framework's internals
		The dependency injection
		The request component
		The response component
		The logger component
		The crypt component
		The flash component
		The router component
		The config component
		The view component
		The session component
		The cache component
	Summary
Chapter 2: Setting Up the MVC Structure and the Environment for Our Project
	What is MVC?
		Model
		View
		Controller
	The MVC structure
	Creating the structure for our project
		PSR
	Creating the configuration file and the Bootstrap
	Preparing the initial DI interface and the router
	Using the router component in a module
	Create the base layout
	Summary
Chapter 3: Learning Phalcon's ORM and ODM
	The main differences between SQL and NoSQL databases
	Connecting to the database
	ORM/ODM operations (create, update, delete, transactions, validations)
		Adding the routing information
		Creating the controller and the actions
		Creating the views
	CRUD operations using ORM
		CRUD – reading data
		CRUD – creating data
		CRUD – updating data
		CRUD – deleting data
	Using PHQL
	Using raw SQL
	Database transactions
		A manual transactions example
		An implicit transactions example
		An isolated transactions example
	ODM/MongoDB
	ORM – drawbacks and caching
	Summary
Chapter 4: Database Architecture, Models, and CLI Applications
	The database architecture
		The User table
		The UserGroup table
		The UserProfile table
	Models
		The User model
		The UserGroup model
		The UserProfile model
		Registering a new user
		Creating a user profile
		The Category model
		The Category translation model
		The Article translation model
		The Article model
		The Article-Category-Article model
	Summary
Chapter 5: The API Module
	Using APIs – recommended practices
	Enabling SSL on our local machine
	Creating the module structure
	Writing a fully functional REST module with Phalcon PHP
		Articles
	Securing an API
		Using SSL
		Adding an API key for extra protection
		Limiting the number of requests per second from the same IP
		Limiting access to resources, such as DELETE, PUT, and POST, for authenticated users
	Documenting the API
		Installation
		Usage
	Summary
Chapter 6: Assets, Authentication, and ACL
	Assets management
	Developing an authentication system
		The database structure
		Models
	Securing the application using the ACL component
	Summary
Chapter 7: The Backoffice Module (Part 1)
	Editing the main layout
		common/topbar.volt
		common/sidebar.volt
	Cleaning the Core module
	Hashtag CRUD
		The hashtag controller within the API module
		A common method to reduce code duplication
		Retrieving the data
		The layout structure
		The hashtag form
		The hashtag controller
		The hashtag manager
		The View template for the add() method
		Improving the database table structure and adding validation
		Editing hashtags
		Deleting hashtags
	Category CRUD
		The Category form
		Creating the Category templates
			list.volt
			add.volt
			edit.volt
			delete.volt
		Creating the Category controller
		Creating the Category manager
	Summary
Chapter 8: The Backoffice Module (Part 2)
	User CRUD
		Creating the controller (API)
		The user controller from the Backoffice module
		The user form
		The user manager
	User templates
	Article CRUD
		The Controller (API)
		The Article controller from the Backoffice module
		The Article form
		The Article manager
	Summary
Chapter 9: The Frontend Module
	The Frontend layout and basic functionality
		footer.volt
		paginator.volt
		navbar.volt
		layout.volt
	Modifying BaseController.php
		The Article item template
		Retrieving articles from a category
	Implementing ElasticSearch
		Installing ElasticSearch
		Enabling a client in DI
		Indexing (storing) documents
	Implementing MongoDB
		Mongo models
			modules/Core/Models/Mongo/BaseCollection.php
			modules/Core/Models/Mongo/ArticleLog.php
	Summary
Chapter 10: Going Further
	Uploading files with Phalcon
	Using the Annotation router
	Summary
Index
```