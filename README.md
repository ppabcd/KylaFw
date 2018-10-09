# Kyla Framework
Kyla framework is a framework for the [Kyla AI project](https://github.com/ppabcd/Kyla-AI)
## Getting started
### Prerequisites
Install [Composer](https://getcomposer.org/) to manage all of the PHP dependencies, and [git](https://git-scm.com/) to clone and manage the repository.

### Install
1. Clone the project with git with the next command:
```bash
$ git clone https://github.com/ppabcd/KylaFw.git
$ cd KylaFw
```
2. Once the repository has been cloned in your environment install PHP dependencies with Composer. (The next command line might not work if the [environment variables](https://en.wikipedia.org/wiki/Environment_variable) are not properly configured)
```bash
$ composer install
```

## Database Setup
Edit **connection.php** in **Config** Folder with your configuration.
```php
<?php
return [
  'host' => 'HOST',
  'username' => 'USERNAME',
  'password' => 'PASSWORD',
  'database' => 'DATABASE'
];
```
If there is no databse KylaFW will automatically create a new database; just reload the project page and the databse should be created.

## How To Use
In this framework will be routing automatically using URL Segment. You must configurare segments. 
You can config the segments in **app.php** file in **Bootstrap** Folder. If you create this project in a subfolder, edit the *$class_data* and *$method_data* variables to acount for the subfolder

Examples (in *Bootstrap/app.php*):  
Focus on the index in *SEGMENT*, if the the project is in the root of your domain then the indexes must be 0 and 1.
```php
$class_data = (isset(SEGMENT[0]))?SEGMENT[0]:'home'; // if in root domain
$method_data = (isset(SEGMENT[1]))?SEGMENT[1]:'index';
```
If the project is in a subfolder then the indexes should be 0+\[subfolder depth], the next example is if the project is one folder inside of the root domain (e.g website.com/path/*folder*)
```php
$class_data = (isset(SEGMENT[1]))?SEGMENT[1]:'home'; // if in sub folder
$method_data = (isset(SEGMENT[2]))?SEGMENT[2]:'index';
```

## License

Released under MIT License - see the [LICENSE](LICENSE) for details.
