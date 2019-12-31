#!/bin/bash

ls build_production/docs | while read line
do
  echo "Processes ${line}/index.html..."
  sed -i "s%/docs%/docs/docs%g" build_production/docs/$line/index.html
  sed -i "s%/assets%/docs/assets%g" build_production/docs/$line/index.html
done
echo Done.
