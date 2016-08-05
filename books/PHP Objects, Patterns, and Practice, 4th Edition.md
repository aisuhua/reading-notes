# PHP Objects, Patterns, and Practice, 4th Edition

## Table of Contents

```
Contents at a Glance
Contents
About the Author
About the Technical Reviewer
Acknowledgments
Introduction
Chapter 1: PHP: Design and Management
	The Problem
	PHP and Other Languages
	About This Book
		Objects
		Patterns
		Practice
		What’s New in the Fourth Edition
	Summary
Chapter 2: Objects
	The Accidental Success of PHP Objects
		In the Beginning: PHP/FI
		Syntactic Sugar: PHP 3
		PHP 4 and the Quiet Revolution
		Change Embraced: PHP 5
	Advocacy and Agnosticism: The Object Debate
	Summary
Chapter 3: Object Basics
	Classes and Objects
		A First Class
		A First Object (or Two)
	Setting Properties in a Class
	Working with Methods
		Creating a Constructor Method
	Arguments and Types
		Primitive Types
			Primitive Types Matter: An Example
		Taking the Hint: Object Types
	Inheritance
		The Inheritance Problem
		Working with Inheritance
			Constructors and Inheritance
			Invoking an Overridden Method
		Public, Private, and Protected: Managing Access to Your Classes
			Accessor Methods
			The ShopProduct Classes
	Summary
Chapter 4: Advanced Features
	Static Methods and Properties
	Constant Properties
	Abstract Classes
	Interfaces
	Traits
		A Problem for Traits to Solve
		Defining and Using a Trait
		Using More than One Trait
		Combining Traits and Interfaces
		Managing Method Name Conflicts with insteadof
		Aliasing overridden trait methods
		Using static methods in traits
		Accessing Host Class Properties
		Defining Abstract Methods in Traits
		Changing Access Rights to Trait Methods
	Late Static Bindings: The static Keyword
	Handling Errors
		Exceptions
			Throwing an Exception
			Subclassing Exception
			Cleaning up after try / catch Clauses with finally
	Final Classes and Methods
	Working with Interceptors
	Defining Destructor Methods
	Copying Objects with __clone( )
	Defining String Values for Your Objects
	Callbacks, Anonymous Functions and Closures
	Summary
Chapter 5: Object Tools
	PHP and Packages
		PHP Packages and Namespaces
			Namespaces to the Rescue
			Using the File System to Simulate Packages
			Naming the PEAR Way
			Include Paths
		Autoload
	The Class and Object Functions
		Looking for Classes
		Learning About an Object or Class
		Getting a Fully Qualified String Reference to a Class
		Learning About Methods
		Learning About Properties
		Learning About Inheritance
		Method Invocation
	The Reflection API
		Getting Started
		Time to Roll Up Your Sleeves
		Examining a Class
		Examining Methods
		Examining Method Arguments
		Using the Reflection API
	Summary
Chapter 6: Objects and Design
	Defining Code Design
	Object-Oriented and Procedural Programming
		Responsibility
		Cohesion
		Coupling
		Orthogonality
	Choosing Your Classes
	Polymorphism
	Encapsulation
	Forget How to Do It
	Four Signposts
		Code Duplication
		The Class Who Knew Too Much
		The Jack of All Trades
		Conditional Statements
	The UML
		Class Diagrams
			Representing Classes
			Attributes
			Operations
			Describing Inheritance and Implementation
			Associations
			Aggregation and Composition
			Describing Use
			Using Notes
		Sequence Diagrams
	Summary
Chapter 7: What Are Design Patterns? Why Use Them?
	What Are Design Patterns?
	A Design Pattern Overview
		Name
		The Problem
		The Solution
		Consequences
	The Gang of Four Format
	Why Use Design Patterns?
		A Design Pattern Defines a Problem
		A Design Pattern Defines a Solution
		Design Patterns Are Language Independent
		Patterns Define a Vocabulary
		Patterns Are Tried and Tested
		Patterns Are Designed for Collaboration
		Design Patterns Promote Good Design
		Design Patterns are Used By Popular Frameworks
	PHP and Design Patterns
	Summary
Chapter 8: Some Pattern Principles
	The Pattern Revelation
	Composition and Inheritance
		The Problem
		Using Composition
	Decoupling
		The Problem
		Loosening Your Coupling
	Code to an Interface, Not to an Implementation
	The Concept That Varies
	Patternitis
	The Patterns
		Patterns for Generating Objects
		Patterns for Organizing Objects and Classes
		Task-Oriented Patterns
		Enterprise Patterns
		Database Patterns
	Summary
Chapter 9: Generating Objects
	Problems and Solutions in Generating Objects
	The Singleton Pattern
		The Problem
		Implementation
		Consequences
	Factory Method Pattern
		The Problem
		Implementation
		Consequences
	Abstract Factory Pattern
		The Problem
		Implementation
		Consequences
	Prototype
		The Problem
		Implementation
	But That’s Cheating!
	Summary
Chapter 10: Patterns for Flexible Object Programming
	Structuring Classes to Allow Flexible Objects
	The Composite Pattern
		The Problem
		Implementation
		Consequences
		Composite in Summary
	The Decorator Pattern
		The Problem
		Implementation
		Consequences
	The Facade Pattern
		The Problem
		Implementation
		Consequences
	Summary
Chapter 11: Performing and Representing Tasks
	The Interpreter Pattern
		The Problem
		Implementation
		Interpreter Issues
	The Strategy Pattern
		The Problem
		Implementation
	The Observer Pattern
		Implementation
	The Visitor Pattern
		The Problem
		Implementation
		Visitor Issues
	The Command Pattern
		The Problem
		Implementation
	Summary
Chapter 12: Enterprise Patterns
	Architecture Overview
		The Patterns
		Applications and Layers
	Cheating Before We Start
		Registry
			The Problem
		Implementation
			Registry, Scope, and PHP
			Consequences
	The Presentation Layer
		Front Controller
			The Problem
			Implementation
				ApplicationHelper
				CommandResolver
				Request
				A Command
				Overview
			Consequences
		Application Controller
			The Problem
			Implementation
				The Front Controller
				Implementation Overview
				The Configuration File
				Parsing the Configuration File
				Storing the Configuration Data
				The Command Class
				A Concrete Command
			Consequences
		Page Controller
			The Problem
			Implementation
			Consequences
		Template View and View Helper
			The Problem
			Implementation
			Consequences
	The Business Logic Layer
		Transaction Script
			The Problem
			Implementation
			Consequences
		Domain Model
			The Problem
			Implementation
			Consequences
	Summary
Chapter 13: Database Patterns
	The Data Layer
	Data Mapper
		The Problem
		Implementation
			Handling Multiple Rows
				Using a Generator in Place of the Iterator Interface
				Acquiring Collection objects
		Consequences
	Identity Map
		The Problem
		Implementation
		Consequences
	Unit of Work
		The Problem
		Implementation
		Consequences
		Lazy Load
		The Problem
		Implementation
		Consequences
	Domain Object Factory
		The Problem
		Implementation
		Consequences
	The Identity Object
		The Problem
		Implementation
		Consequences
	The Selection Factory and Update Factory Patterns
		The Problem
		Implementation
		Consequences
	What’s Left of Data Mapper Now?
	Summary
Chapter 14: Good (and Bad) Practice
	Beyond Code
	Borrowing a Wheel
	Playing Nice
	Giving Your Code Wings
	Documentation
	Testing
	Continuous Integration
	Summary
Chapter 15: An Introduction to PEAR and Pyrus
	What Is PEAR ?
	Phar Out with Pyrus
	Installing a Package
		PEAR Channels
	Using a PEAR Package
		Handling PEAR Errors
	Creating Your Own PEAR Package
		package.xml
		Package Elements
		The contents Element
		Dependencies
		Tweaking Installation with phprelease
		Preparing a Package for Shipment
		Setting Up Your Own Channel
			Adding a Package to a Channel
	Summary
Chapter 16: Generating Documentation with phpDocumentor
	Why Document?
	Installation
	Generating Documentation
	DocBlock Comments
	Documenting Classes
	File-Level Documentation
	Documenting Properties
	Documenting Methods
	Namespace support
	Creating Links in Documentation
	Summary
Chapter 17: Version Control with Git
	Why Use Version Control ?
	Getting Git
	Configuring a Git Server
		Creating the Remote Repository
			Preparing the Repository for Local Users
			Providing Access to Users
			Closing Down Shell Access for the git User
	Beginning a Project
		Cloning the Repository
	Updating and Committing
	Adding and Removing Files and Directories
		Adding a File
		Removing a File
		Adding a Directory
		Removing Directories
	Tagging a Release
	Branching a Project
	Summary
Chapter 18: Testing with PHPUnit
	Functional Tests and Unit Tests
	Testing by Hand
	Introducing PHPUnit
		Creating a Test Case
		Assertion Methods
		Testing Exceptions
		Running Test Suites
		Constraints
		Mocks and Stubs
		Tests Succeed When They Fail
	Writing Web Tests
		Refactoring a Web Application for Testing
		Simple Web Testing
		Introducing Selenium
			Getting Selenium
			PHPUnit and Selenium
			Introducing php-webdriver
			Creating the Test Skeleton
			Connecting to Selenium
			Writing the Test
	A Note of Caution
	Summary
Chapter 19: Automated Build with Phing
	What Is Phing?
	Getting and Installing Phing
	Composing the Build Document
		Targets
		Properties
			Conditionally Setting Property Values with the Condition task
		Types
			FileSet
			PatternSet
			FilterChain
		Tasks
			Echo
			Copy
			Input
			Delete
	Summary
Chapter 20: Continuous Integration
	What Is Continuous Integration?
		Preparing a Project for CI
			CI and Version Control
			Phing
			Unit Tests
			Documentation
			Code Coverage
			Coding Standards
			Building a package
	Jenkins
		Installing Jenkins
		Installing Jenkins Plugins
		Setting up the Git Public Key
		Installing a Project
		Running the First Build
		Configuring the Reports
		Triggering Builds
			Test Failures
	Summary
Chapter 21: Objects, Patterns, Practice
	Objects
		Choice
		Encapsulation and Delegation
		Decoupling
		Reusability
		Aesthetics
	Patterns
		What Patterns Buy Us
			Tried and Tested
			Patterns Suggest Other Patterns
			A Common Vocabulary
			Patterns Promote Design
		Patterns and Principles of Design
			Favor Composition over Inheritance
			Avoid Tight Coupling
			Code to an Interface, Not an Implementation
			Encapsulate the Concept That Varies
	Practice
		Testing
		Documentation
		Version Control
		Automated Build
		Continuous Integration
		What I Missed
	Summary
Chapter 22: Bibliography
	Books
	Articles
	Sites
Chapter 23: A Simple Parser
	The Scanner
	The Parser
Index
```