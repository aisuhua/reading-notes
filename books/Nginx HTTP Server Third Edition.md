# Nginx HTTP Server Third Edition

## Table of Contents

```
Cover
Copyright
Credits
About the Author
About the Reviewer
www.PacktPub.com
Table of Contents
Preface
Chapter 1: Downloading and Installing Nginx
	Setting up the prerequisites
		The GNU Compiler Collection
		The PCRE library
		The zlib library
		OpenSSL
	Downloading Nginx
		Websites and resources
		Version branches
		Features
		Downloading and extracting
	Configure options
		The easy way
		Path options
		Prerequisites options
		Module options
			Modules enabled by default
			Modules disabled by default
		Miscellaneous options
		Configuration examples
			About the prefix switch
			Regular HTTP and HTTPS servers
			All modules enabled
			Mail server proxy
		Build configuration issues
			Make sure you installed the prerequisites
			Directories exist and must be writable
		Compiling and installing the program
	Controlling the Nginx service
		Daemons and services
		User and group
		Nginx command-line switches
		Starting and stopping the daemon
		Testing the configuration
		Other switches
	Adding Nginx as a system service
		System V scripts
		About init scripts
		The init script for Debian-based distributions
		The init script for Red Hat–based distributions
		Installing the script
			Debian-based distributions
			Red Hat–based distributions
	NGINX Plus
	Summary
Chapter 2: Basic Nginx Configuration
	Configuration file syntax
		Configuration directives
		Organization and inclusions
		Directive blocks
		Advanced language rules
			Directives accept specific syntaxes
			Diminutives in directive values
			Variables
			String values
	Base module directives
		What are base modules?
		The Nginx process architecture
		Core module directives
		The Events module
		The Configuration module
		Necessary adjustments
	Testing your server
		Creating a test server
		Performance tests
			Httperf
			Autobench
			OpenWebLoad
		Upgrading Nginx gracefully
	Summary
Chapter 3: HTTP Configuration
	The HTTP Core module
		Structure blocks
	Module directives
		Socket and host configuration
			listen
			server_name
			server_name_in_redirect
			server_names_hash_max_size
			server_names_hash_bucket_size
			port_in_redirect
			tcp_nodelay
			tcp_nopush
			sendfile
			sendfile_max_chunk
			send_lowat
			reset_timedout_connection
		Paths and documents
			root
			alias
			error_page
			if_modified_since
			index
			recursive_error_pages
			try_files
		Client requests
			keepalive_requests
			keepalive_timeout
			keepalive_disable
			send_timeout
			client_body_in_file_only
			client_body_in_single_buffer
			client_body_buffer_size
			client_body_temp_path
			client_body_timeout
			client_header_buffer_size
			client_header_timeout
			client_max_body_size
			large_client_header_buffers
			lingering_time
			lingering_timeout
			lingering_close
			ignore_invalid_headers
			chunked_transfer_encoding
			max_ranges
		MIME types
			types
			default_type
			types_hash_max_size
			types_hash_bucket_size
		Limits and restrictions
			limit_except
			limit_rate
			limit_rate_after
			satisfy
			internal
		File processing and caching
			disable_symlinks
			directio
			directio_alignment
			open_file_cache
			open_file_cache_errors
			open_file_cache_min_uses
			open_file_cache_valid
			read_ahead
		Other directives
			log_not_found
			log_subrequest
			merge_slashes
			msie_padding
			msie_refresh
			resolver
			resolver_timeout
			server_tokens
			underscores_in_headers
			variables_hash_max_size
			variables_hash_bucket_size
			post_action
	Module variables
		Request headers
		Response headers
		Nginx generated
	The location block
		Location modifier
			The = modifier
			No modifier
			The ~ modifier
			The ~* modifier
			The ^~ modifier
			The @ modifier
		Search order and priority
			Case 1
			Case 2
			Case 3
	Summary
Chapter 4: Module Configuration
	The Rewrite module
		Reminder on regular expressions
			Purpose
			PCRE syntax
			Quantifiers
			Captures
		Internal requests
			error_page
			Rewrite
			Infinite loops
			Server Side Includes
		Conditional structure
		Directives
		Common rewrite rules
			Performing a search
			User profile page
			Multiple parameters
			Wikipedia-like
			News website article
			Discussion board
	SSI module
		Module directives and variables
		SSI commands
			File includes
			Working with variables
			Conditional structure
			Configuration
	Additional modules
		Website access and logging
			Index
			Autoindex
			Random index
			Log
		Limits and restrictions
			Auth_basic module
			Access
			Limit connections
			Limit request
			Auth_request
		Content and encoding
			Empty GIF
			FLV and MP4
			HTTP headers
			Addition
			Substitution
			Gzip filter
			Gzip static
			Gunzip filter
			Charset filter
			Memcached
			Image filter
			XSLT
		About your visitors
			Browser
			Map
			Geo
			GeoIP
			UserID filter
			Referer
			Real IP
		Split Clients
		SSL and security
			SSL
			Setting up an SSL certificate
			SPDY
			Secure link
		Other miscellaneous modules
			Stub status
			Degradation
			Google-perftools
			WebDAV
		Third-party modules
	Summary
Chapter 5: PHP and Python with Nginx
	An introduction to FastCGI
		Understanding the CGI mechanism
		The Common Gateway Interface
		Fast Common Gateway Interface
		uWSGI and SCGI
		The main directives
		FastCGI caching and buffering
	PHP with Nginx
		Architecture
		PHP-FPM
		Setting up PHP and PHP-FPM
			Downloading and extracting
			Requirements
			Building PHP
			Post-install configuration
			Running and controlling
		Nginx configuration
	Python and Nginx
		Django
		Setting up Python and Django
			Python
			Django
			Starting the FastCGI process manager
		The Nginx configuration
	Summary
Chapter 6: Apache and Nginx Together
	Nginx as reverse proxy
		Understanding the issue
		The reverse proxy mechanism
		Advantages and disadvantages of the mechanism
	The Nginx proxy module
		Main directives
		Caching, buffering, and temporary files
		Limits, timeouts, and errors
		SSL-related directives
		Other directives
		Variables
	Configuring Apache and Nginx
		Reconfiguring Apache
			Configuration overview
			Resetting the port number
			Accepting local requests only
		Configuring Nginx
			Enabling proxy options
			Separating the content
		Advanced configuration
	Improving the reverse proxy architecture
		Forwarding the correct IP address
		SSL issues and solutions
		Server control panel issues
	Summary
Chapter 7: From Apache to Nginx
	Nginx versus Apache
		Features
			Core and functioning
			General functionality
		Flexibility and community
		Performance
		Usage
		Conclusion
	Porting your Apache configuration
		Directives
		Modules
		Virtual hosts and configuration sections
			Configuration sections
			Creating a virtual host
		.htaccess files
			A recap on Apache .htaccess files
			Nginx equivalence
	Rewrite rules
		General remarks
			On the location
			On the syntax
			RewriteRule
		WordPress
		MediaWiki
		vBulletin
	Summary
Chapter 8: Introducing Load Balancing and Optimization
	An introduction to load balancing
		Understanding the concept of load balancing
		Session affinity
		The upstream module
		Request distribution mechanisms
	Using Nginx as a TCP load balancer
		The Stream module
		An example of MySQL load balancing
	Thread pools and I/O mechanisms
		Relieving worker processes
		AIO, Sendfile, and DirectIO
	Summary
Chapter 9: Case Studies
	Deploying a WordPress site
		Preparing your server and obtaining WordPress
			System requirements
			PHP configuration
			MySQL configuration
			Downloading and extracting WordPress
		Nginx configuration
			HTTP blocks
			The server block
			Location blocks
		WordPress configuration
	Securing communications with HTTPS
		Self-signed certificates and certificate authorities
		Obtaining your SSL certificate
		Enabling HTTPS in your Nginx configuration
		Setting up and testing SPDY
	Creating your ownCloud drive
		Getting ownCloud
		Nginx configuration
		Setting up a self-signed certificate
	Summary
Chapter 10: Troubleshooting
	General tips on troubleshooting
		Checking access permissions
		Testing your configuration
		Have you reloaded the service?
		Checking logs
	Install issues
	The 403 Forbidden custom error page
	400 Bad request
	Truncated or invalid FastCGI responses
	Location block priorities
	If block issues
		Inefficient statements
			Unexpected behavior
	Summary
Index
```