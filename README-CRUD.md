En esta documentación, se describe un CRUD (Create, Read, Update, Delete) básico en PHP puro con MVC utilizando PostgreSQL como base de datos. El objetivo de este CRUD es gestionar una tabla "pacientes" que contendrá información sobre pacientes médicos.

Requisitos previos
1-Tener un servidor web local instalado (por ejemplo, XAMPP o WAMP) para ejecutar el código PHP.
2-Tener PostgreSQL instalado en el servidor local o remoto.
3-Crear una base de datos llamada "hospital" en PostgreSQL y una tabla "pacientes" con campos "id", "nombre", "apellido", "telefono", "email", y "genero".

php 5.4 -- VERSION postgresql v10 

Postgresql 10

base de datos: db_paciente

usuario: postgres contraseña: 12345678

http://localhost/paciente_php/ --> ESTA SE CORRE EN XAMPP QUE ES UN GESTOR DE BASE DE DATOS DONDE TENEMOS A PHP 

ESTE CRUD SENCILLO NOS PERMITE CREAR, VISUALIZAR, ELMINAR, Y ACTUALIZAR LOS REGISTROS RESPECTIVOS A UN PACIENTE
SE CREO EN PHP PURO, SE UTILIZARON LIBRERIAS COMO JQUERY Y BOOTSTRAP LAS CUALES NOS AYUDAN A TENER UNA MEJOR INTERCCION A NIVEL VISUAL CON EL USUARIO EN TEMAS DE DISEÑO, LAS FUNCIONES Y CLASES SE MANEJARON CON JAVASCRIP Y PHP.

El siguiente informe presenta un CRUD (Create, Read, Update, Delete) básico implementado en PHP puro utilizando PostgreSQL como base de datos. El objetivo de este CRUD es gestionar la información de pacientes médicos en una tabla denominada "pacientes".

Descripción del Proyecto:

El proyecto consiste en una aplicación web que permite realizar las siguientes operaciones sobre la tabla "pacientes":

Crear: Permite agregar nuevos pacientes a la base de datos proporcionando los datos necesarios, como nombre, apellido, teléfono, correo electrónico y género.

Leer: Permite visualizar una lista de todos los pacientes registrados en la base de datos, mostrando sus datos principales.

Actualizar: Permite editar la información de un paciente existente mediante un formulario de edición que muestra los datos actuales y permite modificarlos.

Eliminar: Permite eliminar un paciente seleccionado de la base de datos.

Estructura del Proyecto:

El proyecto sigue una estructura organizada para separar las responsabilidades y mantener un código limpio y mantenible:

index.php: Este es el punto de entrada de la aplicación. Maneja las solicitudes HTTP y redirige al controlador apropiado según la acción solicitada (crear, leer, actualizar o eliminar).

config.php: Contiene las configuraciones básicas para la conexión a la base de datos PostgreSQL, como nombre de host, nombre de la base de datos, nombre de usuario y contraseña.

modelo/: Es el directorio que contiene la lógica de acceso a la base de datos.

Index.php: Es la clase que maneja las operaciones CRUD relacionadas con los pacientes. Contiene métodos para agregar, listar, obtener por ID, actualizar y eliminar pacientes.

vista/: Contiene las vistas o plantillas para la interfaz de usuario.

index.php: Muestra una tabla con la lista de pacientes y opciones para editar o eliminar cada uno.

nuevo.php: Muestra un formulario para agregar un nuevo paciente con campos para nombre, apellido, teléfono, correo electrónico y género.

editar.php: Muestra un formulario similar al de agregar, pero con los datos actuales del paciente para editarlos.

borrar paciente.php: Muestra un mensaje de confirmación antes de eliminar un paciente.

Funcionamiento:

Cuando el usuario ingresa a la página principal (index.php), se muestra una lista de todos los pacientes registrados en la tabla "pacientes" utilizando el método listar de la clase Paciente.

El usuario puede seleccionar "Agregar Paciente" para acceder al formulario de agregar_paciente.php. Al enviar el formulario, los datos se procesan mediante el método agregar de la clase Paciente.

Al hacer clic en el botón "Editar" junto a un paciente en la lista, el usuario será dirigido a editar_paciente.php, donde puede modificar los datos del paciente seleccionado. Los cambios se actualizan en la base de datos mediante el método actualizar de la clase Paciente.

Si el usuario hace clic en el botón "Eliminar" junto a un paciente, se le mostrará un mensaje de confirmación en borrar_paciente.php. Al confirmar la eliminación, el paciente se eliminará de la base de datos mediante el método borrar de la clase Paciente.

Conclusiones:

El CRUD implementado en PHP puro con PostgreSQL permite gestionar de manera sencilla la información de pacientes médicos. Es un ejemplo básico que puede servir como base para construir aplicaciones más complejas y extensas. Se han utilizado buenas prácticas como consultas preparadas para evitar ataques de inyección SQL y la separación de la lógica de acceso a la base de datos en el modelo para mantener un código organizado y seguro. 
