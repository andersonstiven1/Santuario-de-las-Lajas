<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Santuario de Las Lajas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    header.sticky {
      position: fixed;
      backdrop-filter: blur(10px);
    }
  </style>
  <!-- En el <head> de tu HTML -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="bg-white text-black scroll-smooth">

  <!-- Navbar -->
  <header class="sticky top-0 left-0 w-full z-50 bg-white/80 shadow-md transition-all">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center text-black">
      <h1 class="font-bold text-xl">Santuario de Las Lajas</h1>
      <nav class="hidden md:flex space-x-6">
        <a href="#historia" class="hover:text-blue-600 transition">Historia</a>
        <a href="#lugares" class="hover:text-blue-600 transition">Lugares</a>
        <a href="#resena" class="hover:text-blue-600 transition">Reseña</a>
        <a href="#contacto" class="hover:text-blue-600 transition">Contacto</a>
        <button onclick="window.location.href='public/login.php'" class="bg-black text-white font-semibold px-4 py-1 rounded hover:bg-gray-800 transition">Admin</button>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative h-[90vh] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('img/santuario.webp');">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    <div class="relative text-center max-w-2xl px-4">
      <h2 class="text-5xl font-bold mb-4 drop-shadow-md">Santuario de las Lajas</h2>
      <p class="mb-6 text-lg drop-shadow-sm">Descubre una de las catedrales más hermosas del mundo, ubicada en el corazón de Ipiales, Nariño, Colombia.</p>
      <a href="#historia" class="bg-white text-black px-6 py-2 font-semibold rounded hover:bg-gray-300 transition">Explorar</a>
    </div>
  </section>

  <!-- Resto del contenido sigue igual... -->
  <!-- IMPORTANTE: Puedes copiar y pegar el resto del código desde tu archivo original aquí abajo,
       ya que los cambios mayores fueron aplicados a navbar y hero -->

  <!-- Historia -->
<section id="historia" class="max-w-5xl mx-auto px-4 py-16">
  <h3 class="text-3xl font-bold mb-6 text-center">Historia</h3>
  <div class="md:flex gap-6 items-center">
    <div class="md:w-2/3">
      <p class="mb-4 text-gray-700">El Santuario de Nuestra Señora de Las Lajas es una basílica situada en Ipiales, Nariño. Esta impresionante estructura neogótica está construida dentro del cañón del río Guáitara.</p>
      <p class="mb-4 text-gray-700">En 1754, María Mueses y su hija vieron una aparición de la Virgen del Rosario. Años después, tras la muerte de su hija, la Virgen obró un milagro al devolverle la vida.</p>
      <p class="text-gray-700">El 15 de septiembre de 1754, una multitud descubrió la imagen de la Virgen grabada milagrosamente en la piedra. Desde entonces, es un lugar de peregrinación anual.</p>
    </div>
    <img src="img/aparicion.jpg" alt="Santuario" class="md:w-1/3 rounded-xl mt-6 md:mt-0 object-cover shadow-md max-h-80 w-full" loading="lazy">
  </div>
</section>

  <!-- Lugares por visitar 
<section id="lugares" class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-3xl font-bold mb-10 text-center">Lugares por visitar</h3>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitar3museo.jpg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Museo del Santuario</h4>
        <p class="text-sm text-gray-700">Conoce la historia del santuario, sus milagros y las ofrendas dejadas por peregrinos.</p>
      </div>
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitarplaza.jpg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Plaza de Artesanías</h4>
        <p class="text-sm text-gray-700">Encuentra recuerdos y productos típicos de la región nariñense.</p>
      </div>
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitarteleferico.jpeg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Teleférico</h4>
        <p class="text-sm text-gray-700">1400 metros de recorrido con vista panorámica del cañón y el santuario.</p>
      </div>
    </div>
  </div>
</section>-->

