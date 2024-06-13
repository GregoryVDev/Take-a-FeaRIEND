# Utilisation de l'image de base PHP Apache
FROM php:apache

# Copie des fichiers de l'application dans le conteneur
COPY . /var/www/html

# Activer le module rewrite Apache
RUN a2enmod rewrite

# Copie du fichier .htaccess dans le répertoire /var/www/html
COPY .htaccess /var/www/html/.htaccess

# Installation de dépendances supplémentaires si nécessaire
# ...

# Exposition du port d'Apache
EXPOSE 80

# Commande par défaut pour lancer Apache au démarrage du conteneur
CMD ["apache2-foreground"]
