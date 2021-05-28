# mordheim-symfony

Esto es un proyecto hecho en Symfony para la gestión de bandas.

## Requisitos

De momento las únicos requerimientos son [Docker](https://docs.docker.com/get-docker/)


## Instalación

Una vez se tenga docker instalado, solo necesitaremos copiar el archivo "docker-compose.yml.dist" a "docker-compose.yml".

Dependiendo del OS cambia lo que es la consola, pero básicamente es usar la consola (power shell para windows) y desde la ubicación de la carpeta ejecutamos la estructura.

```bash
docker-compose up --build
```

Una vez tengamos arrancado nuestros contenedores entraremos en el contenedor de php

```bash
docker exec -it mordheim-php bash
```

Y ejecutaremos lo que sería composer y yarn

```bash
composer install
yarn install
```