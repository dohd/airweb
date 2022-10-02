#!/bin/sh
# start php server listening on port 5000
gnome-terminal -- sh -c "php -S localhost:5000 -t public; bash"
