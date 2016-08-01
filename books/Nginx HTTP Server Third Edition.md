# Nginx HTTP Server Third Edition

## 目录

```
Cover	-23
Copyright	-21
Credits	-20
About the Author	-19
About the Reviewer	-18
www.PacktPub.com	-17
Table of Contents	-16
Preface	p17
Chapter 1: Downloading and Installing Nginx	p23
	Setting up the prerequisites	p23
		The GNU Compiler Collection	p24
		The PCRE library	p25
		The zlib library	p26
		OpenSSL	p26
	Downloading Nginx	p27
		Websites and resources	p27
		Version branches	p29
		Features	p30
		Downloading and extracting	p31
	Configure options	p31
		The easy way	p31
		Path options	p32
		Prerequisites options	p34
		Module options	p36
			Modules enabled by default	p36
			Modules disabled by default	p37
		Miscellaneous options	p39
		Configuration examples	p40
			About the prefix switch	p41
			Regular HTTP and HTTPS servers	p41
			All modules enabled	p42
			Mail server proxy	p42
		Build configuration issues	p42
			Make sure you installed the prerequisites	p43
			Directories exist and must be writable	p43
		Compiling and installing the program	p43
	Controlling the Nginx service	p44
		Daemons and services	p45
		User and group	p45
		Nginx command-line switches	p46
		Starting and stopping the daemon	p46
		Testing the configuration	p47
		Other switches	p47
	Adding Nginx as a system service	p48
		System V scripts	p48
		About init scripts	p49
		The init script for Debian-based distributions	p50
		The init script for Red Hat–based distributions	p51
		Installing the script	p51
			Debian-based distributions	p51
			Red Hat–based distributions	p52
	NGINX Plus	p53
	Summary	p54
Chapter 2: Basic Nginx Configuration	p55
	Configuration file syntax	p56
		Configuration directives	p56
		Organization and inclusions	p58
		Directive blocks	p60
		Advanced language rules	p61
			Directives accept specific syntaxes	p61
			Diminutives in directive values	p62
			Variables	p63
			String values	p63
	Base module directives	p63
		What are base modules?	p64
		The Nginx process architecture	p64
		Core module directives	p65
		The Events module	p71
		The Configuration module	p73
		Necessary adjustments	p73
	Testing your server	p74
		Creating a test server	p75
		Performance tests	p76
			Httperf	p77
			Autobench	p78
			OpenWebLoad	p80
		Upgrading Nginx gracefully	p81
	Summary	p82
Chapter 3: HTTP Configuration	p83
	The HTTP Core module	p83
		Structure blocks	p84
	Module directives	p85
		Socket and host configuration	p86
			listen	p86
			server_name	p87
			server_name_in_redirect	p87
			server_names_hash_max_size	p88
			server_names_hash_bucket_size	p88
			port_in_redirect	p88
			tcp_nodelay	p88
			tcp_nopush	p89
			sendfile	p89
			sendfile_max_chunk	p89
			send_lowat	p90
			reset_timedout_connection	p90
		Paths and documents	p90
			root	p90
			alias	p91
			error_page	p91
			if_modified_since	p92
			index	p92
			recursive_error_pages	p93
			try_files	p93
		Client requests	p93
			keepalive_requests	p94
			keepalive_timeout	p94
			keepalive_disable	p94
			send_timeout	p94
			client_body_in_file_only	p95
			client_body_in_single_buffer	p95
			client_body_buffer_size	p95
			client_body_temp_path	p96
			client_body_timeout	p96
			client_header_buffer_size	p96
			client_header_timeout	p97
			client_max_body_size	p97
			large_client_header_buffers	p97
			lingering_time	p98
			lingering_timeout	p98
			lingering_close	p98
			ignore_invalid_headers	p98
			chunked_transfer_encoding	p99
			max_ranges	p99
		MIME types	p99
			types	p99
			default_type	p101
			types_hash_max_size	p101
			types_hash_bucket_size	p101
		Limits and restrictions	p102
			limit_except	p102
			limit_rate	p103
			limit_rate_after	p103
			satisfy	p103
			internal	p104
		File processing and caching	p104
			disable_symlinks	p105
			directio	p105
			directio_alignment	p105
			open_file_cache	p106
			open_file_cache_errors	p106
			open_file_cache_min_uses	p107
			open_file_cache_valid	p107
			read_ahead	p107
		Other directives	p108
			log_not_found	p108
			log_subrequest	p108
			merge_slashes	p108
			msie_padding	p109
			msie_refresh	p109
			resolver	p109
			resolver_timeout	p110
			server_tokens	p110
			underscores_in_headers	p111
			variables_hash_max_size	p111
			variables_hash_bucket_size	p111
			post_action	p111
	Module variables	p112
		Request headers	p112
		Response headers	p113
		Nginx generated	p113
	The location block	p116
		Location modifier	p116
			The = modifier	p117
			No modifier	p117
			The ~ modifier	p118
			The ~* modifier	p118
			The ^~ modifier	p119
			The @ modifier	p119
		Search order and priority	p119
			Case 1	p120
			Case 2	p121
			Case 3	p121
	Summary	p122
Chapter 4: Module Configuration	p123
	The Rewrite module	p123
		Reminder on regular expressions	p124
			Purpose	p124
			PCRE syntax	p125
			Quantifiers	p126
			Captures	p128
		Internal requests	p129
			error_page	p130
			Rewrite	p131
			Infinite loops	p132
			Server Side Includes	p133
		Conditional structure	p134
		Directives	p136
		Common rewrite rules	p139
			Performing a search	p139
			User profile page	p139
			Multiple parameters	p139
			Wikipedia-like	p140
			News website article	p140
			Discussion board	p140
	SSI module	p141
		Module directives and variables	p142
		SSI commands	p144
			File includes	p144
			Working with variables	p146
			Conditional structure	p146
			Configuration	p147
	Additional modules	p148
		Website access and logging	p148
			Index	p148
			Autoindex	p148
			Random index	p150
			Log	p150
		Limits and restrictions	p152
			Auth_basic module	p152
			Access	p153
			Limit connections	p153
			Limit request	p154
			Auth_request	p155
		Content and encoding	p155
			Empty GIF	p156
			FLV and MP4	p156
			HTTP headers	p157
			Addition	p157
			Substitution	p158
			Gzip filter	p158
			Gzip static	p160
			Gunzip filter	p161
			Charset filter	p161
			Memcached	p162
			Image filter	p164
			XSLT	p165
		About your visitors	p166
			Browser	p166
			Map	p167
			Geo	p168
			GeoIP	p168
			UserID filter	p169
			Referer	p170
			Real IP	p171
		Split Clients	p171
		SSL and security	p172
			SSL	p172
			Setting up an SSL certificate	p175
			SPDY	p177
			Secure link	p177
		Other miscellaneous modules	p178
			Stub status	p178
			Degradation	p179
			Google-perftools	p179
			WebDAV	p179
		Third-party modules	p180
	Summary	p181
Chapter 5: PHP and Python with Nginx	p183
	An introduction to FastCGI	p184
		Understanding the CGI mechanism	p184
		The Common Gateway Interface	p186
		Fast Common Gateway Interface	p187
		uWSGI and SCGI	p188
		The main directives	p189
		FastCGI caching and buffering	p195
	PHP with Nginx	p200
		Architecture	p201
		PHP-FPM	p201
		Setting up PHP and PHP-FPM	p202
			Downloading and extracting	p202
			Requirements	p202
			Building PHP	p202
			Post-install configuration	p203
			Running and controlling	p204
		Nginx configuration	p205
	Python and Nginx	p206
		Django	p207
		Setting up Python and Django	p207
			Python	p207
			Django	p207
			Starting the FastCGI process manager	p208
		The Nginx configuration	p209
	Summary	p209
Chapter 6: Apache and Nginx Together	p211
	Nginx as reverse proxy	p212
		Understanding the issue	p212
		The reverse proxy mechanism	p214
		Advantages and disadvantages of the mechanism	p215
	The Nginx proxy module	p216
		Main directives	p217
		Caching, buffering, and temporary files	p220
		Limits, timeouts, and errors	p223
		SSL-related directives	p225
		Other directives	p227
		Variables	p228
	Configuring Apache and Nginx	p229
		Reconfiguring Apache	p229
			Configuration overview	p229
			Resetting the port number	p230
			Accepting local requests only	p231
		Configuring Nginx	p232
			Enabling proxy options	p232
			Separating the content	p233
		Advanced configuration	p236
	Improving the reverse proxy architecture	p237
		Forwarding the correct IP address	p238
		SSL issues and solutions	p238
		Server control panel issues	p239
	Summary	p240
Chapter 7: From Apache to Nginx	p241
	Nginx versus Apache	p241
		Features	p242
			Core and functioning	p242
			General functionality	p243
		Flexibility and community	p243
		Performance	p244
		Usage	p245
		Conclusion	p246
	Porting your Apache configuration	p246
		Directives	p246
		Modules	p249
		Virtual hosts and configuration sections	p250
			Configuration sections	p250
			Creating a virtual host	p251
		.htaccess files	p253
			A recap on Apache .htaccess files	p254
			Nginx equivalence	p255
	Rewrite rules	p257
		General remarks	p257
			On the location	p257
			On the syntax	p258
			RewriteRule	p259
		WordPress	p260
		MediaWiki	p261
		vBulletin	p263
	Summary	p264
Chapter 8: Introducing Load Balancing and Optimization	p265
	An introduction to load balancing	p266
		Understanding the concept of load balancing	p266
		Session affinity	p268
		The upstream module	p268
		Request distribution mechanisms	p270
	Using Nginx as a TCP load balancer	p272
		The Stream module	p272
		An example of MySQL load balancing	p272
	Thread pools and I/O mechanisms	p273
		Relieving worker processes	p273
		AIO, Sendfile, and DirectIO	p275
	Summary	p276
Chapter 9: Case Studies	p277
	Deploying a WordPress site	p278
		Preparing your server and obtaining WordPress	p278
			System requirements	p278
			PHP configuration	p279
			MySQL configuration	p280
			Downloading and extracting WordPress	p281
		Nginx configuration	p281
			HTTP blocks	p282
			The server block	p283
			Location blocks	p283
		WordPress configuration	p284
	Securing communications with HTTPS	p285
		Self-signed certificates and certificate authorities	p286
		Obtaining your SSL certificate	p287
		Enabling HTTPS in your Nginx configuration	p287
		Setting up and testing SPDY	p289
	Creating your ownCloud drive	p290
		Getting ownCloud	p290
		Nginx configuration	p291
		Setting up a self-signed certificate	p294
	Summary	p294
Chapter 10: Troubleshooting	p295
	General tips on troubleshooting	p295
		Checking access permissions	p296
		Testing your configuration	p296
		Have you reloaded the service?	p297
		Checking logs	p297
	Install issues	p298
	The 403 Forbidden custom error page	p298
	400 Bad request	p300
	Truncated or invalid FastCGI responses	p300
	Location block priorities	p300
	If block issues	p301
		Inefficient statements	p301
			Unexpected behavior	p302
	Summary	p303
Index	p305
```