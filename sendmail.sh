#!/bin/bash

NAME=$1
EMAIL=$2
MESSAGE=$3

TO="anandu.redteamacademy@gmail.com"
SUBJECT="Contact Form Submission"

echo -e "Name: $NAME\nEmail: $EMAIL\nMessage:\n$MESSAGE" | mail -s "$SUBJECT" "$TO"
