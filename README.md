
# Tests Unitaires en PHP

Ce repo permet d'appréhender les tests unitaires en PHP avec PHPUnit.

Les instructions qui suivent vont vous permettre de lancer ce projet sur votre ordinateur, en local.

### Prérequis

Ce projet utilise le gestionnaire de dépendances *composer*, que vous pouvez installer depuis le [site officiel](https://getcomposer.org/download/).

Une fois installé, vous pouvez utiliser *composer* pour gérer vos dépendances dans l'ensemble de vos projet.
Pour cela il vous suffit d'initialiser composer dans votre projet comme ceci:

```sh
composer init
```

*composer* nous permet d'utiliser plusieurs packages disponible depuis [packagist.org](https://packagist.org/).

Liste des packages utilisés:

- `phpunit/phpunit` pour les tests unitaires
- `symfony/yaml` pour parser nos fichiers YAML
- `psy/psysh` pour débugger `eval(\Psy\sh());`

## Lancer les tests

Pour lancer les tests vous pouvez utiliser le binaire disponible dans `vendor/bin/phpunit` en précisant le chemin vers le dossier de test.

```sh
./vendor/bin/phpunit tests
```

Ici l'intégralité de nos fichiers de tests présents dans le dossier `tests` seront exécutés.
