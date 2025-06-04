# My Blog - Aplicación Laravel

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)


## 📋 Requisitos previos

-   PHP 8.1 o superior
-   Composer
-   MySQL/MariaDB
-   Servidor web (Apache o Nginx)
-   XAMPP o Laragon (recomendado)

## ⚙️ Instalación

Sigue estos pasos para instalar y configurar el proyecto correctamente:

1. **Clonar el repositorio**

    ```bash
    git clone https://github.com/RodriVelo/TP3-LARAVEL
    cd TP3-LARAVEL
    ```

2. **Configurar el entorno**

    ```bash
    # Crear archivo de configuración
    cp .env.example .env

    # Generar clave de aplicación
    php artisan key:generate
    ```

3. **Instalar dependencias**

    ```bash
    composer install
    ```

4. **Configurar base de datos**

    Edita el archivo `.env` con la información de tu base de datos:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
    ```

5. **Ejecutar migraciones**

    ```bash
    php artisan migrate
    ```

    > Nota: Si aparece el mensaje _"Would you like to create it? (yes/no) [no]"_, responde "yes".

6. **Iniciar el servidor**
    ```bash
    php artisan serve
    ```
    Accede a la aplicación en: [http://localhost:8000](http://localhost:8000)


## 🔧 Solución de problemas comunes

### Error 500 al iniciar

Si encuentras un error 500 al ejecutar `php artisan serve`, verifica:

1. El archivo `.env` está correctamente configurado
2. La base de datos está creada y accesible
3. Todas las dependencias están instaladas