<!-- Lugares por visitar -->
<section id="lugares" class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-3xl font-bold mb-10 text-center">Lugares por visitar</h3>
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Lugar 1: Museo del Santuario -->
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitar3museo.jpg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Museo del Santuario</h4>
        <p class="text-sm text-gray-700">Conoce la historia del santuario, sus milagros y las ofrendas dejadas por peregrinos.</p>
        <button onclick="toggleInfo(this)" class="mt-3 text-blue-600 font-semibold hover:underline">Ver más</button>
        <div class="hidden mt-3 text-sm text-gray-600 expanded-content">
          <p><strong>Horarios:</strong> Todos los días de 8:00 a.m. a 6:00 p.m.</p>
          <p><strong>Entrada:</strong> Gratuita o con aporte voluntario.</p>
          <p><strong>Qué encontrarás:</strong> Cartas, placas, rosarios, arte religioso y proyecciones audiovisuales sobre los milagros documentados del santuario.</p>
        </div>
      </div>

      <!-- Lugar 2: Plaza de Artesanías -->
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitarplaza.jpg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Plaza de Artesanías</h4>
        <p class="text-sm text-gray-700">Encuentra recuerdos y productos típicos de la región nariñense.</p>
        <button onclick="toggleInfo(this)" class="mt-3 text-blue-600 font-semibold hover:underline">Ver más</button>
        <div class="hidden mt-3 text-sm text-gray-600 expanded-content">
          <p>Colorido mercado con artesanías hechas a mano, tejidos, cerámica, dulces típicos y recuerdos religiosos. Ideal para llevarte un recuerdo auténtico y apoyar a los artesanos locales.</p>
        </div>
      </div>

      <!-- Lugar 3: Teleférico -->
      <div class="bg-white p-5 rounded-2xl shadow-lg hover:shadow-xl transition">
        <img src="img/porvisitarteleferico.jpeg" class="rounded-xl mb-4 h-48 w-full object-cover" />
        <h4 class="font-semibold text-lg mb-1">Teleférico</h4>
        <p class="text-sm text-gray-700">1400 metros de recorrido con vistas impresionantes hacia el santuario.</p>
        <button onclick="toggleInfo(this)" class="mt-3 text-blue-600 font-semibold hover:underline">Ver más</button>
        <div class="hidden mt-3 text-sm text-gray-600 expanded-content">
          <ul class="list-disc pl-5">
            <li><strong>Longitud:</strong> 1.4 km</li>
            <li><strong>Duración:</strong> 18 minutos aprox.</li>
            <li><strong>Altura máxima:</strong> más de 200 metros sobre el cañón</li>
          </ul>
          <p>Una experiencia única para disfrutar del paisaje montañoso y el Santuario desde las alturas.</p>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Reseñas -->
<section id="resena" class="max-w-7xl mx-auto px-4 py-16">
  <h3 class="text-3xl font-bold mb-10 text-center">Reseñas</h3>
  <div class="grid md:grid-cols-3 gap-6">

<?php
include 'includes/conexion.php';
$sql = "SELECT nombre, pais, comentario FROM comentarios WHERE estado = 'aprobado'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">';
    echo '<p class="italic text-gray-700">"'. htmlspecialchars($row["comentario"]) .'"</p>';
    echo '<p class="text-sm text-gray-500 mt-3">- '. htmlspecialchars($row["nombre"]) . ', ' . htmlspecialchars($row["pais"]) . '</p>';
    echo '</div>';
  }
} else {
  echo "<p>No hay reseñas aún.</p>";
}
?>
  </div>
</section>

<!-- Formulario -->
<section class="bg-blue-50 py-16">
  <div class="max-w-4xl mx-auto px-4">
    <h3 class="text-3xl font-bold mb-8 text-center">Comenta tu visita</h3>
    <form action="../actions/guardar_comentario.php" method="POST" class="grid md:grid-cols-2 gap-6 bg-white p-6 rounded-2xl shadow-md">
      <input type="text" name="nombre" placeholder="Nombre" required class="border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <input type="text" name="apellido" placeholder="Apellido" required class="border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <input type="email" name="email" placeholder="Email" required class="border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <input type="text" name="pais" placeholder="País" required class="border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      <textarea name="comentario" placeholder="Cuéntanos tu experiencia" required class="md:col-span-2 border border-gray-300 p-3 rounded-lg h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
      <button type="submit" class="md:col-span-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">Enviar</button>
    </form>
  </div>
</section>


  <!-- Noticias y eventos -->
  <section class="max-w-7xl mx-auto px-4 py-16">
    <h3 class="text-3xl font-bold mb-8">Noticias y eventos</h3>
    <div class="grid md:grid-cols-3 gap-6">

