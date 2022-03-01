# compra-k8s

** Pre-Requisites **
PHP 7.2.24

** RUN **
php -S 0.0.0.0:8080

** Build docker container **
docker build . -t markoshlima/compra-k8s

** Start docker container **
docker run -it -p 5003:8080 -d markoshlima/compra-k8s

** Logs docker container **
docker logs [img]

** Inspect docker image **
docker inspect [img]
docker exec -it [img] /bin/bash

** Stop docker container **
docker stop [img]