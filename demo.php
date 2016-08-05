<?php
$str = 'Table of Contents	table.4
Constructor	chapter*.1
	Format	section*.2
	Errata	section*.3
	Sample Code	section*.4
	About the Author	section*.6
Chapter 1 - Never Trust Your Users. Sanitize ALL Input!	chapter*.7
	SQL Injection	section*.8
	Mass Assignment	section*.13
	Typecasting	section*.14
	Sanitizing Output	section*.15
Chapter Two - HTTPS/SSL/BCA/JWH/SHA and Other Random Letters; Some of Them Actually Matter.	chapter*.18
	What is HTTPS	section*.19
	Limitations	section*.20
	When to use HTTPS	section*.25
	Implementing HTTPS	section*.26
	Paths	section*.33
Chapter 3 - Password Encryption and Storage for Everyone	chapter*.37
	The Small Print	section*.38
	What is a Hash?	section*.39
	Popular Attacks	section*.40
	A Pinch of Salt	section*.44
	Hashing Algorithms	section*.46
	Storage	section*.52
	Validation	section*.53
	Putting It All Together	section*.54
	Brute Force Protection	section*.57
	Upgrading Legacy Systems	section*.58
	Resources	section*.62
Chapter 4 - Authentication, Access Control, and Safe File Handing	chapter*.63
	Authentication	section*.64
	Access Control	section*.65
	Validating Redirects	section*.66
	Obfuscation	section*.67
	Safe File Handing	section*.68
Chapter 5 - Safe Defaults, Cross Site Scripting, and Other Popular Hacks	chapter*.70
	Never Trust Yourself - Use Safe Defaults	section*.71
	Never Trust Dynamic Typing. It\'s Not Your Friend.	section*.72
	Cross Site Scripting	section*.73
	Attack Entry Points	section*.76
	Cross Site Request Forgery	section*.78
	Multiple Form Submits	section*.80
	Race Conditions	section*.81
	Outdated Libraries / External Programs	section*.82
Destructor	chapter*.83
	About the Author	section*.85
	Security Audit / Consulting	section*.86
';

//$pattern = '/(.*)\s+000(.*)(\n)/';
//
//$str = '关注图灵	257
//		B.4　Your Gists	254
//					Gist的菜单	252
//';
//
//preg_match_all($pattern, $str, $matches);
//
//var_dump($matches);
//exit;

//$pattern = '/(.*)\s+[-p\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*\d]+[\r\n]/';
$replacement = '${1}${3}';

echo
'<pre>',
(preg_replace($pattern, $replacement, $str)),
'</pre>';
