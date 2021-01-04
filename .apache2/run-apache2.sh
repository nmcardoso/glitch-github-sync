#!/usr/bin/env bash

export APACHE_LOCK_DIR=/tmp
export APACHE_RUN_USER=app
export APACHE_RUN_GROUP=app
export APACHE_LOG_DIR=log

if [ ! -d /app/.apache2/log ]; then
  mkdir -p /app/.apache2/log
fi

apache2 -DFOREGROUND
