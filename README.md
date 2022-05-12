# compra-k8s

**Pre-Requisites** <br />
PHP 7.2.24

**RUN** <br />
php -S 0.0.0.0:8080

**Build docker container** <br />
docker build . -t markoshlima/compra-k8s<br />
docker build . -t markoshlima/compra-k8s --platform linux/amd64 //EKS

**Start docker container** <br />
docker run -it -p 5003:8080 -d markoshlima/compra-k8s

**Logs docker container** <br />
docker logs [img]

**Inspect docker image** <br />
docker inspect [img] <br />
docker exec -it [img] /bin/bash

**Stop docker container** <br />
docker stop [img]