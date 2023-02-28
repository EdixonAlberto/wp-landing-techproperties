# Landing Tech Properties

Landing que ofrece soluciones digitales en el ámbito del real estate y turismo.

**DEMO** &#x279c; [https://techproperties-demo.netlify.app/](https://techproperties-demo.netlify.app/)

## Preparar Entorno

- Instalar LAMP (Apache, MySql, PHP) en el entorno del servidor.
  1. En Windows puede instalar [XAMPP](https://www.apachefriends.org/es/index.html)
  2. En Linux puede seguir esta guía: [Instalar LAMP en entorno Linux](https://gist.github.com/EdixonAlberto/0c95d228896c1893cfbcd6d237475aaf)

- Clonar este repositorio en la ruta [C:/xampp/htdocs](C:\xampp\htdocs) (Windows) o [/var/www/html](/var/www/html) (Linux)

- Crear desde apache un virtual host en la ruta `${SERVER_ROOT}/wp-landing-techproperties`, se comparte un código de ejemplo en [httpd-vhost-example.conf](./docs/httpd-vhost-example.conf)

- Modificar el host del servidor para agregar el nuevo dominio `techproperties.es`
```sh
127.0.0.1     techproperties.es
```

- Iniciar `phpMyAdmin` para restaurar la base de datos importando el siguiente archivo [tech_properties_db.sql](./docs/tech_properties_db.sql)

- Ingresar desde el navegador a la ruta [http://techproperties.es/wp-admin](http://techproperties.es/wp-admin) para iniciar sesión en el CMS con las siguientes credenciales:
```sh
# Usuario:    admin
# Contraseña: YBKQDfkNL20XfmJI85
```

## Editar Landing (Desarrollo)

1. Usar WordPress

Ir a la sección `Páginas` y pegar el html escrito en [wp-content/uploads/landing.html](./wp-content/uploads/landing.html) y usar el editor integrado de WordPress para editar la página.

2. Usar Editor de Código

Puede iniciar su editor de código preferido desde la ruta [wp-content/uploads](./wp-content/uploads), acá encontrará todos los archivos necesarios para editar la página.
- Template [wp-content/uploads/landing.html](./wp-content/uploads/landing.html)
- Styles [wp-content/uploads/main.css](./wp-content/uploads/main.css)
- JavaScript [wp-content/uploads/main.js](./wp-content/uploads/main.js)

## Visualización

![preview](./preview.png)
