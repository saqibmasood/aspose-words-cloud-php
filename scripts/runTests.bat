docker run -v %cd%/SDKs/PHP/:/PHP -v %cd%/SDKs/servercreds.json:/servercreds.json -v %cd%/TestData:/TestData -w="/PHP" --rm php:7.2.0 vendor/bin/phpunit -c phpunit.xml