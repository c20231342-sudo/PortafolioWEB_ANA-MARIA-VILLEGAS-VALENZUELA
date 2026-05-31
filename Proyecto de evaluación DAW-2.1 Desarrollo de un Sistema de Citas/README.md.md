# 📅 Sistema de Citas Web

## 🏫 Instituto Tecnológico Superior de Lerdo

### Proyecto de Evaluación

**Materia:** Desarrollo Web

**Docente:** Ing. Jesús Salas Marín

### Integrantes

* Diana Isabel Contreras Valencia — 232310053
* Alondra Guadalupe Ramírez Ramírez — 232310323
* Adán Ibarra García — 232310223
* Ana María Villegas Valenzuela — C20231342
* Claudia Monserrat Ramírez Díaz — 232310426
* Axell Yael González Cortez — 232310975

### Lugar y Fecha

Ciudad Lerdo, Durango

---

# 📌 Descripción

Sistema web desarrollado en PHP y MySQL que permite a los usuarios registrarse, iniciar sesión y administrar sus citas mediante una interfaz amigable y segura.

El sistema fue diseñado bajo el patrón MVC (Modelo-Vista-Controlador), permitiendo una adecuada organización del código y facilitando su mantenimiento.

---

# 🎯 Objetivo del Proyecto

Desarrollar una aplicación web funcional que permita:

* Registro de usuarios.
* Inicio de sesión seguro.
* Gestión de citas.
* Almacenamiento de información en MySQL.
* Implementación de medidas básicas de seguridad.
* Uso de una arquitectura organizada basada en MVC.

---

# 🛠 Tecnologías Utilizadas

* PHP
* MySQL
* phpMyAdmin
* HTML5
* CSS3
* XAMPP
* MVC (Modelo-Vista-Controlador)

---

# ✨ Funcionalidades

## 👤 Gestión de Usuarios

* Registro de usuarios.
* Inicio de sesión.
* Administración de sesiones.
* Protección de contraseñas mediante cifrado.

## 📅 Gestión de Citas

* Crear citas.
* Visualizar citas.
* Editar citas.
* Actualizar información.
* Eliminar citas.

## 🔒 Seguridad

* Consultas preparadas con PDO.
* Protección contra inyección SQL.
* Control de sesiones.
* Restricción de acceso a páginas protegidas.

---

# 🗄 Base de Datos

Base de datos:

```sql
sistema_citas
```

Tablas principales:

* usuarios
* citas

Relación mediante clave foránea para asociar las citas a cada usuario.

---

# 🚀 Instalación

## Clonar repositorio

```bash
git clone https://github.com/Londrix/SistemaDeCitas.git
```

## Colocar el proyecto en XAMPP

```text
C:\xampp\htdocs\
```

## Crear la base de datos

```sql
sistema_citas
```

Importar el archivo:

```text
database.sql
```

## Ejecutar

Iniciar Apache y MySQL desde XAMPP y abrir:

```text
http://localhost/sistema_citas/
```

---

# 📚 Aprendizajes Obtenidos

* Desarrollo de aplicaciones web con PHP.
* Manejo de bases de datos MySQL.
* Arquitectura MVC.
* Seguridad básica en aplicaciones web.
* Implementación de CRUD.
* Gestión de sesiones.

---

# ✅ Conclusión

El Sistema de Citas permitió aplicar conocimientos de programación web, bases de datos y seguridad informática. Gracias a la implementación del patrón MVC se logró una estructura organizada y mantenible, obteniendo una aplicación funcional que cumple con los requerimientos establecidos para el proyecto.

---

# 🔗 Repositorio

https://github.com/Londrix/SistemaDeCitas.git
