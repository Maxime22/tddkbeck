# Livre Test Driven Development (Kent Beck)

## Description
Le but de ce repo est de suivre le livre TDD de Kent Beck mais en PHP en commitant régulièrement les avancées des différents chapitres.

## Prérequis
- Docker

## Installation
- Cloner le dépôt
- `make build`
- `make start`
- `make sh` + `composer install` dans le container (puis exit)
- Si vos classes ne sont pas reconnues dans les tests, aller dans le container et faire `composer dump-autoload`

## Tests
- `make test`