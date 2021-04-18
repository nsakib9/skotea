#!/bin/bash

/opt/elasticbeanstalk/bin/get-config environment | jq -r 'to_entries[] | .key + "=" + .value' > .env
sed -i 's/RDS_HOSTNAME/DB_HOST/g' .env
sed -i 's/RDS_DB_NAME/DB_DATABASE/g' .env
sed -i 's/RDS_/DB_/g' .env
chown webapp:webapp .env
chmod 400 .env
