# Kyla Framework
## Installation
When you running this script first time you will get notification for install requirements using composer.
Let's Try **Composer install** in your terminal for installation.
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
When you forget to create database, system will create database automatically. You just reload your project page and system will created database for you.

## How To Use
In this framework will be routing automatically using url segment. You must configuration segment. Edit **app.php** file in **Bootstrap** Folder. If you create this project in subfolder, edit *$class_data* and *$method_data* variable with count your segment to index.php.
```php
$class_data = (isset(SEGMENT[0]))?SEGMENT[0]:'home'; // if in root domain
$method_data = (isset(SEGMENT[1]))?SEGMENT[1]:'index';
```
For example i installed this project in website.com/path/ folder. Root to path count is 1 segment. You just add 1 to $class_data and $method_data.
```php
$class_data = (isset(SEGMENT[1]))?SEGMENT[1]:'home'; // if in sub folder
$method_data = (isset(SEGMENT[2]))?SEGMENT[2]:'index';
```

## License

Released under Apache-2.0 License - see the [License File](LICENSE) for details.
