# Logging with Fluent-bit and different languages

## Running fluent-bit configuration with docker

Simply run `docker-compose up` in the root repo

The configuration for fluent-bit is `fluentbit/etc/fluent-bit.conf`, in this example all inputs are redirected to standard output.

The input selected for fluentbit is TCP Json Socket because is more standard than fluent protocol. The most known languages are libraries for logging into a tcp socket so this solution it must work with many languages.

## Running example for Node.JS

This example is proved with NodeJS >9.x with

```bash
npm install
node --experimental-modules test-fluent.mjs
```

## Running example for PHP

This example is proved with PHP 7.x

```bash
composer install
php test-fluent.php
```

## Running example for Ruby

This example is proved with Ruby 2.5+

```bash
sudo gem install bundler
bundle install --path vendor
ruby test-fluent.rb
```

## Configuration for JAVA

Configure log4j2 with the XML

Sorry I can't make an example, my knowledge with JAVA is very poor