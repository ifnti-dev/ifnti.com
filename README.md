# Site IFNTI 
## Prerequis 

>les directives suivantes vous permettes d'avoir toutes les dépendences essentiels, en cas d'erreurlié à une autre dépendence, veuillez la corriger et l'intégrer pour les autres utilisateurs.
- Vous devez avoir laravel/ui installé sur votre machine, sinon lancer la commande suivantes:
```
composer require laravel/ui
```
-Rassurez vous d'avoir nodejs et npm installer sinon installer **nodejs** en cliquant sur le lien suivat: [installer nodejs](https://github.com/nodejs/help/wiki/Installation) ensuite **npm** avec la commande suivante:
```
sudo apt update
sudo apt install npm
```
## execution du programme 
lancer la commande suivante pour installer les migration
```
php artisan migrate:fresh
```
La commande suivante peut être ignorée:
```
php artisan migrate:fresh --seed
```
En fin lancer les deux commandes suivantes dans deux terminales différents
```
npm run dev
```


```
php artisan serve
```
Connecter vous à l'application et bon travail
