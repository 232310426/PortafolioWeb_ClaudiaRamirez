Tomando como base tu práctica sobre **The Dog API**, aquí tienes una redacción con el mismo estilo que el ejemplo que compartiste:

# Consumo de API Web (Práctica Integradora U4)

## Descripción

Este proyecto consiste en una práctica de desarrollo web utilizando PHP y una API externa llamada The Dog API. El objetivo principal fue aprender a consumir servicios web mediante solicitudes HTTP y procesar la información recibida en formato JSON. A través de esta práctica se obtuvo una lista de razas de perros y posteriormente se mostraron imágenes de una raza específica. El proyecto permitió aplicar conceptos relacionados con APIs REST, manejo de datos externos y programación web con PHP. 

## Funcionalidades

La aplicación permite conectarse a The Dog API utilizando una clave de acceso proporcionada por el servicio. Mediante una solicitud HTTP se obtiene una lista completa de razas de perros disponibles en la plataforma. Posteriormente se realiza una segunda solicitud para obtener imágenes de una raza específica, en este caso la raza Husky. Finalmente, la información obtenida se muestra dinámicamente dentro de una página web desarrollada en PHP. 

## Tecnologías utilizadas

Para el desarrollo de la práctica se utilizó PHP como lenguaje de programación principal. Se empleó la extensión cURL para realizar las solicitudes HTTP hacia la API externa. La información recibida se procesó en formato JSON utilizando las funciones integradas de PHP. También se utilizó HTML para mostrar los resultados en el navegador y XAMPP como entorno de desarrollo local, ejecutando Apache como servidor web. 

## Implementación de la API

La aplicación utiliza The Dog API como fuente de información. Para acceder a los recursos fue necesario registrarse y obtener una API Key. Dicha clave se envía dentro de las cabeceras HTTP de cada solicitud utilizando el parámetro x-api-key. La primera consulta obtiene la lista de razas disponibles mediante el endpoint correspondiente de la API. La segunda consulta obtiene imágenes filtradas por el identificador de una raza específica. Los datos recibidos son decodificados desde formato JSON para ser utilizados dentro del sistema.  

## Estructura del proyecto

El proyecto se organiza en dos archivos principales desarrollados en PHP. El primer archivo contiene el código encargado de conectarse a la API y mostrar la lista completa de razas de perros. El segundo archivo incorpora funciones para obtener tanto la lista de razas como las imágenes de una raza específica. La estructura básica del proyecto es la siguiente:

practica4.3/

api1.php

api2.php

## Funcionamiento del sistema

Al ejecutar el archivo api1.php se realiza una consulta a The Dog API para obtener todas las razas registradas. La respuesta es procesada y mostrada en pantalla para verificar que la conexión con la API funciona correctamente. Posteriormente, al ejecutar api2.php, el sistema obtiene nuevamente la lista de razas y además recupera varias imágenes de la raza Husky utilizando su identificador dentro de la API. Los resultados se muestran directamente en el navegador mediante elementos HTML. 

## Ejecución del proyecto

Para ejecutar la práctica es necesario instalar XAMPP y habilitar la extensión cURL dentro del archivo php.ini. Después se deben iniciar los servicios de Apache. Los archivos api1.php y api2.php deben colocarse dentro de la carpeta htdocs de XAMPP. Finalmente, desde el navegador se accede a la dirección correspondiente del servidor local para visualizar la lista de razas y las imágenes obtenidas desde la API. 

## Resultados obtenidos

Como resultado de la práctica se logró establecer comunicación exitosa con un servicio web externo mediante PHP. Se obtuvo la lista completa de razas de perros proporcionada por The Dog API y se visualizaron imágenes correspondientes a la raza Husky. Esto permitió comprender el funcionamiento de las APIs REST, el uso de claves de autenticación y el procesamiento de datos JSON dentro de aplicaciones web. 

Trabajo hecho por la Alumna Claudia Monserrat Ramírez Díaz de Ingeniería en Informática.
