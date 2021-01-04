#!/usr/bin/env bash
set -e

if [ ! -d /app/.data/mysql ]; then
  mkdir -p /app/.data/mysql
  mkdir -p /app/.data/log/mysql
  mysqld --initialize-insecure
  initialize=true
fi

if [ "$(pgrep mysqld)" ]; then
  echo 'MySQL server already running'
  exit 0
fi

mysqld &
pid=$!

if [ "${initialize}" = "true" ]; then
  sleep 3
  mysql -u root < /app/.mysql/app_database.sql
fi

#Transform SIGINT to SIGTERM
trap "{ kill -TERM ${pid}; }" INT
wait
