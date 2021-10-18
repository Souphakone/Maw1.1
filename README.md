# Projet

MAW 1.1
---
# Installation de Docker

Télécharger [docker](https://www.docker.com/products/docker-desktop)

Si vous avez l'un de ces messages d'erreurs:

![Error virtualization](https://codimd.s3.shivering-isles.com/demo/uploads/upload_aeb77fecef2c80457a36403d782264b5.PNG)

Il vous faudra activer la virtualisation dans le bios.

![Error WSL2](https://codimd.s3.shivering-isles.com/demo/uploads/upload_07183481328e34a359c6417acb7e800e.PNG)

Suivez [cette marche à suivre](https://docs.microsoft.com/fr-fr/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package)

---
## Configuration de Docker

Dans votre projet créer un fichier docker-composer.yml avec les images souhaité.

Utilisé la commande `docker-compose build` pour créer l'image.

Puis pour lancer utilisé la commande `docker-compose start` et `docker-compose stop` pour tout arrêter.

La commande `docker compose up`, permet de créer/recréer puis de lancer les images.

Une fois que les images sont créées et démarréer pour récupérer l'adresse ip de l'image mysql utilisé la commande suivante : `λ docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' NomDeLImage`
