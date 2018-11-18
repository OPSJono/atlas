Description
=========

[![Build Status](https://travis-ci.org/Yannik/ansible-role-php.svg?branch=master)](https://travis-ci.org/Yannik/ansible-role-php)

This role allows you to install php 5.6 and/or php 7.0 on ubuntu trusty and debian jessie.

Requirements
------------

This package must be able to install the dotdeb package on debian and the Ondrej Surys php ppa on Ubuntu.

Role Variables
--------------

* `php_install_versions`: List of php versions to install
    * Default: `['5.6', '7.0']`
    * Possible values: `'5.6'`, `'7.0'`
* `php_default_cli_version`: The default php version for the `php` command
    * Default: `'5.6'`
    * Possible values: `'5.6'`, `'7.0'`


Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    - hosts: all
      roles:
         - Yannik.php

License
-------

GPLv2

Author Information
------------------

Yannik Sembritzki
