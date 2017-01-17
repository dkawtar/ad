php bin/console cache:clear
php bin/console cache:warmup
php bin/console assets:install
php bin/console assetic:dump

chown -R anthony-dev:www-data .
