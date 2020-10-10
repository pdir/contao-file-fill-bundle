# Contao File Fill Bundle

## Tests, Cs Fixer, check Contao coding standards

	wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fixer
	wget -O phpunit https://phar.phpunit.de/phpunit-9.phar

  php php-cs-fixer
  php phpunit
	sh vendor/bin/ecs check src tests --config vendor/contao/easy-coding-standard/config/default.php



