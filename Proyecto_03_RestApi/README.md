# Consumo de API Web con The Dog API

## Descripción

Este proyecto consiste en una aplicación web desarrollada en PHP que consume información desde una API externa denominada The Dog API. El objetivo principal es aprender a realizar solicitudes HTTP utilizando cURL, procesar respuestas en formato JSON y mostrar información dinámica obtenida desde servicios web externos. La aplicación permite consultar una lista de razas de perros y visualizar imágenes de una raza específica mediante el uso de una API Key para autenticación.

## Funcionalidades

La aplicación incorpora las siguientes funcionalidades:

* Conexión a The Dog API mediante una API Key.
* Obtención de la lista completa de razas de perros disponibles.
* Procesamiento de datos JSON recibidos desde la API.
* Visualización de información de las razas obtenidas.
* Consulta de imágenes asociadas a una raza específica.
* Presentación dinámica de imágenes en el navegador web.

En el ejemplo desarrollado se selecciona la raza Husky para mostrar varias imágenes obtenidas directamente desde la API.

## Tecnologías utilizadas

Para el desarrollo de la práctica se utilizaron las siguientes herramientas y tecnologías:

* PHP como lenguaje de programación.
* cURL para realizar solicitudes HTTP.
* JSON para el intercambio de información.
* HTML para mostrar los resultados.
* The Dog API como fuente de datos.
* XAMPP como entorno de desarrollo local.
* Apache como servidor web.

Estas herramientas permitieron establecer comunicación entre la aplicación y el servicio web externo.

## Implementación de la API

La aplicación utiliza una API Key obtenida mediante el registro en The Dog API. Esta clave se envía en cada solicitud HTTP utilizando el encabezado x-api-key para autenticar el acceso al servicio.

La primera consulta se realiza al endpoint:

https://api.thedogapi.com/v1/breeds

El cual devuelve la lista completa de razas registradas en la plataforma.

Posteriormente se realiza una segunda consulta al endpoint:

https://api.thedogapi.com/v1/images/search

Utilizando el identificador de una raza específica para recuperar imágenes relacionadas con dicha raza.

## Estructura del proyecto

El proyecto está conformado por dos archivos principales:

proyecto/

api1.php

api2.php

### api1.php

Contiene el código encargado de conectarse a The Dog API y obtener la lista completa de razas de perros.

### api2.php

Incluye funciones para recuperar la lista de razas y obtener imágenes de una raza específica utilizando su identificador dentro de la API.

## Funcionamiento del sistema

Al ejecutar el archivo api1.php se realiza una solicitud HTTP utilizando cURL para obtener la información de las razas disponibles. La respuesta recibida en formato JSON es convertida a un arreglo de PHP mediante json_decode() y posteriormente mostrada en pantalla.

Al ejecutar api2.php se obtiene nuevamente la lista de razas y se realiza una segunda consulta para recuperar imágenes de la raza Husky. Las imágenes obtenidas son mostradas dinámicamente dentro de la página web mediante etiquetas HTML img.

## Seguridad implementada

La autenticación con el servicio web se realiza mediante una API Key proporcionada por The Dog API. Esta clave permite validar las solicitudes realizadas desde la aplicación.

Además, se implementa validación básica de errores utilizando curl_error() para detectar posibles fallos durante la comunicación con la API y evitar que el sistema procese respuestas inválidas.

## Ejecución del proyecto

Para ejecutar la aplicación se deben seguir los siguientes pasos:

1. Instalar XAMPP.
2. Habilitar la extensión cURL dentro del archivo php.ini.
3. Iniciar el servicio Apache.
4. Colocar los archivos api1.php y api2.php dentro de la carpeta htdocs.
5. Obtener una API Key desde The Dog API.
6. Configurar la clave dentro del código PHP.
7. Acceder desde el navegador a:

http://localhost/api1.php

o

http://localhost/api2.php

para visualizar los resultados.

## Resultados obtenidos

Como resultado de la práctica se logró establecer comunicación con un servicio web externo mediante PHP y cURL. La aplicación fue capaz de obtener información de cientos de razas de perros y recuperar imágenes asociadas a una raza específica utilizando solicitudes HTTP autenticadas.

La práctica permitió comprender el funcionamiento de las APIs REST, el uso de claves de autenticación, el procesamiento de datos JSON y la integración de servicios externos dentro de aplicaciones web desarrolladas con PHP.
Trabajo realizado por la alumna Claudia Monserrat Ramírez Díaz para la materia de Desarrollo de Aplicaciones Web del Instituto Tecnológico Superior de Lerdo.
