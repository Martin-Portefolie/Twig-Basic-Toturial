install docker desktop https://www.docker.com/products/docker-desktop/

docker compose up -d
docker compose exec phpfpm bin/console doctrine:migrations:migrate
docker compose exec phpfpm bin/console doctrine:fixtures:load

open browser :)