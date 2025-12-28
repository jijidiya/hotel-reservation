# 🏨 Site de Réservation d’Hôte

## 1. Description

Ce projet est un site web de réservation d’hôtels développé en **PHP** avec architecture **MVC** et **API REST**.
Il permet aux utilisateurs de consulter des hôtels, réserver des chambres, et aux administrateurs de gérer les hôtels, les chambres et les réservations.

---

## 2. Fonctionnalités

### Utilisateur

* Créer/Modifier un compte
* Consulter les hôtels et chambres disponibles
* Réserver des chambres
* Consulter l’historique de ses réservations

### Administrateur

* Ajouter/Modifier/Supprimer des chambres
* Gérer les utilisateurs
* Valider et suivre les réservations

---

## 3. Architecture du projet

### 3.1 Structure des dossiers

```
project/
│
├─ config/               
│   └─ database.php      # Configuration de la base de données
│
├─ core/                 
│   ├─ Database.php      # Classe pour connexion à la DB
│   ├─ Router.php        # Classe de routage
│   └─ Controller.php    # Classe parent des controllers
│
├─ controllers/          
│   ├─ HotelController.php
│   ├─ UserController.php
│   └─ ReservationController.php
│
├─ models/               
│   ├─ Hotel.php
│   ├─ User.php
│   └─ Reservation.php
│
├─ views/                
│   ├─ hotels/           # Vues liées aux hôtels
│   ├─ users/            # Vues liées aux utilisateurs
│   └─ reservations/     # Vues liées aux réservations
│
├─ routes/               
│   └─ web.php           # Définition des routes principales
│
├─ middleware/           
│   └─ AuthMiddleware.php # Vérification des accès
│
├─ public/               
│   ├─ index.php         # Point d’entrée du site
│   ├─ css/
│   ├─ js/
│   └─ images/
│
└─ README.md
```

---

### 3.2 Diagramme UML simplifié

```text
[User] ---> [Reservation] <--- [Hotel]
   |                            |
   |                            |
 [UserController]         [HotelController]
       \                     /
        \                   /
         \                 /
          [ReservationController]
```

* **User, Hotel, Reservation** = Modèles
* **Controllers** = gestion de la logique métier
* **Views** = affichage des pages

---

### 3.3 Diagramme Merise (simplifié)

```
Utilisateur (id_user, nom, email, password)
    |
    | 1,N
Reservation (id_reservation, date_debut, date_fin, id_user, id_chambre)
    |
    | 1,1
Chambre (id_chambre, numero, id_hotel, type)
    |
    | N,1
Hotel (id_hotel, nom, adresse, ville)
```

---

## 4. Routes principales

| Méthode | URL           | Controller                  | Description                        |
| ------- | ------------- | --------------------------- | ---------------------------------- |
| GET     | /             | HomeController              | Page d’accueil                     |
| POST    | /reservation  | ReservationController@store | Créer une réservation              |
| GET     | /reservations | ReservationController@index | Liste des réservations utilisateur |
| GET     | /admin/hotels | HotelController@adminIndex  | Gestion hôtels (admin)             |

---

## 5. Installation

1. Cloner le dépôt

```bash
git clone https://github.com/jijidiya/hotel-reservation.git
cd hotel-reservation
```

2. Configurer la base de données

* Créer une base MySQL
* Importer `database.sql`
* Modifier `config/database.php`

3. Lancer le serveur local

```bash
php -S localhost:8000 -t public
```

4. Accéder au site

```
http://localhost:8000
```

---

## 6. Contribuer

1. Forker le projet
2. Créer une branche : `git checkout -b feature/ma-fonctionnalité`
3. Commit vos changements : `git commit -m "Ajout d'une fonctionnalité"`
4. Push vers la branche : `git push origin feature/ma-fonctionnalité`
5. Ouvrir une Pull Request

---

## 7. Technologies

* PHP 8+
* MySQL
* JavaScript (Vanilla)
* HTML5 / CSS3
* Apache / Nginx (ou serveur local)

---

## 8. Auteurs

* jijidiya – Backend
* odel - Backend
* francis - frontend
* Magni – Frontend

---

## 9. Licence

Dima License

---





