# RUN

To run tests execute below commands
- `docker-compose up -d`
- `docker-compose exec php chromedriver --url-base=/wd/hub` (in separate console window)
- `docker-compose exec php ./vendor/bin/codecept run acceptance`

The results will be placed in `_output` directory