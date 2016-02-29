# instantiator

Instantiate Objects in PHP

[![Build Status](https://travis-ci.org/mrkrstphr/instantiator.svg?branch=master)](https://travis-ci.org/mrkrstphr/instantiator)

## Installation

```text
composer install mrkrstphr/instantiator
```

## Usage

Instantiate objects with arguments:

```php
$instantiator = new mrkrstphr\Instantiator();
$object = $instantiator->instantiate('\DateTime', ['time' => '2016-04-01']);
```
