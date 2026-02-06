# Hotel Reservation – Lumina Hotel

## Présentation du projet

**hotel-reservation** est un projet de développement web visant à créer le site officiel d’un hôtel fictif nommé **Lumina Hotel**.  
Le projet a pour objectif de proposer une plateforme moderne et professionnelle permettant la présentation de l’hôtel ainsi que la gestion des réservations en ligne.

Il s’inscrit dans un cadre collaboratif et pédagogique, avec pour ambition de permettre aux membres du groupe de développer leurs compétences techniques, de travailler en équipe et de produire un rendu conforme aux standards professionnels actuels, notamment dans le contexte de l’ère de l’intelligence artificielle.

---

## Objectifs du projet

- Concevoir un site web hôtelier au rendu professionnel
- Mettre en place un système de réservation en ligne
- Appliquer de bonnes pratiques de développement web
- Permettre aux membres du groupe de :
  - apprendre
  - pratiquer
  - s’améliorer continuellement en programmation
- Utiliser des technologies modernes et largement utilisées dans l’industrie

---

## Fonctionnalités prévues

### Côté utilisateur
- Consultation des informations de l’hôtel
- Présentation des chambres et des services
- Simulation et réservation de chambres
- Création et gestion d’un compte client

### Côté administration
- Gestion des chambres
- Gestion des réservations
- Gestion des utilisateurs
- Tableau de bord administratif

---

## Stack technique

### Backend
- Python
- Django
- Django REST Framework

### Frontend
- JavaScript
- React.js

### Base de données
- SQLite (développement)
- PostgreSQL (production)

### Outils
- Git et GitHub
- Virtualenv (environnement Python)
- npm (gestion des dépendances frontend)

---

## Architecture du projet

Le projet adopte une architecture moderne basée sur la séparation des responsabilités :

- Backend : API REST développée avec Django et Django REST Framework
- Frontend : application React consommant l’API
- Communication via requêtes HTTP au format JSON

Cette architecture permet une bonne maintenabilité, une évolutivité du projet et un travail collaboratif efficace.

---

## Prérequis

Avant de lancer le projet, assurez-vous d’avoir installé :

- Python 3.x
- Node.js et npm
- Git
- PostgreSQL (pour la production)

---

## Installation et configuration

### 1. Cloner le dépôt

```bash
https://github.com/jijidiya/hotel-reservation.git
cd hotel-reservation
---

## Structure du projet

La structure du projet est organisée de manière à séparer clairement le backend et le frontend.

```text
hotel-reservation/
│
├── backend/                # Backend Django (API REST)
│   ├── manage.py
│   ├── requirements.txt
│   ├── config/             # Configuration principale du projet Django
│   └── apps/               # Applications métiers (utilisateurs, réservations, chambres, etc.)
│
├── frontend/               # Frontend React
│   ├── package.json
│   ├── src/
│   │   ├── components/     # Composants React
│   │   ├── pages/          # Pages principales
│   │   ├── services/       # Appels API
│   │   └── App.js
│   └── public/
│
├── README.md
└── .gitignore
## Configuration des variables d’environnement

Certaines informations sensibles doivent être stockées dans des variables d’environnement afin d’assurer la sécurité et la portabilité du projet.

### Backend (Django)

Créer un fichier `.env` dans le dossier `backend` et y définir les variables suivantes :

```env
DEBUG=True
SECRET_KEY=your-secret-key
DATABASE_NAME=hotel_db
DATABASE_USER=postgres
DATABASE_PASSWORD=password
DATABASE_HOST=localhost
DATABASE_PORT=5432
---
## Accès à l’administration

Django fournit une interface d’administration intégrée permettant de gérer les données du système.

Après avoir lancé le serveur backend, l’interface d’administration est accessible à l’adresse suivante : http://127.0.0.1:8000/admin

Pour créer un compte administrateur :

```bash
python manage.py createsuperuser
---
## Utilisation de l’API

Le backend expose une API REST permettant au frontend de communiquer avec le serveur.

- Format des échanges : JSON
- Méthodes HTTP utilisées : GET, POST, PUT, DELETE
- Authentification et autorisations gérées côté backend

Le frontend React consomme ces endpoints via des requêtes HTTP.

---

## Bonnes pratiques recommandées

- Utiliser une branche Git distincte pour chaque fonctionnalité
- Rédiger des messages de commit clairs et explicites
- Tester les fonctionnalités avant leur intégration
- Respecter la séparation entre la logique backend et l’interface frontend
- Maintenir une structure de code claire et lisible

---

## Contribution

Les contributions au projet se font via GitHub selon le processus suivant :

1. Forker le dépôt
2. Créer une branche dédiée à la fonctionnalité ou à la correction
3. Effectuer les modifications
4. Soumettre une pull request pour revue

Toute contribution doit respecter l’architecture et les conventions définies dans le projet.

---

## État d’avancement

Le projet est actuellement en phase de démarrage.

- Mise en place progressive de la structure
- Développement des fonctionnalités prévu par étapes
- Évolutions continues selon les objectifs du groupe

---

## Perspectives d’évolution

- Intégration d’un système de paiement en ligne
- Envoi de notifications par email
- Tableau de bord administrateur avancé
- Amélioration de la sécurité
- Optimisation des performances et de l’expérience utilisateur

---

## Licence

Projet à usage académique et pédagogique.  
Libre d’utilisation à des fins d’apprentissage et de formation.



