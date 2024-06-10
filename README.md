# Proyecto Laravel Kickoff

Este repositorio contiene una configuración inicial para un proyecto Laravel que integra varias tecnologías para el desarrollo web. Las tecnologías incluidas son:

- **Laravel** 11
- **Tailwind CSS**
- **Livewire**
- **Alpine.js**
- **Jetstream**
- **Passport**

## Presentacion

![Pagina Home1](https://github.com/ZitelliDZ/kickoff-laravel/blob/main/presentacion/page-1.png?raw=true)

![Pagina Home2](https://github.com/ZitelliDZ/kickoff-laravel/blob/main/presentacion/page-2.png?raw=true)

![Pagina Home3](https://github.com/ZitelliDZ/kickoff-laravel/blob/main/presentacion/page-3.png?raw=true)

![Pagina Home4](https://github.com/ZitelliDZ/kickoff-laravel/blob/main/presentacion/page-4.png?raw=true)

## Instalación

Sigue estos pasos para configurar tu entorno de desarrollo:

1. **Clonar el repositorio**

   ```sh
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
    ```
2. **Instalar las dependencias**

   ```sh
   composer install
   npm install
   ```
3. **Configurar el archivo `.env`**

   ```sh
    cp .env.example .env
    php artisan key:generate
    ```
4. **Configurar la base de datos**

   ```sh
    php artisan migrate
    ```
5. **Instalar passport**

   ```sh
    php artisan passport:install
    ```
6. **Iniciar el servidor**

    Terminal 1
   ```sh
    npm run dev
    ```
    Terminal 2
   ```sh
    php artisan serve
    ```