<?php
include 'includes/conexion.php';
$sql = "SELECT titulo, descripcion FROM eventos ORDER BY fecha_creado DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div>';
    echo '<h4 class="font-semibold">' . htmlspecialchars($row["titulo"]) . '</h4>';
    echo '<p class="text-sm text-gray-700">' . htmlspecialchars($row["descripcion"]) . '</p>';
    echo '</div>';
  }
} else {
  echo "<p>No hay eventos aún.</p>";
}
?>
    </div>
  </section>

  <!-- Galería 
<section class="bg-gray-100 py-16">
  <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-3xl font-bold mb-8 text-center">Galería de imágenes</h3>
    <div class="grid md:grid-cols-3 gap-6">
      <img src="img/porvisitar1.png" class="rounded-xl shadow-lg h-64 w-full object-cover" loading="lazy" />
      <img src="img/z.jpg" class="rounded-xl shadow-lg h-64 w-full object-cover" loading="lazy" />
      <img src="img/interior santuario.jpg" class="rounded-xl shadow-lg h-64 w-full object-cover" loading="lazy" />
    </div>
  </div>
</section>-->

<!-- Sección Galería -->
<section class="bg-gray-100 py-16" id="galeria">
  <div class="max-w-7xl mx-auto px-4" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-3xl font-bold mb-8 text-center">Galería de Imágenes</h2>
    
    <div class="grid md:grid-cols-3 gap-6 mt-8" id="galleryContainer">
      <!-- Imágenes iniciales -->
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/vista frontal.jpg" class="h-64 w-full object-cover" loading="lazy" alt="Santuario Las Lajas vista frontal">
      </div>
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/interior santuario.jpg" class="h-64 w-full object-cover" loading="lazy" alt="Interior del Santuario">
      </div>
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/vista puente2.jpg" class="h-64 w-full object-cover" loading="lazy" alt="Puente hacia el Santuario">
      </div>
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/vista cañon.webp" class="h-64 w-full object-cover" loading="lazy" alt="Vista panorámica del cañón">
      </div>
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/vista atardecer2.jpg" class="h-64 w-full object-cover" loading="lazy" alt="Atardecer en Las Lajas">
      </div>
      <div class="rounded-xl shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/porvisitarcascada.jpeg" class="h-64 w-full object-cover" loading="lazy" alt="Cascada cercana">
      </div>
    </div>
    
    <div class="text-center mt-8">
      <button class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors" 
              id="loadMoreBtn" data-aos="fade-up">
        Cargar más fotos
      </button>
    </div>
  </div>
</section>

<!-- Planifica tu viaje -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-start">
    <div>
      <h3 class="text-2xl font-bold mb-4">Planifica tu viaje</h3>
      <ul class="text-gray-700 space-y-1">
        <li><strong>Dirección:</strong> Santuario de las Lajas, Ipiales, Nariño - Colombia</li>
        <li><strong>Teléfono:</strong> +57 123456789</li>
        <li><strong>Email:</strong> info@santuariolaslajaspiales.com</li>
        <li><strong>Horario:</strong> Todos los días de 6:00 AM a 6:00 PM</li>
      </ul>
      <iframe class="mt-6 w-full h-64 rounded-xl shadow" src="https://maps.google.com/maps?q=santuario%20de%20las%20lajas&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
    </div>
    <form action="../actions/guardar_contacto.php" method="POST" id="contacto" class="space-y-4 bg-gray-50 p-6 rounded-xl shadow">
      <h3 class="text-xl font-semibold mb-4">Contáctanos</h3>
      <div class="grid grid-cols-2 gap-4">
        <input type="text" name="nombre" placeholder="Nombre" class="border border-gray-300 p-3 rounded-lg" />
        <input type="text" name="apellido" placeholder="Apellido" class="border border-gray-300 p-3 rounded-lg" />
        <input type="email" name="email" placeholder="Email" class="border border-gray-300 p-3 rounded-lg" />
        <input type="date" name="fecha_visita" class="border border-gray-300 p-3 rounded-lg" />
      </div>
      <textarea name="mensaje" placeholder="¿Cómo podemos ayudarte?" class="w-full border border-gray-300 p-3 rounded-lg h-32 resize-none"></textarea>
      <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition w-full">Enviar</button>
    </form>
  </div>
</section>

  <!-- Footer 
  <footer class="bg-gray-100 text-center py-8 mt-16 text-sm text-gray-600">
    <p>&copy; 2025 – Santuario de Las Lajas. Todos los derechos reservados.</p>
    <div class="mt-2 space-x-4">
      <a href="#historia">Historia</a>
      <a href="#lugares">Lugares</a>
      <a href="#resena">Reseña</a>
      <a href="#contacto">Contacto</a>
    </div>
  </footer>
