# Logging with Fluent-bit and different languages

## Running fluent-bit configuration with docker

Simply run `docker-compose up` in the root repo

The configuration for fluent-bit is `fluentbit/etc/fluent-bit.conf`, in this example all inputs are redirected to standard output.

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

