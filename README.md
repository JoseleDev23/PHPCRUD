📚 Biblioteca "Don Pin Pon" - Sistema de Gestión de Usuarios y Libros

Descripción del Proyecto

Este proyecto es un CRUD (Crear, Leer, Actualizar, Eliminar) desarrollado en PHP que permite gestionar usuarios y libros en una biblioteca llamada "Don Pin Pon". 
El sistema cuenta con dos paneles de control (dashboards) diferentes: uno para los usuarios regulares y otro para los administradores. 
Los administradores pueden gestionar tanto a los usuarios como a los libros de la biblioteca, mientras que los usuarios regulares solo pueden gestionar su perfil y consultar el catálogo de libros.

Tecnologías Utilizadas

Frontend 🖥️

🎨 HTML5: Para la estructura de la interfaz.

💅 CSS3: Diseño personalizado y responsive.

🎨 Bootstrap: Para un diseño moderno y adaptable en cualquier dispositivo.

Backend 🔧

🐘 PHP: Lenguaje principal para el desarrollo del backend y la lógica del CRUD.

🗄️ MySQL: Base de datos relacional para gestionar los datos de usuarios y libros.

Características Principales 🌟

🔑 Autenticación de Usuarios: Los usuarios pueden registrarse, iniciar sesión y actualizar sus perfiles.

📚 Gestión de Libros: Los administradores pueden añadir, modificar o eliminar libros del sistema.

👥 Gestión de Usuarios: Los administradores tienen control total sobre los usuarios (crear, editar, eliminar).

🗂️ Dashboards Separados:

Usuario Regular: Consulta el catálogo de libros, administra su perfil.
Administrador: Administración completa de usuarios y libros.

🔍 Búsqueda y Filtros: Los usuarios pueden buscar libros por título, autor o categoría.

📱 Diseño Responsive: Compatible con dispositivos móviles, tablets y desktop.

Funcionalidades Detalladas

Dashboard de Administrador 👨‍💼

Gestión de Usuarios:
Crear nuevos usuarios.
Editar información de usuarios existentes.
Eliminar usuarios del sistema.
Gestión de Libros:
Añadir nuevos libros a la biblioteca.
Editar los datos de libros existentes (título, autor, categoría, etc.).
Eliminar libros del sistema.

Dashboard de Usuario 👤
Consulta de Libros:
Los usuarios pueden ver el catálogo de libros disponibles en la biblioteca.
Búsqueda y filtros para encontrar libros rápidamente.

Gestión del Perfil:
Actualización de información personal como nombre, correo electrónico y contraseña.

Instalación y Configuración ⚙️

Requisitos

Servidor Web compatible con PHP (XAMPP, WAMP, etc.).
MySQL para la base de datos.
Navegador Web actualizado.
Pasos para Instalar
Clona este repositorio en tu servidor local:

bash

git clone https://github.com/JoseleDev23/PHPCRUD.git

Importa la base de datos:

Entra a phpMyAdmin o tu gestor de bases de datos preferido.
Crea una base de datos llamada biblioteca_don_pin_pon.
Importa el archivo biblioteca.sql incluido en el proyecto.

Configura la conexión a la base de datos:

Abre el archivo config.php y ajusta los valores de acuerdo a tu entorno local:
php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca_don_pin_pon";
Ejecuta el proyecto:

Dirígete a http://localhost/don-pin-pon en tu navegador para ver el sistema funcionando.

Estructura del Proyecto 🗂️

/css: Archivos de estilos y configuraciones de Bootstrap y personalizados.

/includes: Archivos reutilizables como la conexión a la base de datos y cabeceras.

/admin: Panel de administración y gestión de usuarios y libros.

/user: Dashboard de usuarios regulares.

/config.php: Configuración de la base de datos.

/biblioteca.sql: Archivo SQL para importar la base de datos.

Próximas Mejoras 🚀
🔒 Seguridad Mejorada: Implementar validación más avanzada para evitar ataques de inyección SQL y CSRF.
📊 Estadísticas y Reportes: Añadir una sección de reportes para que los administradores puedan ver estadísticas sobre los libros más leídos o usuarios más activos.
🧹 Optimización del Código: Refactorización del código para mejorar la eficiencia y la legibilidad.
📧 Sistema de Notificaciones: Envío de emails automáticos para recordar a los usuarios sobre la devolución de libros.
Contribuciones 🤝
¡Las contribuciones son bienvenidas! Si tienes alguna idea para mejorar el proyecto o quieres reportar un error, no dudes en abrir un Issue o hacer un Pull Request.

Contacto 📩
Si tienes alguna pregunta o sugerencia, puedes contactarme a través de:

📧 Email: joseamsarmiento@gmail.com
📱 Teléfono: +1 786-942-8221
Espero que disfrutes usando Don Pin Pon tanto como yo disfruté desarrollándolo. ¡Gracias por visitar el proyecto! 👨‍💻📚
