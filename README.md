install docker desktop https://www.docker.com/products/docker-desktop/


```shell
docker compose up -d
docker compose exec phpfpm bin/console doctrine:migrations:migrate
docker compose exec phpfpm bin/console doctrine:fixtures:load
```
```shell
docker compose ps
```
open the project in the browser :)