# 🐶 Práctica Integradora 4.3 - Consumo de REST API con The Dog API

## 🏫 Instituto Tecnológico Superior de Lerdo

### Ingeniería Informática

### Desarrollo de Aplicaciones Web

### Unidad 4 - Consumo de Servicios Web

### Práctica Integradora 4.3

**Nombre de la práctica:** Consumo de REST API utilizando The Dog API

**Alumno:** Ana Maria Villegas Valenzuela

**Número de Control:** C20231342

**Docente:** Ing. Jesús Salas Marín

---

# 📖 Descripción de la Práctica

Esta práctica tiene como finalidad comprender el funcionamiento de las APIs REST mediante el consumo de información proporcionada por The Dog API utilizando PHP y cURL.

La aplicación realiza solicitudes HTTP tipo GET para obtener información sobre diferentes razas de perros y mostrar imágenes de una raza específica de forma dinámica dentro de una página web.

---

# 🎯 Objetivo

Desarrollar una aplicación web en PHP capaz de consumir una API REST externa para:

- Obtener información sobre razas de perros.
- Mostrar datos obtenidos en formato JSON.
- Consumir servicios web mediante cURL.
- Utilizar una API KEY para autenticación.
- Mostrar imágenes de una raza específica.
- Aplicar diseño web utilizando HTML y CSS.

---

# 🛠 Tecnologías Utilizadas

- PHP
- HTML5
- CSS3
- cURL
- JSON
- REST API
- The Dog API
- XAMPP
- Visual Studio Code

---

# 🌐 API Utilizada

## The Dog API

Servicio web que proporciona información sobre razas de perros e imágenes.

Endpoint utilizado para obtener razas:

```text
https://api.thedogapi.com/v1/breeds
```

Endpoint utilizado para obtener imágenes:

```text
https://api.thedogapi.com/v1/images/search
```

---

# 🚀 Funcionalidades Implementadas

## 📋 Consulta de Razas

La aplicación realiza una solicitud GET al endpoint de The Dog API para obtener una lista de razas disponibles.

### Información mostrada:

- Nombre de la raza.
- Identificador único (ID).

---

## 🐕 Visualización de Imágenes

Se realiza una segunda consulta para obtener imágenes de una raza específica.

En esta práctica se seleccionó la raza:

### Husky

Mostrando múltiples imágenes obtenidas directamente desde la API.

---

## 🔑 Autenticación mediante API KEY

Para acceder a los recursos de The Dog API se utiliza una API KEY enviada mediante encabezados HTTP.

Esto permite autenticar las solicitudes y obtener acceso a la información proporcionada por el servicio.

---

## ⚙ Uso de cURL

La comunicación con la API se realiza utilizando la extensión cURL de PHP.

Funciones utilizadas:

- curl_init()
- curl_setopt()
- curl_exec()
- curl_close()

---

## 📦 Manejo de JSON

Las respuestas de la API son recibidas en formato JSON y posteriormente convertidas a arreglos de PHP mediante:

```php
json_decode()
```

Esto permite manipular y mostrar la información dentro de la aplicación.

---

# 🎨 Diseño de la Interfaz

La interfaz fue desarrollada utilizando HTML y CSS.

### Características:

- Diseño moderno.
- Colores pastel.
- Tarjetas organizadas.
- Diseño responsivo.
- Visualización amigable de la información.
- Galería de imágenes.

---

# 📂 Estructura del Proyecto

```text
REST_API_DOG/
│
├── index.php
├── css/
│   └── estilos.css
│
├── capturas/
│   ├── lista_razas.png
│   ├── husky.png
│   ├── codigo_php.png
│   └── ejecucion.png
│
└── README.md
```

---

# 🔄 Flujo de Funcionamiento

1. Se realiza la conexión con The Dog API.
2. Se envía la API KEY.
3. Se obtiene la lista de razas.
4. Se procesan los datos JSON.
5. Se muestran las razas disponibles.
6. Se selecciona la raza Husky.
7. Se solicitan imágenes relacionadas.
8. Se muestran las imágenes en pantalla.

---



# ⚙ Instalación

## 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

## 2. Colocar el proyecto en XAMPP

```text
C:\xampp\htdocs\
```

## 3. Iniciar servicios

Desde XAMPP iniciar:

- Apache

## 4. Ejecutar el proyecto

Abrir en el navegador:

```text
http://localhost/REST_API_DOG
```

---

# 📚 Aprendizajes Obtenidos

Durante la realización de esta práctica se fortalecieron conocimientos relacionados con:

- Consumo de APIs REST.
- Uso de solicitudes HTTP.
- Manejo de datos JSON.
- Programación en PHP.
- Uso de cURL.
- Integración de servicios externos.
- Diseño web con HTML y CSS.
- Validación y manejo de errores.

---

# ⚠ Dificultades Encontradas

- Configuración correcta de la API KEY.
- Interpretación de respuestas JSON.
- Obtención de imágenes dinámicas.
- Manejo de errores de conexión.
- Procesamiento de datos obtenidos desde la API.

---

# ✅ Soluciones Aplicadas

- Uso de funciones reutilizables para las consultas.
- Implementación de validaciones de respuesta.
- Manejo adecuado de errores mediante cURL.
- Organización del código mediante funciones.
- Diseño visual para mejorar la experiencia del usuario.

---

# 📝 Conclusión

En la realización de esta práctica se logró comprender el funcionamiento básico de una REST API mediante el uso del lenguaje PHP y la extensión cURL. A través de la conexión con The Dog API se realizaron solicitudes HTTP tipo GET para obtener información en tiempo real sobre diferentes razas de perros y mostrar imágenes dinámicamente dentro de una página web.

Asimismo, se reforzaron conocimientos relacionados con el manejo de datos JSON, autenticación mediante API KEY, validación de errores y consumo de servicios externos. La implementación de funciones reutilizables permitió mantener una estructura organizada y facilitar el mantenimiento del código.

Finalmente, se desarrolló una interfaz atractiva utilizando HTML y CSS, mejorando la presentación visual de la información. Esta práctica permitió integrar conocimientos de programación web, diseño y consumo de APIs REST, herramientas fundamentales en el desarrollo de aplicaciones modernas.

---

