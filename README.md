# rnday-besancon.fr

Site web pour la promotion de l'événement organisé par les CMI informatique de Besançon en 2020

## Organisation
- Le contenu du site se trouve dans `docs/`.
- Les **fichiers html à modifier** se trouvent dans `files_to_modify/`.
- Les images sont dans `/docs/images`.

## Dépendances
[Mustache pour générer le site web](https://mustache.github.io/)

## Générer le site
- Les informations communes (balises meta, crédits etc...) se trouvent dans `common.json`
- Les autres pages (sous format `.mustache`) sont à remplir manuellement.
- On peut rajouter dans les fichiers `.mustache` des appels à des variables stockées dans `common.json` avec la syntaxe `{{{object.dans.json}}}`.
- Pour générer toutes les pages dans `docs/`, lancer le `makefile` depuis la racine.
