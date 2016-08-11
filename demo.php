<?php
$str = 'Cover	-17
Copyright	-15
Credits	-14
About the Author	-13
About the Reviewers	-12
www.PacktPub.com	-8
Table of Contents	-6
Preface	p17
Chapter 1: Installing PHPUnit	p25
	Requirements	p26
		Running PHP from the command line	p27
	Composer – the dependency manager for PHP	p28
		Installing Composer	p29
		Installation	p29
			Local installation	p30
			System-wide installation	p30
	Installing PEAR	p31
		Installing PHPUnit	p32
	Other installation methods	p33
		Installing the Linux package	p33
		Manual installation	p34
	Testing the installation	p34
		Xdebug	p37
			Installing Xdebug	p37
	Summary	p39
Chapter 2: PHPUnit Support in IDEs	p41
	IDEs and PHPUnit	p42
		NetBeans	p43
		Zend Studio	p47
		Eclipse PDT	p50
			Installing MakeGood	p51
			Creating your FirstTest	p55
		PhpStorm	p57
	Summary	p61
Chapter 3: Tests and What They\'re All About	p63
	Understanding unit testing	p64
		What is a unit test?	p64
		Assertions	p64
		The importance of unit testing	p65
		Testing all possible scenarios	p65
		What makes a good test?	p66
		When to write tests	p66
	Anatomy of a PHPUnit test	p67
		Defining test methods	p69
		Testing functions	p69
		Testing methods	p72
	The MVC application architecture and tests	p77
		Testing controllers	p78
	Summary	p80
Chapter 4: Testing Dependencies and Exceptions	p83
	Detecting dependencies	p84
	Handling dependencies	p88
	Exceptions are expected	p96
		Testing errors and exceptions	p97
	Summary	p99
Chapter 5: Running Tests from the Command Line	p101
	Running tests	p101
		Processing test results	p102
			Test statuses	p103
		Command-line switches	p106
			Logging results	p107
			Code coverage	p107
			Including and excluding tests from the execution	p107
			When to stop the test execution	p108
			Configuration options	p108
		Code coverage analysis	p109
	Summary	p112
Chapter 6: Test Isolation and Interaction	p113
	Test fixtures	p113
		Before and after each test method	p114
		Before and after each test suite class	p115
	Global state	p116
	Test dependencies	p119
	Data providers	p120
	Summary	p122
Chapter 7: Organizing Tests	p123
	The PHPUnit XML configuration file	p123
		Test listeners	p125
		Configuring the code coverage	p126
	Where to store tests	p126
		Test suites	p127
		Groups	p128
	Using the bootstrap file	p129
	Summary	p130
Chapter 8: Using Test Doubles	p131
	Creating test doubles	p132
	Test doubles in action	p135
		Using fake	p138
		Using stubs	p139
		Using mocks and expectations	p142
		Test proxies	p147
	Understanding Mockery	p148
		Installation methods	p148
		Comparing Mockery to PHPUnit	p149
		How to use Mockery	p151
	Summary	p153
Chapter 9: Database Testing	p155
	Which database to use	p156
	Tests for a database	p157
	DBUnit	p168
		Installing DBUnit	p168
		Database test cases	p168
		Datasets	p169
		Using DBUnit	p170
	Doctrine 2 ORM and database testing	p175
	Summary	p182
Chapter 10: Testing APIs	p183
	An example of integration testing	p184
	Testing the PayPal API	p193
	Testing the Facebook API	p200
	Testing the Twitter API	p205
	Testing the service-oriented architecture	p209
	Summary	p210
Chapter 11: Testing Legacy Code	p211
	Testing spaghetti code	p213
		Black box testing	p213
		Using Reflection	p214
	Handling dependencies	p217
		The Patchwork library	p217
		The vfsStream library	p220
		The runkit PHP extension	p223
	Summary	p229
Chapter 12: Functional Tests in the Web Browser Using Selenium	p231
	Installing Selenium	p232
		The Selenium IDE	p232
		The Selenium Server	p235
			Installing drivers	p237
		The PHPUnit Selenium extension	p237
	Testing in the browser	p238
		Recording Selenium tests	p238
		PHPUnit Selenium2TestCase	p242
	Writing Selenium tests	p245
	PHP-SeleniumClient	p259
	Organizing Selenium tests	p261
	Summary	p262
Chapter 13: Continuous Integration	p263
	Using a Travis CI hosted service	p264
		Setting up Travis CI	p265
		Using Travis CI	p267
	Using the Jenkins CI server	p269
		Installation	p269
		Usage	p270
			Creating a job	p271
			Results	p273
	Using the Xinc PHP CI server	p274
		Installation	p274
		Usage	p276
	Summary	p281
Chapter 14: PHPUnit Alternatives, Extensions, Relatives, and BDD	p283
	Unit testing alternatives	p284
	PHPUnit extensions	p284
	Behavior-driven development	p285
		Understanding BDD	p285
		Testing with PHPSpec	p286
			Installing PHPSpec	p287
			Using PHPSpec	p288
		Functional testing with Behat	p293
			Installing Behat	p294
			Using Behat	p295
	Summary	p300
Index	p303
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

$pattern = '/(.*)\s+[-p\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*_:\d]+[\r\n]/';
$pattern = '/(.*)\s+[-p\w\.\*_:\d深入理解（全）]+[\r\n]/';
$replacement = '${1}${3}';

echo
'<pre>',
(preg_replace($pattern, $replacement, $str)),
'</pre>';
