## SITIO WEB - DIGICERT
El proyecto está desarrollado en WordPress, utilizando una base de datos MySQL. Todos los elementos esenciales del sitio, incluyendo plugins, temas, archivos subidos, fuentes y archivos de idioma (la carpeta wp-content), están respaldados en [Google Drive](https://drive.google.com/drive/folders/1tgUpDrhG4LTdisMbCz3Zi-rdXFG6ZcMO) para garantizar su seguridad y disponibilidad.

## Requisitos

Los requisitos recomendados para el compilado de Wordpress:

- Tener Instalado CURL.
- Contar con un Servidor Web (Ej.: XAMPP, Apache, Nginx).
- MySQL
- PHP 5.6 o superior
- Git Instalado
- WP-CLI Instalado

## PASOS DE INSTALACION EN LOCAL
> [!IMPORTANT]
> Debes tener **WP-CLI** instalado. Si aún no lo has hecho, puedes elegir una de las siguientes opciones de instalación:
> 
> - Opción 1 (Linux): [Guía de Instalación de WP-CLI de Hostinger](https://www.hostinger.es/tutoriales/wp-cli) para obtener instrucciones detalladas.
> - Opción 2 (Linux): [Guía de Uso de WP-CLI en AyudaWP](https://ayudawp.com/wp-cli-la-interfaz-de-comandos-de-wordpress-guia-de-uso/) para aprender cómo instalar y usar WP-CLI.
> - Opción 3 (Windows): [Guia de instalacion WP-CLI en Windows](https://desarrollowp.com/blog/tutoriales/wp-cli-parte-1-instalacion-primeros-pasos/) .

### PASO 1: _Clonar repositorio en tu ordenador_

```bash
git clone https://github.com/Digicert-Bolivia/digicert-website.git
```

### PASO 2: _Creación de la base de datos_
- Crea la base de datos con el nombre de `“digicert_website_db”`
- Importa la base de datos, el backup sql está en la raíz de proyecto con el nombre de `digicert_website_db.sql`

```bash
wp db import digicert_website_db.sql
```
### PASO 3: _Crear el `wp-config.php` para establecer conexión a bd_

Establece y ejecuta las credenciales de conexion a la bd:

**Windows (cmd o PowerShell)**

```bash
wp config create --dbname=digicert_website_db --dbuser=root --dbpass= --dbhost=localhost --path=C:\xampp\htdocs\digicert-website --allow-root
```

**Linux (consola)**

```bash
wp config create --dbname=digicert_website_db --dbuser=root --dbpass= --dbhost=localhost --path=/var/www/html/digicert-website --allow-root
```
Luego Verifica que el `wp-config.php` se haya generado correctamente.

### PASO 4: _Actualización de la URL Base con WP-CLI_
> [!NOTE]
> Utiliza una de estas opciones: PowerShell, Git Bash o Linux.

Estar en modo administrador e ir a la ruta del proyecto por ejemplo en XAMPP:

```bash
cd /var/www/html/digicert-website
```

Siempre se recomienda hacer un “simulacro” antes de realizar la búsqueda y el reemplazo reales. Esto mostrará cuántas instancias se cambiarán

```bash
wp search-replace --dry-run 'http://localhost/digicert/' 'http://localhost/digicert-website/'
```

Ahora, para realizar la búsqueda y reemplazo real con WP-CLI, elimina el parámetro -dry-run
```bash
wp search-replace 'http://localhost/digicert/' 'http://localhost/digicert-website/'
```

### PASO 5: _Instalar Plugin UpdraftPlus para restaurar carpeta "Content"_

```bash
wp plugin install updraftplus
```
### PASO 6: _Restarurar Backups de Plugins, Themes, Uploads y Others_
> [!IMPORTANT]
> El Respaldo Database NO debe restaurarse por que esta viculado con el anterior Dominio.

1. Ir al [Panel de Administracion del Wordpress](http://localhost/digicert-website/wp-admin/)
2. Ir al menu Updraftplus y clic en **Restore**
   
   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![image](https://github.com/user-attachments/assets/5537ec79-a1da-4d81-ac9f-6fcbcf1d9e08) |
   
3. Marcar las opciones de **plugin, themes, uploads y other**. Luego presiona Next.
   
   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![image](https://github.com/user-attachments/assets/27905ddc-bd50-413b-bca5-b710aae2ca06) |

4. Esperamos a que los archivos se descarguen y luego clic en **Restore**
   
   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![image](https://github.com/user-attachments/assets/677f4cab-5d3c-4120-a883-bcae54b7e278)|
   
5. Esperar el descompresión e instalación

   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![image](https://github.com/user-attachments/assets/8fb83d4f-c66e-47ad-a8eb-45e13d22edb7) |

6. Retornar a Menu de UpdraftPlus

   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![image](https://github.com/user-attachments/assets/a616a4ba-ef90-4304-bb99-a73f168e7bdb) |

7. Finalmente dirigete a visualizar la restauración del [Sitio Web](http://localhost/digicert-website/)
##

### CONTROL DE VERSION DEL CODIGO
Para subir los cambios al repositorio github debes realizar los siguientes pasos:

1. Ir al menu de Updraftplus y presionar el boton de _"Hacer Copia de seguridad"_.
   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![paso1](https://github.com/user-attachments/assets/730bbed6-91b5-4af2-8937-bca820f987e3) |

    
2. Marcar las 3 siguientes opciones y clic en _"Hacer ahora copia una seguridad"_
   | Imagen de Ejemplo |
   | :-------------------------: |
   | ![paso2](https://github.com/user-attachments/assets/4e79c884-28ee-42b8-a346-860f67b1d999) |

3. **Exportar base de datos:** Ir a raiz del proyecto y abrir la consola para ejecutar lo siguiente:
     ```bash
     sudo wp db export
     ```
    para Linux:
    ```bash
     sudo /usr/local/bin/wp db export
     ```
4. Renombrar la base de datos exportada a `“digicert_website_db.sql”`
    ```bash
     cd /var/www/html/digicert-website
     ```
    ```bash
     mv digicert_website_db-2024-12-06-41e91c6.sql digicert_website_db.sql
     ```
4. Subir contenido del proyecto a repositorio github

### NOTAS ADICIONALES
- **Enlace del Backup:** Se Almacena en esta [Carpeta de Drive](https://drive.google.com/drive/folders/1tgUpDrhG4LTdisMbCz3Zi-rdXFG6ZcMO)
- **Extensión ZIP:** Habilitar o descomentar la `extension=zip` en el archivo de configuración de `php.ini`
- **Extensión imagick, gd, intl:** Descomentar la `extension=imagick`, `extension=gd`, `extension=intl`, en el archivo de configuración de `php.ini`. En caso de no estar instalado puedes ejecutar la instalación con el siguiente comando:
   
   ```bash
   sudo dnf install php-gd php-imagick php-intl
   ```

