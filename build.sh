
rm -rf docs/

mkdir docs

php autonav.php

cp -r SP/* docs/
cp -r Wiki/* docs/
cp index.md docs/

mkdocs serve
