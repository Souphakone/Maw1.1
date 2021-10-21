# Looper

> Project MAW 1.1
> Reproduction of [Looper](https://stormy-plateau-54488.herokuapp.com)

## Authors

- [Ohan Mélodie](https://github.com/melohan)
- [Samoutphonh Souphakone](https://github.com/Souphakone)

## Installing

### Docker

This project requires the installation of [Docker](https://www.docker.com/products/docker-desktop).

If an error occurs and the activation of virtualization in the BIOS is not sufficient, you will find a procedure in
this [document](https://docs.microsoft.com/fr-fr/windows/wsl/install-manual).

## Developing

### Built With

- [Font Awesome Free 5.15.4 by @fontawesome](https://fontawesome.com)
- [Milligram v1.4.1](https://milligram.io)
- [Normalize.css v8.0.1](github.com/necolas/normalize.css)
- [PHPUnit](https://phpunit.de/getting-started/phpunit-9.html)

### Prerequisites

- PHP 8.0.0 or greater
- MariaDB 10.6.4
- Composer
- npm

### Setting up Dev

```shell
git clone https://github.com/melohan/looper.git
cd looper/
composer install
npm install
```

These commands download project sources, install phpUnit and configure requirement for autoloader.

## Configuration

> Every file or command is created or executed from the root.

Project db is It is necessary to download
the [database](https://github.com/melohan/looper/tree/develop/Documentation/Db) and the
insertion [data](https://github.com/melohan/looper/tree/develop/Documentation/Db).

#### Docker

Steps to follow

#### Configuration file

To set up DB connection and password's, it is necessary to create the file: config.php with these constants:

```php
<?php
// config.php
const HOST = '';
const PORT = '';
const USER = '';
const PWD = '';
const DB_NAME = '';
?>  
```

## Tests

> The following tests are based on this [database](https://github.com/melohan/looper/tree/develop/tests/db) 

> All classes use the DB class to make connections and queries to the database through the main model. The main model is abstracte and tested through its children.

```shell
php vendor\phpunit\phpunit\phpunit test\DBTest.php
php vendor\phpunit\phpunit\phpunit test\AnswerTest.php
php vendor\phpunit\phpunit\phpunit test\ExerciseTest.php
php vendor\phpunit\phpunit\phpunit test\QuestionTest.php
php vendor\phpunit\phpunit\phpunit test\StatusTest.php
php vendor\phpunit\phpunit\phpunit test\TypeTest.php
php vendor\phpunit\phpunit\phpunit test\UserTest.php
```
 
