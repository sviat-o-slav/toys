# Toys Web Site Project
Toys market place.
## Technical information
It is created with Laravel engine.
### Requirements for production
- PHP 8.1
- Laravel 9.1
- Apache or Nginx
- MariaDB 10
### Requirements for develop
Project is constructed under Ubuntu 22.04 with Docker environment.
- Ubuntu 22.04
- PHP 8.1
- Docker 20.10.*
- Docker-Compose 1.29.*
Also you can develop without Sail environment so you don't need a docker, but you need local web server like Apache or use a built-in Artisan server.
## Deploy by Makefile
If you want to make a production deploy use make file command:
```
make install-prod
```
This install composer and npm dependencies packages what need to run project and compile resources for production.
But after this you need to configure .ENV, especially turn off debug mode and change log level.
**Deploy for development environment use:**
```
make install-dev
```
This command install all dependencies for composer and npm than compile resources to use for development. Also install Webpack Browser Sync and SASS modules for use to watch live-time changes.
### Sail environment
To make Sail environment you need to sure installed Docker and Docker-Compose than run build command and just wait:
```
make sail-build
```
After that if all complete without errors you can run Sail and starts develop:
```
make sail-up
```
After server is up than you can use it at localhost. For others you can modify docker-compose configuration file.

Stop Sail command:
```
make sail-down
```
### Others commands
Make live-time compiling files changes with run command:
```
make watch
```
Live watch browser refresh can be used at localhost port 3000. For others you need to modify webpack configuration file.
