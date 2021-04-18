#!/bin/bash

php artisan config:cache --no-interaction && \
  php artisan view:cache --no-interaction
