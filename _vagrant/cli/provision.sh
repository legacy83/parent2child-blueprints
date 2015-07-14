#!/bin/sh

###########################################################
# Cli Provision
###########################################################

domain='192.168.27.12.xip.io'

apache2AddVhost="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma12-cookbook/master/book/stuff/apache2/addVhost.sh)"
apache2Add301Redirect="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma12-cookbook/master/book/stuff/apache2/add301Redirect.sh)"
mySQLCreateDB="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma12-cookbook/master/book/stuff/mySQL/createDB.sh)"

##########################################
# WWW Setup
##########################################

#echo "$apache2AddVhost" | bash -s "$domain"
#echo "$apache2AddVhost" | bash -s "www.$domain"
#echo "$apache2Add301Redirect" | bash -s "$domain" "www.$domain"

##########################################
# Apache2 Virtual Hosts
##########################################

#echo "$apache2AddVhost" | bash -s "wp.$domain"
#echo "$apache2AddVhost" | bash -s "piwik.$domain"
#echo "$apache2AddVhost" | bash -s "translate.$domain"

##########################################
# MySQL Databases
##########################################

#echo "$mySQLCreateDB" | bash -s "wp"
#echo "$mySQLCreateDB" | bash -s "piwik"
#echo "$mySQLCreateDB" | bash -s "translate"

#echo "$mySQLCreateDB" | bash -s "skeleton"

##########################################
# Skeleton Project Setup
##########################################

#rm -rf "/var/www/www.$domain/public_html"
#ln -s /vagrant/projects/skeleton "/var/www/www.$domain/public_html"
