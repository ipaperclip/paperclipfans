#!/bin/bash

rm -rf docs/
mkdir docs

cp Tools/mkdocs.example.yml mkdocs.yml
cp -r Start/* docs/

php autobuild.php
mkdocs build
php -S localhost:8000 -t site/
