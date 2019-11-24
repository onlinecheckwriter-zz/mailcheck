# Onlinecheckwriter - Mail Check



onlinecheckwriter.com PHP Client is a simple but flexible wrapper for the [onlinecheckwriter.com](https://www.onlinecheckwriter.com) API. See full onlinecheckwriter.com documentation [here](https://apidoc.onlinecheckwriter.com/?version=latest). 

## Table of Contents

- [Getting Started](#getting-started)
  - [Registration](#registration)
  - [Installation](#installation)
  - [Usage](#usage)
- [Examples](#examples)
- [API Documentation](#api-documentation)


## Getting Started


- Complete registration
- Get Token
- Install package
- You are ready to go.




### Registration

###Sandbox 

First, you will need to first create an account at [sandbox.onlinecheckwriter.com](https://sandbox.onlinecheckwriter.com) and obtain your Test  API Key.

Once you have created an account, you can access your API Keys from the [Developer Panel](https://sandbox.onlinecheckwriter.com/manage/developer/index).


###Live Enviorment 

First, you will need to first create an account at [app.onlinecheckwriter.com](https://app.onlinecheckwriter.com) and obtain your Live  API Key.

Once you have created an account, you can access your API Keys from the [Developer Panel](https://sandbox.onlinecheckwriter.com/manage/developer/index).




### Installation

The recommended way to install onlinecheckwriter.com PHP Client is through [Composer](https://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add onlinecheckwriter.com PHP client as a dependency
composer require onlinecheckwriter/mailcheck
```

After installing, you need to require Composer's autoloader:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Usage

```php
// setToken
// setEnviorment : SANDBOX   

use onlinecheckwriter\MailCheck\Index;

$ocw = (new Index());
$ocw->setToken("G5LoP94QISpOvk6i072yXDFBPwSjRS01foqlYPdVdYJ7li2NRkvzuHvYIzif")
$ocw->setEnviorment("SANDBOX");



// setToken
// setEnviorment : LIVE   

use onlinecheckwriter\MailCheck\Index;

$ocw = (new Index());
$ocw->setToken("YOUR API TOKEN")
$ocw->setEnviorment("LIVE");



```

## Examples

We've provided various examples for you to try out [here](https://github.com/onlinecheckwriter/mailcheck/tree/master/examples).

There are simple scripts to demonstrate how to create all the core onlinecheckwriter objects (checks, sent mail) 

## API Documentation
- [Introduction](https://apidoc.onlinecheckwriter.com/?version=latest)
- [Bank Account](https://apidoc.onlinecheckwriter.com/?version=latest#48499893-414c-4ce8-8dab-88f1d6c32ffd)
- [Payee](https://apidoc.onlinecheckwriter.com/?version=latest#6b0716e6-12df-4f9e-90a7-bb9a5e699940)
- [Check](https://apidoc.onlinecheckwriter.com/?version=latest#a69a82af-6c8f-492d-a976-87866392b534)
- [Mail](https://apidoc.onlinecheckwriter.com/?version=latest#02510e12-f13c-42fa-b6dc-7109e518a629)

=======================

Copyright &copy; 2019 onlinecheckwriter.com

