# TP7 - CRUD
## Centre de Formation - Gestion des Étudiants, Formations et Modules

*Réalisé par : Marwa Houffane*

*Filière : LST DWFS et DevOps - Groupe : 2*



## 1. Présentation du Projet

Ce projet est une application web complète de gestion d'un centre de formation.
Elle a été réalisée dans le cadre du TP7 pour appliquer le concept du CRUD en PHP avec une base de données MySQL.

L'application permet de gérer 3 entités principales :
1. Les Étudiants
2. Les Formations
3. Les Modules


## 2. Objectif du TP

- Comprendre la connexion PHP avec MySQL
- Savoir créer, afficher, modifier et supprimer des données
- Organiser un projet en dossiers et fichiers séparés
- Créer une interface simple, claire et facile à utiliser
- Utiliser les formulaires HTML et les requêtes SQL


## 3. Technologies Utilisées

PHP : Langage principal, logique et traitement des données 
MySQL : Base de données pour stocker les informations 
phpMyAdmin : Gestion visuelle de la base de données 
HTML : Structure des pages 
CSS : Design et mise en page, fichier style.css 
XAMPP : Serveur local Apache + MySQL 

## 4. Structure du Projet 

### index.php - Page d'accueil
- Affiche 3 cartes : Formations, Étudiants, Modules
- Permet de naviguer vers chaque partie de l'app

### style.css - Design
- Donne les couleurs, boutons et tableaux
- Rend les pages belles et lisibles

### database/connexion.php - Connexion
- Se connecte à MySQL avec localhost / root
- Utilisé par tous les autres fichiers

### database/db.php - Configuration
- Contient les paramètres de la base de données
- Évite de répéter le code de connexion

### etudiants/index.php - Liste Étudiants
- Affiche tous les étudiants en tableau
- Exemple : Houffane, houffanem12@gmail.com

### etudiants/create.php - Ajouter Étudiant
- Formulaire Nom + Email
- Enregistre avec INSERT INTO etudiants

### etudiants/edit.php - Modifier Étudiant
- Récupère l'étudiant par son ID
- Modifie avec UPDATE etudiants

### etudiants/delete.php - Supprimer Étudiant
- Récupère l'ID à supprimer
- Supprime avec DELETE FROM etudiants

### formations/index.php - Liste Formations
- Affiche toutes les formations en tableau
- Exemple : Dev Digital, 2 ans

### formations/create.php - Ajouter Formation
- Formulaire Nom + Durée
- Enregistre avec INSERT INTO formations

### formations/edit.php - Modifier Formation
- Récupère la formation par son ID
- Modifie avec UPDATE formations

### formations/delete.php - Supprimer Formation
- Récupère l'ID à supprimer
- Supprime avec DELETE FROM formations

### modules/index.php - Liste Modules
- Affiche tous les modules en tableau
- Exemple : PHP, Formation 1

### modules/create.php - Ajouter Module
- Formulaire Nom Module + Formation
- Enregistre avec INSERT INTO modules

### modules/edit.php - Modifier Module
- Récupère le module par son ID
- Modifie avec UPDATE modules

### modules/delete.php - Supprimer Module
- Récupère l'ID à supprimer
- Supprime avec DELETE FROM modules


## 5. Base de Données

### Table `etudiants`
- id : Clé primaire, auto-incrément
- nom : Nom de l'étudiant
- email : Email de l'étudiant

### Table `formations`
- id : Clé primaire
- nom : Nom de la formation, exemple Dev Digital
- duree : Durée, exemple 2 ans

### Table `modules`
- id : Clé primaire
- nom_module : Nom du module, exemple PHP
- formation_id : Clé étrangère liée à la table formations



## 6. Comment Fonctionne l'Application ?

1. L'utilisateur ouvre `http://localhost/TP7_CRUD`
2. Il choisit : Formations, Étudiants ou Modules
3. Il clique sur `+ Ajouter` pour ajouter un nouvel élément
4. Il remplit le formulaire et valide
5. Le fichier `create.php` envoie les données à MySQL
6. L'utilisateur est redirigé vers `index.php` de la liste
7. Il peut cliquer sur `Edit` pour modifier
8. Il peut cliquer sur `Supp` pour supprimer
9. Chaque action met à jour la base de données en temps réel


## 7. Installation et Lancement

