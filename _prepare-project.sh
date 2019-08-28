#!/bin/bash

echo "This might take a while...";

tput bold; echo "Running NPM install."
tput sgr0
npm install || exit 1

tput bold; echo "Running composer install..."
tput sgr0
composer install || exit 1

tput bold; echo "Running bower install..."
tput sgr0
bower install || exit 1

tput bold; echo "Running gulp..."
tput sgr0
gulp || exit 1
