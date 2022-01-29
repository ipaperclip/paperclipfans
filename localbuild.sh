#!/bin/bash

rm -rf docs/
mkdir docs

cp Tools/mkdocs.example.yml mkdocs.yml
cp -r Start/* docs/

php autobuild.php
mkdocs serve
