# A Docker container for development on PHP/Nginx

## Version

0.5

## Current Tools in this Package

* Nginx - Latest Stable
* PHP - 7.4.1
* Redis - 4.1.1
* XDebug - 2.9.0
* MySQL - 5.7.23
* PHP Unit - 8.2.x
* Mockery - 1.4.x
* PHP Codesniffer - 3.x

## Prerequisites

* Docker installed and running locally.

## Basic Usage

1. Clone this into a new directory locally.
2. Within the new directory:  
    `docker-compose up -d` to start the dev environment.  
    `docker exec -it phpapp bash` to ssh into the container.  
    `docker-compose down` to stop.
3. Update the 'app/composer.json' file with the new project name and namespacing.
4. SSH into the container and run `composer update`.
5. Create new repo for the app if desired (in the /app directory: `git init`).

## Composer and PHP Unit / Codesniffer Usage

**NOTE:** Composer must always be run from within the container.

* `composer unit` to run unit tests in `/app/tests/Unit` directory
* `composer sniff` to run PHP Codesniffer in `/app` directory
* Codesniffer uses PSR-2 rules out of the box.
