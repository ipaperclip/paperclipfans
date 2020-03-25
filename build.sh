
rm -rf docs/

mkdir docs

cp mkdocs.example.yml mkdocs.yml

php autonav.php

cp -r SP/ docs/
cp -r Wiki/ docs/
cp -r Start/* docs/

mkdocs serve
