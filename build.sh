
rm -rf docs/

mkdir docs

php autonav.php

cp -r SP/* docs/
cp -r Wiki/* docs/
cp homepage.md docs/

mkdocs build
