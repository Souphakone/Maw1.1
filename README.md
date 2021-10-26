# Looper

> Project MAW 1.1
> Reproduction of [Looper](https://stormy-plateau-54488.herokuapp.com)

## Authors

- [Ohan Mélodie](https://github.com/melohan)
- [Samoutphonh Souphakone](https://github.com/Souphakone)


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
- Npm
- Docker

### Setting up Dev

```shell
git clone https://github.com/Souphakone/Maw1.1.git
cd Maw1.1
npm install
composer install
```

These commands download project sources, install phpUnit and configure requirement for autoloader.

## Configuration

> Every file or command is created or executed from the root.

Project db is It is necessary to download
the [database](https://github.com/melohan/looper/tree/develop/Documentation/Db) and the
insertion [data](https://github.com/melohan/looper/tree/develop/Documentation/Db).

#### Docker

> WSL2 is for Windows

-  [WSL2 Linux kernel upgrade package for x64 machines](https://wslstorestorage.blob.core.windows.net/wslblob/wsl_update_x64.msi)
-  [Docker](https://www.docker.com/products/docker-desktop).

If an error occurs and the activation of virtualization in the BIOS is not sufficient, you will find a procedure in
this [document](https://docs.microsoft.com/fr-fr/windows/wsl/install-manual).


##### Steps to follow

```shell
# create image
docker compose build
# start/stop image
docker compose start
docker compose stop
# create image, start it with log error
docker compose up
# connect db
```

##### Database
>From your terminal execute command:

```docker exec -it db mysql -u root -p ```
> Then execute this [script](https://github.com/Souphakone/Maw1.1/blob/main/config/db/dataBase.sql).

#### Configuration file

To set up DB connection and password's, it is necessary to create the file: config.php with these constants:

```php
<?php
// connection.php
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
 
