Wheeliz
=======

A Symfony project created on July 25, 2017, 1:31 pm.

Ce projet était un test de yield managment lors de l'entretien d'embauche au sein de la société wheeliz.
Ce test a été fait sous symfony 3 en php7

Le projet en lui même:
Pour ce test technique, je vais vous demander d'écrire un petit algorithme de yield management.
Si vous ne savez pas ce que c'est : https://fr.wikipedia.org/wiki/Yield_management

Alors vous allez devoir écrire une page avec un formulaire contenant ces input:
- taille du parc de voiture à proximité
- nombre voitures déjà réservée
- date debut
- date de fin

Lorsqu'on valide ce formulaire, cette page devra afficher le prix calculé

Le prix de base est de 70€

1) si le ratio nombre de voiture déjà réservée / taille du parc est compris entre:
0 et 10% : +0%
10 et 20% : +1%
20 et 30% : +2 %
.... 
90 et 100% : +9%

2) Si les dates demandées sont à cheval (au moins un jour) sur une période de vacances scolaires Française (zone A, B ou C de vacance au choix) (disont les vacances 2017)
on rajoute 10%

BONUS 1 : Ces périodes de vacances seront stockées en base de données (et non dans un tableau PHP)

BONUS 2 : On peut définir pour chaque période un type : (vacances, jour férié, week end, période creuse) , et pour chacun des types on associe un pourcentage qui peut être positif ou négatif.

Par exemple si je fais une location en vacances scolaire avec un ratio de parc déjà réservé de 25%, j'appliquerai la formule suivante pour le calcul du prix:
70 * (1+10% + 2%) = 70 * 1,12 = 78,4 €

Ce test sera fait en PHP avec le framework Symfony.


