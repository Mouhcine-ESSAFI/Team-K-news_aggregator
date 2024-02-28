# Agrégateur d'Actualités

Bienvenue dans l'Agrégateur d'Actualités, une plateforme puissante développée avec Laravel et PostgreSQL pour offrir une expérience d'actualités personnalisée.

---

## Table des Matières

1. [Architecture](#architecture)
2. [Fonctionnalités](#fonctionnalités)
3. [Installation](#installation)

---

## 1. Architecture <a name="architecture"></a>

L'Agrégateur d'Actualités est construit sur l'architecture moderne de Laravel, avec PostgreSQL comme système de gestion de base de données. Voici une vue d'ensemble de l'architecture :

- **Base de Données :** PostgreSQL est utilisé pour stocker les données, assurant la fiabilité et la performance.
- **Environnement de Développement :** Laravel Sail est employé pour fournir un environnement de développement local basé sur Docker, facilitant le déploiement.

---

## 2. Fonctionnalités <a name="fonctionnalités"></a>

### 2.1 Sources
- Ajout de source flux RSS ou Atom pour diversifier les informations.

### 2.2 Catégories
- Classification des actualités par catégories pour faciliter la navigation.

### 2.3 Actualités Tendances
- Mise en évidence des actualités populaires ou tendances pour une expérience dynamique.

### 2.4 Préférences Utilisateur
- Personnalisation des préférences pour recevoir des actualités spécifiques.

### 2.5 Favoris
- Ajout d'actualités aux favoris pour un accès rapide aux contenus préférés.

### 2.6 Commentaires
- Possibilité de commenter sous chaque actualité pour favoriser l'interaction.

---

## 3. Installation <a name="installation"></a>

### 3.1 Prérequis

Assurez-vous d'avoir les éléments suivants installés avant de commencer :
- [Docker](https://www.docker.com/)
- [Composer](https://getcomposer.org/)

### 3.2 Instructions

1. Clonez ce dépôt :
    ```bash
    git clone https://github.com/votre-utilisateur/agregateur-actualites.git
    ```

2. Accédez au répertoire du projet :
    ```bash
    cd agregateur-actualites
    ```

3. Installez les dépendances avec Composer :
    ```bash
    composer install
    ```

4. Copiez le fichier d'environnement et configurez les variables :
    ```bash
    cp .env.example .env
    ```

5. Générez la clé d'application Laravel :
    ```bash
    php artisan key:generate
    ```

6. Exécutez les migrations et les seeders :
    ```bash
    php artisan migrate --seed
    ```

7. Lancez l'application avec Laravel Sail :
    ```bash
    ./vendor/bin/sail up
    ```

L'application sera disponible à l'adresse http://localhost.

---

N'hésitez pas à contribuer et à améliorer cette plateforme d'agrégation d'actualités. Merci de faire partie de ce projet passionnant! 📰✨
