#!/data/data/com.termux/files/usr/bin/bash

# Porta padrão (8080), mas pode sobrescrever
PORT=${1:-8080}

php -S localhost:$PORT -t . > /dev/null 2>&1 &
PHP_PID=$!

browser-sync start --proxy "localhost:$PORT" --files "*.php, *.html, *.css, *.js"

kill $PHP_PID
