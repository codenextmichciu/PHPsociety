<?php
/**
 * @package PHPsociety
 * @subpackage Main
 */

// Hi, this is config.php file...
// Here the configuration is stored...
//
// By changing these settings you may destroy working site...
// ...or fix broken site :)

// DATABASE CONNECTION (required)
// PHPsocial uses SQLite, so you only have to worry about
// where to store your database and how to name it to make
// it safe...

$sqlitefile = './folder_name_chosen_by_you/name_chosen_by_you.extension_chosen_by_you';

// When your database is safe, it's all in this section...

// BASIC SETTINGS (required)
// These settings really need to be changed by you, cause
// it's the 1st step of customisation...

// First, choose name for your social network...
// I know it's difficult, but try to make something original...

$networktitle = 'My Society';

// Got it? Now, it's important to the platform to know your
// domain name to send messages to users (lost passwords etc.)

$domainname = 'example.com';

// Rest of the email will be random number (e.g. 38472@exam.ple)
// or constant thing (e.g. support@exam.ple). Note that some
// spam filters block random numbers, so choose by yourself.
// Write 'random' or chosen thing

$supportemailtype = 'support';

/* TO DO: DO MORE OPTIONS */