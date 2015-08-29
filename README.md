# Assumptions (not only) for PHPUnit.

[![Build Status](https://travis-ci.org/MehrAlsNix/Assumptions.svg?branch=develop)](https://travis-ci.org/MehrAlsNix/Assumptions) [![Code Climate](https://codeclimate.com/github/MehrAlsNix/Assumptions/badges/gpa.svg)](https://codeclimate.com/github/MehrAlsNix/Assumptions) [![Test Coverage](https://codeclimate.com/github/MehrAlsNix/Assumptions/badges/coverage.svg)](https://codeclimate.com/github/MehrAlsNix/Assumptions/coverage) [![Dependency Status](https://www.versioneye.com/user/projects/5558aa6eb2ff6d2ecc000368/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5558aa6eb2ff6d2ecc000368)
[![Build status](https://ci.appveyor.com/api/projects/status/xqcdrl8b62d6qrle/branch/develop?svg=true)](https://ci.appveyor.com/project/siad007/assumptions/branch/develop) [![Codeship Status for MehrAlsNix/Assumptions](https://codeship.com/projects/ce1e9440-3009-0133-bb32-265edb7ab8a5/status?branch=develop)](https://codeship.com/projects/99562)

## Introduction

Assumptions can be used to skip tests when common preconditions, like the PHP Version or installed extensions, are not met.

The default PHPUnit runner treats tests with failing assumptions as skipped. Custom runners may behave differently.

We have included several assumptions like `assumeTrue`, `assumeExtensionLoaded`,... by default. All of those functions are subsumed in assumeThat, with the appropriate `Hamcrest` matcher.

A failing assumption in a `@before` or `@beforeClass` method will have the same effect as a failing assumption in each `@test` method of the class.

***

The concept behind **Assumptions for PHPUnit** is based on the adequate junit feature, which is documented on their [wiki - Assumptions with assume](https://github.com/junit-team/junit/wiki/Assumptions-with-assume)

## Note

There is a similar feature in PHPUnit called [@requires](https://phpunit.de/manual/current/en/appendixes.annotations.html#appendixes.annotations.requires)!

If you are familiar in using `@requires` annotation to dedicate that a given [requirement](https://phpunit.de/manual/current/en/incomplete-and-skipped-tests.html#incomplete-and-skipped-tests.requires.tables.api) would be given and you are happy about, then you just do not need the use of **Assumption for PHPUnit**.

But if you want to have
- code completion
- better readability
- finer control
- more requirement abilities

then you should give **Assumption for PHPUnit** a try.

<hr>

## Requirements

- PHP >= 5.4

## Installation

[see wiki:installation](https://github.com/MehrAlsNix/Assumptions/wiki/1.-Installation)

## Assumptions

[see wiki:assumptions](https://github.com/MehrAlsNix/Assumptions/wiki/2.-Assumptions)

## Examples

[see wiki:examples](https://github.com/MehrAlsNix/Assumptions/wiki/3.-Examples)

## ResultPrinter

[see wiki:result-printer](https://github.com/MehrAlsNix/Assumptions/wiki/4.-ResultPrinter)
