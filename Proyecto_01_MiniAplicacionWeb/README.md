# Mini Aplicación Web (Actividad de Evaluación)

## Descripción

Este proyecto es una aplicación web desarrollada utilizando PHP, HTML, CSS y MySQL con el propósito de implementar un sistema básico de autenticación y gestión de información para usuarios. La aplicación permite registrar nuevos usuarios, iniciar sesión y acceder a un panel principal donde es posible administrar contactos y citas personales. El proyecto fue realizado para aplicar conocimientos relacionados con programación web, manejo de bases de datos, sesiones de usuario y seguridad básica en aplicaciones web.

## Funcionalidades

La aplicación permite a los usuarios registrarse mediante un formulario donde se capturan un nombre de usuario y una contraseña. Una vez registrados, los usuarios pueden iniciar sesión utilizando sus credenciales.

Después de autenticarse correctamente, el usuario accede a un panel principal o dashboard donde puede registrar contactos personales y citas. El sistema almacena la información asociada al usuario que inició sesión, permitiendo una gestión organizada de los datos. Además, existe una opción para cerrar sesión de manera segura y regresar a la pantalla de inicio.

## Tecnologías utilizadas

Para el desarrollo del proyecto se utilizaron las siguientes tecnologías:

* PHP como lenguaje principal del lado del servidor.
* MySQL como sistema gestor de bases de datos.
* HTML para la estructura de las páginas web.
* CSS para el diseño visual de la interfaz.
* XAMPP como entorno de desarrollo local.
* Apache como servidor web.

Estas tecnologías permitieron construir una aplicación funcional con acceso a bases de datos y control de usuarios.

## Seguridad implementada

El sistema incorpora algunas medidas básicas de seguridad para proteger el acceso de los usuarios.

Las contraseñas son almacenadas utilizando la función SHA1 antes de ser guardadas en la base de datos. Durante el proceso de inicio de sesión, la contraseña ingresada se convierte nuevamente a SHA1 para compararla con la almacenada.

También se implementa el uso de sesiones PHP mediante session_start() para controlar el acceso al dashboard. Si un usuario intenta ingresar directamente al panel principal sin haber iniciado sesión, el sistema lo redirecciona automáticamente al formulario de acceso.

Además, se utiliza real_escape_string() para reducir riesgos relacionados con la inserción de caracteres especiales en las consultas SQL.

## Estructura del proyecto

El proyecto se encuentra organizado de la siguiente manera:

proyecto/

backend/

login.php

register.php

logout.php

add_contact.php

add_appointment.php

config/

db.php

frontend/

login.html

register.html

dashboard.php

css/

estilos.css

img/

inicio.jpg

fin.jpg

index.php

README.md

La estructura separa los archivos encargados de la lógica del sistema, la conexión a la base de datos y las interfaces visibles para el usuario.

## Base de datos

La aplicación utiliza una base de datos denominada agenda_web para almacenar la información de usuarios, contactos y citas.

### Tabla de usuarios

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

Esta tabla almacena las credenciales de los usuarios registrados en el sistema.

### Tabla de contactos

```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    user_id INT
);
```

Permite almacenar contactos asociados a cada usuario.

### Tabla de citas

```sql
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    date DATE,
    user_id INT
);
```

Esta tabla guarda las citas registradas por cada usuario.

## Funcionamiento del sistema

Cuando el usuario accede a la aplicación es dirigido al formulario de inicio de sesión. Si aún no posee una cuenta puede registrarse mediante el formulario de registro.

Una vez autenticado, el usuario accede al dashboard donde puede registrar nuevos contactos y nuevas citas. Toda la información queda asociada a su cuenta mediante el identificador de usuario almacenado en la sesión.

El sistema permite agregar información de manera sencilla mediante formularios web y mantener una sesión activa mientras el usuario navega dentro de la aplicación.

## Ejecución del proyecto

Para ejecutar correctamente el proyecto se deben seguir los siguientes pasos:

1. Instalar XAMPP en la computadora.
2. Iniciar los servicios Apache y MySQL.
3. Crear la base de datos agenda_web en phpMyAdmin.
4. Crear las tablas necesarias para usuarios, contactos y citas.
5. Copiar la carpeta del proyecto dentro de htdocs.
6. Configurar los datos de conexión en el archivo db.php.
7. Abrir el navegador y acceder a:

http://localhost/Proyecto1

8. Registrar un usuario e iniciar sesión.

## Resultados obtenidos

Como resultado se obtuvo una aplicación web funcional capaz de gestionar usuarios mediante autenticación básica y almacenamiento de información personal. El proyecto permitió aplicar conceptos de programación web, bases de datos, sesiones y seguridad básica.

Además, se logró implementar una interfaz amigable para la administración de contactos y citas, demostrando el uso práctico de PHP y MySQL en el desarrollo de aplicaciones web dinámicas.

Trabajo realizado por la alumna Claudia Monserrat Ramírez Díaz de Ingeniería en Informática.