1. Installer XAMPP
2. Copier le dossier `TP7_CRUD` dans `C:/xampp/htdocs/`
3. Démarrer Apache et MySQL dans XAMPP
4. Ouvrir phpMyAdmin : `http://localhost/phpmyadmin`
5. Créer la base de données et les 3 tables
6. Ouvrir l'application : `http://localhost/TP7_CRUD`


## 8. Captures d'Écran de l'Application

### 8.1 Page d'Accueil
Page principale avec 3 cartes : Formations, Étudiants, Modules.
<img width="927" height="441" alt="image" src="https://github.com/user-attachments/assets/336d9553-888d-479c-938d-b88cc2d7990b" />


### 8.2 Liste des Formations
On voit la formation Dev Digital avec une durée de 2 ans, et le bouton + Ajouter Formation.
<img width="859" height="293" alt="image" src="https://github.com/user-attachments/assets/34ac1892-d79e-46ba-af81-20d9a0060ea9" />


### 8.3 Liste des Étudiants
On voit l'étudiant Houffane, avec son email, et le bouton + Ajouter Etudiant.
<img width="815" height="286" alt="image" src="https://github.com/user-attachments/assets/7c20065d-a09c-4f0d-943b-9de39f6f5d18" />


### 8.4 Liste des Modules
On voit le module PHP lié à la formation 1, et le bouton + Ajouter Module.
<img width="802" height="293" alt="image" src="https://github.com/user-attachments/assets/c42cb3a2-6c97-4fb7-86e0-d8fe9598120e" />


### 8.5 Preuve d'Ajout

Pour prouver que l'ajout fonctionne réellement, nous avons testé l'ajout d'une nouvelle formation.Nous avons cliqué sur le bouton Ajouter une formation. Le formulaire d'ajout s'affiche vide, avec les champs Nom, Durée et Description à remplir.Nous avons rempli le formulaire avec les informations suivantes : 
Nom : houffan
Durée : 1 ans 
Description : Formation devstack

<img width="222" height="237" alt="image" src="https://github.com/user-attachments/assets/f32213ba-82a8-4c66-9bfe-a33751b253c8" />


Pour confirmer définitivement que l'ajout est bien enregistré, nous avons vérifié directement dans la base de données via phpMyAdmin.
<img width="562" height="306" alt="image" src="https://github.com/user-attachments/assets/c969c5e7-b305-49b8-aa33-a6e736265935" />



### 8.6 Preuve de Modification

Pour prouver que la modification fonctionne réellement, nous avons testé la modification d'une formation existante.
Nous avons cliqué sur le bouton *Modifier* de la formation `houffane`. Le formulaire de modification s'affiche avec les anciennes données déjà remplies automatiquement, ce qui prouve que la récupération des données avec `SELECT` fonctionne correctement.

<img width="237" height="237" alt="image" src="https://github.com/user-attachments/assets/f60c9fe5-3f91-4324-bf2e-adc308d94db4" />


Pour confirmer définitivement que la modification est bien enregistrée, nous avons vérifié directement dans la base de données via phpMyAdmin.

<img width="648" height="343" alt="image" src="https://github.com/user-attachments/assets/bc681e4c-0ec9-45a2-98d7-82a958a62954" />




### 8.7 Preuve de Suppression

Pour prouver que la suppression fonctionne réellement, nous avons testé la suppression d'une formation existante.Nous avons affiché la liste des formations. Nous avons repéré la ligne houffan Modifié - 2 ans - Formation devstack et nous avons cliqué sur le bouton Supprimer qui se trouve à côté.


<img width="810" height="259" alt="image" src="https://github.com/user-attachments/assets/005c31ca-278f-4606-9445-b24c5f58f8b7" />


Nous avons testé la suppression de la formation houffan.
Après avoir cliqué sur Supprimer, la formation houffan n'apparaît plus dans la liste. Dans phpMyAdmin, la ligne houffan n'existe plus, il ne reste que les formations marwa. Cela prouve que la requête DELETE FROM formations WHERE id_formation = ? a fonctionné.


<img width="568" height="331" alt="image" src="https://github.com/user-attachments/assets/6bf77d57-0aac-48ed-aae4-2b04905617d5" />


## 9. Conclusion

Ce TP7 m'a permis de :
- Maîtriser le CRUD complet en PHP
- Comprendre la relation entre PHP et MySQL
- Savoir organiser un projet professionnel en dossiers
- Créer une application fonctionnelle
- Apprendre à documenter mon travail avec un README sur GitHub

**Lien GitHub :** https://github.com/mhouffane9328-web/TP7_CRUD

