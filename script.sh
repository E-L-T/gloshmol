#!/bin/bash
echo "script lancé"

if [ ! -d imagier600px/ ]; then 
mkdir imagier600px/
fi

if [ ! -d imagier900px/ ]; then 
mkdir imagier900px/
fi

for f in `find . -type f -iname "*.jpg"`
do
	cp ./"${f}" imagier600px/
	cp ./"${f}" imagier900px/
  mogrify -quality 80 -resize "600x600>" imagier600px/"${f}" 
  mogrify -quality 80 -resize "900x900>" imagier900px/"${f}" 
done
