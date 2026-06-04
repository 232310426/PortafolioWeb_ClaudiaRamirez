# Sistema Web de Gestión de Citas (Proyecto de Evaluación)

## Descripción

Este proyecto consiste en el desarrollo de una aplicación web para la gestión de citas, creada utilizando PHP y MySQL. El sistema tiene como finalidad permitir a los usuarios registrarse, iniciar sesión y administrar sus citas de manera sencilla mediante una interfaz amigable. Durante el desarrollo se aplicaron conceptos de programación web, bases de datos, seguridad informática y organización del código utilizando el patrón MVC. El proyecto fue realizado como actividad integradora para poner en práctica los conocimientos adquiridos en la materia de Desarrollo Web.

## Funcionalidades

La aplicación permite registrar nuevos usuarios mediante un formulario donde se capturan datos personales básicos. Posteriormente los usuarios pueden iniciar sesión utilizando sus credenciales registradas. Una vez autenticados, tienen acceso a un panel principal donde pueden gestionar sus citas. El sistema permite crear nuevas citas, visualizar las citas registradas, editar citas existentes, actualizar información del usuario y eliminar citas cuando sea necesario. Además, incluye una opción para cerrar sesión de manera segura.

## Tecnologías utilizadas

Para el desarrollo del sistema se utilizó PHP como lenguaje principal del lado del servidor. La base de datos fue implementada en MySQL y administrada mediante phpMyAdmin. Se empleó HTML para la estructura de las páginas web y CSS para el diseño visual de la interfaz. Asimismo, se utilizó XAMPP como entorno de desarrollo local, integrando los servicios de Apache y MySQL para la ejecución del proyecto.

## Seguridad implementada

El sistema incorpora diversas medidas de seguridad básicas para proteger la información de los usuarios. Las contraseñas se almacenan utilizando la función password_hash(), permitiendo guardar los datos cifrados en la base de datos. Durante el inicio de sesión se utiliza password_verify() para validar las credenciales ingresadas. También se implementa el manejo de sesiones mediante $_SESSION para controlar el acceso a las páginas protegidas. Adicionalmente, se emplean consultas preparadas mediante PDO para prevenir ataques de inyección SQL y mejorar la seguridad de las operaciones realizadas sobre la base de datos.

## Estructura del proyecto

El sistema se desarrolló siguiendo el patrón de arquitectura MVC (Modelo-Vista-Controlador), permitiendo una mejor organización y mantenimiento del código. La estructura general del proyecto está dividida de la siguiente manera:

config/ → conexión a la base de datos

models/ → acceso y manipulación de datos

controllers/ → lógica de negocio del sistema

views/ → interfaces y páginas visibles para el usuario

styles/ → archivos de diseño CSS

index.php → página principal del sistema

Esta estructura facilita la separación de responsabilidades y mejora la escalabilidad de la aplicación.

## Base de datos

El sistema utiliza una base de datos denominada sistema_citas. Dentro de ella se encuentran dos tablas principales: usuarios y citas. La tabla de usuarios almacena la información de las personas registradas en el sistema, mientras que la tabla de citas guarda la fecha y hora de cada cita asociada a un usuario. Ambas tablas se relacionan mediante una clave foránea que permite mantener la integridad de los datos.

## Funcionamiento del sistema

Al ingresar al sistema, el usuario puede registrarse o iniciar sesión desde la página principal. Después de autenticarse correctamente, accede al dashboard donde puede administrar sus citas. Desde este panel puede agregar nuevas citas indicando fecha y hora, visualizar todas las citas registradas, modificar información existente y eliminar registros cuando sea necesario. El sistema también permite actualizar los datos personales del usuario y cerrar sesión al finalizar su uso.

## Ejecución del proyecto

Para ejecutar el sistema es necesario instalar XAMPP y activar los servicios de Apache y MySQL. Posteriormente se debe importar la base de datos desde el archivo correspondiente utilizando phpMyAdmin. Una vez configurado el entorno, la carpeta del proyecto debe colocarse dentro del directorio htdocs de XAMPP. Finalmente, el sistema puede ejecutarse desde el navegador accediendo a la dirección:

http://localhost/sistema_citas/

## Resultados obtenidos

Como resultado se obtuvo una aplicación web completamente funcional que permite registrar usuarios, administrar citas y gestionar información personal de manera segura. El sistema cuenta con una interfaz intuitiva, una estructura organizada mediante MVC y mecanismos básicos de protección de datos. El proyecto cumple con los requerimientos planteados y permitió reforzar conocimientos relacionados con desarrollo web, bases de datos y seguridad informática.
Trabajo realizado por Diana Isabel Contreras Valencia, Alondra Guadalupe Ramírez Ramírez, Adán Ibarra García, Ana María Villegas Valenzuela, Claudia Monserrat Ramírez Díaz y Axell Yael González Cortez para la materia de Desarrollo Web del Instituto Tecnológico Superior de Lerdo.
