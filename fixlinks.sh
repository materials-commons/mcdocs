#!/bin/bash

find build_production -type d | while read line; do
  if [ -f ${line}/index.html ]; then
    echo "Processing ${line}/index.html..."
    sed -i "s%/docs%/docs/docs%g" "$line"/index.html
    sed -i "s%/assets%/docs/assets%g" "$line"/index.html
  fi
done
echo Done.
