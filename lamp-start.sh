#!/bin/bash


#this file calls PHP
#i don't really understand it, i don't usually have to do this, but i guess you have to in glitch


.mysql/run-mysqld.sh &
.apache2/run-apache2.sh &

wait
