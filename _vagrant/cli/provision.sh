#!/bin/sh

wp_location='/var/www/www.192.168.27.12.xip.io/public_html'

###########################################################
# WordPress Setup
###########################################################

cd "$wp_location" && /opt/wp-cli/bin/wp core update

cd "$wp_location" && /opt/wp-cli/bin/wp theme install kuorinka
cd "$wp_location" && /opt/wp-cli/bin/wp theme install saga
cd "$wp_location" && /opt/wp-cli/bin/wp theme install simppeli
cd "$wp_location" && /opt/wp-cli/bin/wp theme install stargazer
cd "$wp_location" && /opt/wp-cli/bin/wp theme install twentyfifteen
cd "$wp_location" && /opt/wp-cli/bin/wp theme update --all

cd "$wp_location" && /opt/wp-cli/bin/wp plugin install regenerate-thumbnails
cd "$wp_location" && /opt/wp-cli/bin/wp plugin install wordpress-importer
cd "$wp_location" && /opt/wp-cli/bin/wp plugin update --all