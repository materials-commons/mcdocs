#!/bin/sh
npm run production
./fixlinks.sh
sudo rm -rf /var/www/html/docs.old
sudo mv /var/www/html/docs /var/www/html/docs.old
sudo cp -r build_production /var/www/html/docs
sudo chown -R nginx:nginx /var/www/html/docs