</body>
</html>-->

<!-- Footer -->
<footer class="bg-gray-100 text-center py-10 mt-16 text-sm text-gray-600">
  <!-- Descripción -->
  <div class="max-w-xl mx-auto px-4">
    <h4 class="text-lg font-semibold text-gray-800">Santuario de Las Lajas</h4>
    <p class="mt-2">
      Una joya arquitectónica y religiosa en el corazón de los Andes colombianos,
      donde la fe y la naturaleza se unen en perfecta armonía.
    </p>

    <!-- Redes Sociales -->
    <div class="flex justify-center space-x-4 mt-4 text-gray-500">
      <a href="https://www.facebook.com/pages/Santuario%20Nuestra%20Se%C3%B1ora%20De%20Las%20Lajas/300116777387470/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
        <i class="fab fa-facebook fa-lg"></i>
      </a>
      <a href="https://www.instagram.com/lajasipiales/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
        <i class="fab fa-instagram fa-lg"></i>
      </a>
      <a href="https://x.com/search?q=santuario%20de%20las%20lajas&src=typed_query" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
        <i class="fab fa-twitter fa-lg"></i>
      </a>
      <a href="https://www.youtube.com/@laslajascanaloficial5931" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
        <i class="fab fa-youtube fa-lg"></i>
      </a>
    </div>

    <!-- Enlaces -->
    <div class="mt-6 space-x-4">
      <a href="#historia" class="hover:underline">Historia</a>
      <a href="#lugares" class="hover:underline">Lugares</a>
      <a href="#resena" class="hover:underline">Reseña</a>
      <a href="#contacto" class="hover:underline">Contacto</a>
    </div>

    <!-- Derechos -->
    <p class="mt-6 text-xs text-gray-500">&copy; 2025 – Santuario de Las Lajas. Todos los derechos reservados.</p>
    <p class="text-xs text-gray-500">Diseñado con <i class="fas fa-heart text-red-500"></i> por Desarrolladores Colombia</p>
  </div>
</footer>


<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
  });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    AOS.init();
  });
</script>





<script>
  function toggleInfo(button) {
    const content = button.nextElementSibling;
    content.classList.toggle('hidden');
    if (content.classList.contains('hidden')) {
      button.textContent = 'Ver más';
    } else {
      button.textContent = 'Ver menos';
    }
  };

  document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const galleryContainer = document.getElementById('galleryContainer');
    let galleryExpanded = false;
    let extraImageElements = []; // Para guardar referencias y poder eliminarlas

    if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', function() {
        if (!galleryExpanded) {
          // Nuevas imágenes para mostrar
          const newImages = [
            { src: 'img/nosturno2.jpeg', alt: 'Vista nocturna 2 del Santuario' },
            { src: 'img/nocturno1.JPG', alt: 'Vista nocturna del Santuario' },
            { src: 'img/eucaristia.jpg', alt: 'Celebración religiosa' },
            { src: 'img/artesanias.jpg', alt: 'Artesanías locales' },
            { src: 'img/porvisitar2rio.jpg', alt: 'Río cerca del Santuario' },
            { src: 'img/porvisitarcascada.jpeg', alt: 'Cascada cercana' }
          ];

          // Crear y agregar imágenes
          newImages.forEach((img, index) => {
            const wrapper = document.createElement('div');
            wrapper.className = 'rounded-xl shadow-lg overflow-hidden';
            wrapper.setAttribute('data-aos', 'zoom-in');
            wrapper.setAttribute('data-aos-delay', String((index + 1) * 100));
            wrapper.innerHTML = `<img src="${img.src}" class="h-64 w-full object-cover" loading="lazy" alt="${img.alt}">`;

            galleryContainer.appendChild(wrapper);
            extraImageElements.push(wrapper);
          });

          // Iniciar animaciones AOS si está disponible
          if (typeof AOS !== 'undefined') {
            AOS.refresh();
          }

          loadMoreBtn.textContent = 'Ver menos';
          galleryExpanded = true;

        } else {
          // Ocultar o eliminar imágenes extra
          extraImageElements.forEach(el => galleryContainer.removeChild(el));
          extraImageElements = [];
          loadMoreBtn.textContent = 'Ver más fotos';
          galleryExpanded = false;
        }
      });
    }
  });
</script>