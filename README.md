# FlorianWolters\Component\Core\HashCode

[![Build Status](https://secure.travis-ci.org/FlorianWolters/PHP-Component-Core-HashCode.png?branch=master)](http://travis-ci.org/FlorianWolters/PHP-Component-Core-HashCode)

**FlorianWolters\Component\Core\HashCode** is a simple-to-use [PHP][17] component that provides a hash code value for objects.

## Introduction

This component is inspired by the method [`java.lang.Object.hashCode`][26] of the [Java][27] programming language.

The component consists of three artifacts:

1. The interface `FlorianWolters\Component\Core\HashCodeInterface`.
2. The trait `FlorianWolters\Component\Core\HashCodeTrait` which provides a default hash code value implementation for objects.

It is suggested to use the trait `HashCodeTrait` if the [PHP][17] version is equal or greater than 5.4.0.

## Features

* The `HashCodeTrait::hashCode` method implements a default hash code value implementation for objects (Refer to the section [Usage](#using-the-default-implementation) below for an example).
* The default hash code value implementation can be replaced by overriding the public method `HashCodeTrait::hashCode` in the class using the trait `HashCodeTrait` (Refer to the section [Usage](#using-a-custom-implementation) below for an example).
* Artifacts tested with both static and dynamic test procedures:
    * Dynamic component tests (unit tests) implemented using [PHPUnit][19].
    * Static code analysis performed using the following tools:
        * [PHP_CodeSniffer][14]: Style Checker
        * [PHP Mess Detector (PHPMD)][18]: Code Analyzer
        * [phpcpd][4]: Copy/Paste Detector (CPD)
        * [phpdcd][5]: Dead Code Detector (DCD)
* Installable via [Composer][3] or [PEAR installer][11]:
    * Provides a [Packagist][25] package which can be installed using the dependency manager [Composer][3].
        * Click [here][24] for the package on [Packagist][25].
    * Provides a [PEAR package][13] which can be installed using the package manager [PEAR installer][11].
        * Click [here][9] for the [PEAR channel][12].
* Provides a complete Application Programming Interface (API) documentation generated with the documentation generator [ApiGen][2].
    * Click [here][1] for the current API documentation.
* Follows the [PSR-0][6] requirements for autoloader interoperability.
* Follows the [PSR-1][7] basic coding style guide.
* Follows the [PSR-2][8] coding style guide.
* Follows the [Semantic Versioning][20] Specification (SemVer) 2.0.0-rc.1.

## Requirements

* [PHP][17] >= 5.3.0
* [PHP][17] >= 5.4.0 to use the trait `HashCodeTrait`

## Installation

### Local Installation

**FlorianWolters\Component\Core\HashCode** should be installed using the dependency manager [Composer][3]. [Composer][3] can be installed with [PHP][6].

    php -r "eval('?>'.file_get_contents('http://getcomposer.org/installer'));"

> This will just check a few [PHP][17] settings and then download `composer.phar` to your working directory. This file is the [Composer][3] binary. It is a PHAR ([PHP][17] archive), which is an archive format for [PHP][17] which can be run on the command line, amongst other things.
>
> Next, run the `install` command to resolve and download dependencies:

    php composer.phar install

### System-Wide Installation

**FlorianWolters\Component\Core\HashCode** should be installed using the [PEAR installer][11]. This installer is the [PHP][17] community's de-facto standard for installing [PHP][17] components.

    pear channel-discover pear.florianwolters.de
    pear install --alldeps fw/HashCode

## As A Dependency On Your Component

### Composer

If you are creating a component that relies on **FlorianWolters\Component\Core\HashCode**, please make sure that you add **FlorianWolters\Component\Core\HashCode** to your component's `composer.json` file:

```json
{
    "require": {
        "florianwolters/component-core-hashcode": "0.1.*"
    }
}
```

### PEAR

If you are creating a component that relies on **FlorianWolters\Component\Core\HashCode**, please make sure that you add **FlorianWolters\Component\Core\HashCode** to your component's `package.xml` file:

```xml
<dependencies>
  <required>
    <package>
      <name>HashCode</name>
      <channel>pear.florianwolters.de</channel>
      <min>0.1.0</min>
      <max>0.1.99</max>
    </package>
  </required>
</dependencies>
```

## Usage

The best documentation for **FlorianWolters\Component\Core\HashCode** are the unit tests, which are shipped in the package. You will find them installed into your [PEAR][10] repository, which on Linux systems is normally `/usr/share/php/test`.

The most important usage rule:

> Always implement the interface `HashCodeInterface` if using the trait `HashCodeTrait`.

### Examples

#### Using the default implementation

```php
```

#### Using a custom implementation

In the following example the default implementation (using the global function `\spl_object_hash`) is overwritten with a custom implementation (for a *Value Object*, in this case a person).

```php
```

## Development Environment

If you want to patch or enhance this component, you will need to create a suitable development environment. The easiest way to do that is to install [phix4componentdev][16]:

    # phix4componentdev
    pear channel-discover pear.phix-project.org
    pear install phix/phix4componentdev

You can then clone the Git repository:

    # PHP-Component-Core-HashCode
    git clone http://github.com/FlorianWolters/PHP-Component-Core-HashCode

Then, install a local copy of this component's dependencies to complete the development environment:

    # build vendor/ folder
    phing build-vendor

To make life easier for you, common tasks (such as running unit tests, generating code review analytics, and creating the [PEAR package][13]) have been automated using [phing][15]. You'll find the automated steps inside the `build.xml` file that ships with the component.

Run the command `phing` in the component's top-level folder to see the full list of available automated tasks.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU Lesser General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License along with this program. If not, see <http://gnu.org/licenses/lgpl.txt>.

[1]: http://blog.florianwolters.de/PHP-Component-Core-HashCode
[2]: http://apigen.org
[3]: http://getcomposer.org
[4]: https://github.com/sebastianbergmann/phpcpd
[5]: https://github.com/sebastianbergmann/phpdcd
[6]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
[7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[8]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[9]: http://pear.florianwolters.de
[10]: http://pear.php.net
[11]: http://pear.php.net/manual/en/guide.users.commandline.cli.php
[12]: http://pear.php.net/manual/en/guide.users.concepts.channel.php
[13]: http://pear.php.net/manual/en/guide.users.concepts.package.php
[14]: http://pear.php.net/package/PHP_CodeSniffer
[15]: http://phing.info
[16]: https://github.com/stuartherbert/phix4componentdev
[17]: http://php.net
[18]: http://phpmd.org
[19]: http://phpunit.de
[20]: http://semver.org
[24]: http://packagist.org/packages/florianwolters/component-core-hashcode
[25]: http://packagist.org
[26]: http://docs.oracle.com/javase/7/docs/api/java/lang/Object.html#hashCode()
[27]: http://java.com
