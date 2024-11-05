#!/bin/bash

# Run PHP-FPM 
/usr/sbin/php-fpm &

# Supervisor
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
