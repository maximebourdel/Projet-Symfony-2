Projet personnel Maxime Bourdel
========================

----------------------------------

Ceci n' est pour l'instant qu'un test dont le but principal est d'améliorer mon CV et pouvoir y ajouter cette compétence :

``Maitrîse de Symfony 2.0``

----------------------------------

Si vous avez des idées pour une idée future de mon site, n'hésitez pas à me contacter à l'adresse suivante : <bourdel.maxime.pro@gmail.com>


### Technologies utilisés

  * PHP/HTML

  * [Symfony][1]

  * [Composer][2]

  * [Twig][3]
 
### Pour me conseiller

Il vous est possible de récupérer mon travail et de l'éxécuter depuis chez vous.

Pour cela il vous est nécessaire d'avoir GIT.

vous n'avez plus qu'à cloner mon repositoty via la commande :

``https://github.com/maximebourdel/Projet-Symfony-2.git`` 



### Installer Composer

``$ curl -sS https://getcomposer.org/installer | php``

``$ sudo mv composer.phar /usr/local/bin/composer``

Si vous n'avez pas CURL :

``$ sudo apt-get install curl libcurl3 libcurl3-dev php5-curl``

``$ sudo /etc/init.d/apache2 restart``



### Installer les vendors

Allez dans la racine du dossier téléchargé

``$ php composer.phar install``

 puis :
 
``$ php composer.phar update``

Vous aurez ensuite téléchargé le dossier vendor


N'oubliez pas de faire 

`` $ sudo chmod -R 777 dossier_telecharge``

Sinon symfony n'aura aucun droit sur les dossiers (cache, vendor...)





### Mise en place de la BDD
``$ php app/console doctrine:database:create``
appelez la "symfony"

### Mise en place des tables la BDD
``$ php app/console doctrine:schema:update --force``


PS : N'OUBLIEZ PAS DE MODIFIER LES INFORMATIONS CONCERNANT LA BASE DONNÉE. DANS LE DOSSIER:

``app/config/parameters.yml ``


Enjoy ;)

[1]:  http://http://symfony.com/
[2]:  http://getcomposer.org/
[3]:  http://twig.sensiolabs.org/documentation
