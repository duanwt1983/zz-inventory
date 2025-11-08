#!/bin/bash

# Example deployment script for CentOS 9 (LNMP stack)
set -e

echo "Install EPEL and Remi repo, PHP 8.1, nginx, mariadb, redis... (this script is a template)"
# Installation commands omitted — adapt to your environment

echo "Remember to configure php-fpm user, create database and user, set .env, run migrations and seeders."
