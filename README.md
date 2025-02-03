# Formulaire_contact_PHP
Réaliser un formulaire de contact en PHP

Ce projet est un formulaire de contact en PHP qui utilise PHPMailer pour envoyer des emails via Mailtrap. Le projet utilise Composer comme gestionnaire de paquets pour gérer les dépendances.

## Prérequis

- PHP 8.3.14
- Composer

## Installation
1. Créer un repository sur Github
2. Clonez le dépôt :


    git clone https://github.com/votre-utilisateur/Formulaire_contact_PHP.git
    cd Formulaire_contact_PHP

3. Installez les dépendances avec Composer :

    composer install

4. Créez un fichier [.env] à partir du fichier .env.exemple et remplissez-le avec vos informations Mailtrap :

    MAIL_HOST="sandbox.smtp.mailtrap.io"
    MAIL_USERNAME="votre_nom_utilisateur"
    MAIL_PASSWORD="votre_mot_de_passe"
    MAIL_PORT="2525"
    MAIL_ADMIN="admin@example.com"

## Utilisation

1. Lancez un serveur PHP local :

    php -S localhost:8080

2. Ouvrez votre navigateur et accédez à `http://localhost:8080` pour voir le formulaire de contact.

3. Remplissez le formulaire et soumettez-le. Un email sera envoyé à l'adresse configurée dans `MAIL_ADMIN`.

## Structure du Projet

- [index.php] : La page principale contenant le formulaire de contact.
- [traitement.php] : Le script qui traite les données du formulaire et envoie l'email.
- [test.php] : Un script de test pour vérifier l'envoi d'email.
- [style.css]: Le fichier CSS pour le style du formulaire.
- [.vendor] : Le répertoire contenant les dépendances installées par Composer.
- [.gitignore] : en intégrant le fichier [.vendor] et [.env] pour qu'ils n'apparaissent pas dans le code pour raison de confidentialité et de lourdeur sur Github.
- [.env] : Le fichier de configuration des variables d'environnement.
- [composer.json]: Le fichier de configuration de Composer.
- [composer.lock] : Le fichier de verrouillage des dépendances de Composer.

## Dépendances

- [PHPMailer](https://github.com/PHPMailer/PHPMailer) : Une classe PHP complète pour la création et le transfert d'emails.
- [phpdotenv](https://github.com/vlucas/phpdotenv) : Une bibliothèque pour charger les variables d'environnement à partir d'un fichier [.env].

## Auteurs

- Anaïs MULARD

## Licence

Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.