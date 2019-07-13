#!/bin/sh
dir=$(dirname $(CDPATH= cd -- "$(dirname -- "$0")" && pwd))
cd $dir;
docker-compose exec php php ./vendor/bin/codecept $@
printf "Done\n"