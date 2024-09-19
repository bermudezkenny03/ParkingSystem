<?php
include('app/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking System</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .hero-bg {
      background-image: url('img/fondo.webp');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
  </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900">

  <!-- Navbar -->
  <nav class="bg-white shadow-md dark:bg-gray-800">
    <div class="max-w-screen-xl flex items-center justify-between p-4 mx-auto">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-10" alt="Parking Logo" />
        <span class="text-3xl font-bold text-gray-900 dark:text-white">Parking System</span>
      </a>
      <div class="hidden md:flex space-x-6 rtl:space-x-reverse">
        <a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Inicio</a>
        <a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Servicios</a>
        <a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Contacto</a>
      </div>
      <div class="hidden md:flex items-center space-x-4 rtl:space-x-reverse">
        <a href="login.html" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 text-lg">Iniciar sesión</a>
        <a href="register.html" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-lg">Registrarse</a>
      </div>
      <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Abrir menú</span>
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
      </button>
    </div>
    <div id="navbar-default" class="hidden md:hidden w-full">
      <ul class="flex flex-col items-center p-4 space-y-4 bg-gray-50 dark:bg-gray-800">
        <li><a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Inicio</a></li>
        <li><a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Servicios</a></li>
        <li><a href="#" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Contacto</a></li>
        <li><a href="login.html" class="text-lg text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Iniciar sesión</a></li>
        <li><a href="register.html" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-lg">Registrarse</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-bg flex items-center justify-center text-center">
    <div class="text-white">
      <h1 class="text-6xl font-bold drop-shadow-lg">Parking System</h1>
      <p class="text-2xl mt-4">El mejor sistema para gestionar tus estacionamientos</p>
    </div>
  </section>

  <!-- Sección de servicios -->
  <section class="py-20 bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-8 text-gray-900 dark:text-white">Nuestros Servicios</h2>
      <div class="flex flex-wrap justify-center space-x-4">
        <div class="bg-white rounded-lg shadow-lg p-6 w-64 mb-8 dark:bg-gray-700 dark:text-white">
          <img src="https://images.unsplash.com/photo-1556742393-d75f468bfcb0" alt="Servicio 1" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Reserva de Espacios</h3>
          <p>Encuentra y reserva tu lugar de estacionamiento de manera rápida y eficiente.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 w-64 mb-8 dark:bg-gray-700 dark:text-white">
          <img src="img/nequi-01.png" alt="Servicio 2" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Gestión de Pagos</h3>
          <p>Paga de forma segura con nuestras múltiples opciones de pago integradas.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 w-64 mb-8 dark:bg-gray-700 dark:text-white">
          <img src="https://images.unsplash.com/photo-1549923746-c502d488b3ea" alt="Servicio 3" class="rounded-lg mb-4">
          <h3 class="text-2xl font-semibold mb-2">Soporte 24/7</h3>
          <p>Nuestro equipo de soporte está disponible las 24 horas para ayudarte.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-between">
        <!-- Información de la compañía -->
        <div class="w-full md:w-1/3 mb-6">
          <h2 class="text-lg font-bold mb-4">Parking System</h2>
          <p class="text-gray-400">El sistema más eficiente para gestionar estacionamientos. Encuentra lugares disponibles y gestiona tus pagos de forma sencilla.</p>
        </div>
        <!-- Enlaces útiles -->
        <div class="w-full md:w-1/3 mb-6">
          <h2 class="text-lg font-bold mb-4">Enlaces útiles</h2>
          <ul class="text-gray-400">
            <li class="mb-2"><a href="#" class="hover:underline">Inicio</a></li>
            <li class="mb-2"><a href="#" class="hover:underline">Servicios</a></li>
            <li class="mb-2"><a href="#" class="hover:underline">Contacto</a></li>
            <li><a href="#" class="hover:underline">Soporte</a></li>
          </ul>
        </div>
        <!-- Suscripción al boletín -->
        <div class="w-full md:w-1/3">
          <h2 class="text-lg font-bold mb-4">Suscríbete</h2>
          <form class="flex flex-col">
            <input type="email" placeholder="Tu correo electrónico" class="px-4 py-2 mb-4 rounded-lg bg-gray-800 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600" />
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Suscribirse</button>
          </form>
        </div>
      </div>
      <div class="mt-8 text-center text-gray-400">
        &copy; 2024 Parking System. Todos los derechos reservados.
      </div>
    </div>
  </footer>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      const menu = document.getElementById('navbar-default');
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
