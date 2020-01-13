Batter Transbank Certificates
=============================

Listado de cerfificados públicos y llaves privadas de servicios de staging de Transbank.

## Instalación

```bash
composer require better-transbank/certificates
```

## Introducción

Transbank utiliza combinaciones de llaves públicas/privadas generados por ellos mismos para sus ambientes de prueba.
Estos certificados son además publicados en un repositorio oficial.

Lo que hace esta simple librería es implementar una api constante sobre la ubicación de los
certificados en el sistema de archivos, para accederlos mas fácilmente.

Además, implementa otra serie de medidas de seguridad que el repositorio de certificados oficial
de transbank no posee:

- Testea que los certificados y llaves existan y puedan leerse
- Testea que los certificados y llaves no puedan modificarse
- Testea que los certificados no estén expirados
- Testea que el CN de los certificados corresponda al código de comercio de la constante

## Uso

El SDK de Better Transbank hace uso de esta librería internamente. En realidad, no deberías
usar esta librería por si sola.