#!/bin/bash

aws s3 sync s3://"$(/opt/elasticbeanstalk/bin/get-config environment --key=AWS_BUCKET)"/credentials/ ./resources/credentials
chown -R webapp:webapp ./resources/credentials
