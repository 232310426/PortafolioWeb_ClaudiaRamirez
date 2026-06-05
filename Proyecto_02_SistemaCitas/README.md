# Sistema de Gestión de Citas Web

## Descripción

Este proyecto es una aplicación web desarrollada con PHP, HTML, CSS y MySQL que tiene como objetivo permitir la gestión de citas de manera sencilla y segura. El sistema permite que los usuarios se registren, inicien sesión y administren sus propias citas mediante una interfaz amigable. Durante el desarrollo se implementaron conceptos de programación orientada a objetos, patrón de arquitectura MVC, manejo de sesiones y acceso seguro a bases de datos utilizando PDO.

El proyecto fue realizado como actividad de evaluación para aplicar conocimientos relacionados con el desarrollo de aplicaciones web dinámicas, autenticación de usuarios, operaciones CRUD y organización profesional del código.

## Funcionalidades

La aplicación ofrece las siguientes funcionalidades:

* Registro de usuarios.
* Inicio de sesión mediante correo electrónico y contraseña.
* Gestión de sesiones de usuario.
* Creación de nuevas citas.
* Visualización de citas registradas.
* Edición de citas existentes.
* Eliminación de citas.
* Actualización de datos personales del usuario.
* Cierre de sesión seguro.

Cada usuario únicamente puede visualizar y administrar las citas asociadas a su cuenta.

## Tecnologías utilizadas

Para el desarrollo del sistema se utilizaron las siguientes tecnologías:

* PHP como lenguaje principal del lado del servidor.
* MySQL como sistema gestor de bases de datos.
* PDO (PHP Data Objects) para la conexión segura a la base de datos.
* HTML para la estructura de las páginas.
* CSS para el diseño visual de la interfaz.
* XAMPP como entorno de desarrollo local.
* Patrón MVC (Modelo-Vista-Controlador) para la organización del proyecto.

## Seguridad implementada

El sistema incorpora diversas medidas de seguridad básicas para proteger la información almacenada:

Las contraseñas de los usuarios se almacenan utilizando la función password_hash(), evitando guardar credenciales en texto plano. Durante el inicio de sesión se emplea password_verify() para validar la autenticación del usuario.

Se utilizan consultas preparadas mediante PDO para prevenir ataques de inyección SQL. Además, el sistema controla el acceso mediante sesiones PHP utilizando $_SESSION, permitiendo que únicamente los usuarios autenticados accedan a las áreas protegidas.

También se valida que las citas no puedan actualizarse utilizando fechas u horas anteriores a la fecha actual, garantizando una mejor integridad de los datos.

## Estructura del proyecto

El sistema se encuentra organizado bajo el patrón MVC de la siguiente manera:

proyecto/

config/

conexion.php

controllers/

authController.php

citaController.php

userController.php

models/

usuario.php

cita.php

views/

login.php

registro.php

dashboard.php

editarCita.php

editarUser.php

styles/

estilos.css

index.php

Esta estructura permite separar la lógica de negocio, la presentación y el acceso a datos, facilitando el mantenimiento y escalabilidad del sistema.

## Base de datos

La aplicación utiliza una base de datos llamada sistema_citas que contiene dos tablas principales.

### Tabla usuarios

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);
```

Esta tabla almacena la información de los usuarios registrados en el sistema.

### Tabla citas

```sql
CREATE TABLE citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    hora TIME,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```

Esta tabla almacena las citas registradas por cada usuario y mantiene una relación mediante clave foránea con la tabla de usuarios.

## Funcionamiento del sistema

Cuando el usuario accede al sistema puede registrarse o iniciar sesión utilizando sus credenciales. Una vez autenticado es redirigido al panel principal donde puede gestionar sus citas.

Dentro del panel puede agregar nuevas citas especificando fecha y hora. También puede visualizar todas sus citas registradas, modificar la información de una cita existente o eliminarla cuando ya no sea necesaria.

El sistema ofrece además una sección para editar los datos personales del usuario, permitiendo actualizar nombre y correo electrónico.

## Ejecución del proyecto

Para ejecutar la aplicación se deben seguir los siguientes pasos:

1. Instalar XAMPP.
2. Iniciar los servicios Apache y MySQL.
3. Crear la base de datos sistema_citas.
4. Importar el archivo database.sql.
5. Copiar la carpeta del proyecto dentro de htdocs.
6. Abrir el navegador y acceder a:

http://localhost/ProyectoFinalsistema_citas

7. Registrar un usuario o iniciar sesión para comenzar a utilizar el sistema.

## Resultados obtenidos

Como resultado se obtuvo una aplicación web completamente funcional para la administración de citas. El proyecto permitió aplicar conocimientos de programación web, acceso seguro a bases de datos, arquitectura MVC y autenticación de usuarios.

Además, se logró desarrollar un sistema organizado, escalable y fácil de utilizar, capaz de realizar operaciones CRUD sobre las citas y mantener la información de los usuarios protegida mediante buenas prácticas de seguridad.

Trabajo realizado por Claudia Monserrat Ramírez Díaz para la materia de Desarrollo de Aplicaciones Web.
