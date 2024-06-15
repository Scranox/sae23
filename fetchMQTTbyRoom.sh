#!/bin/bash

while [ -z $mesure ]
do
    mesure=$(mosquitto_sub --url mqtt://mqtt.iut-blagnac.fr/AM107/by-room/$1/data -C 1 | jq ".[0].$2")
done

$(mariadb --user="production" --password='Effectivement!Saucisse!' -e "INSERT INTO mesures (date, horaire, valeur, ref_capteur) VALUES (CURDATE(), CURTIME(), '$mesure', '$3');" sae23)
kill $(ps aux | grep '$sensorname' | awk '{print $2}' | tail -n 3 | head -n 1)
