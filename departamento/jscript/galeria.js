document.querySelector('.prev').addEventListener('click', function() {
    document.querySelector('.galeria-contenedor').scrollBy({
      left: -600,
      behavior: 'smooth'
    });
  });
  
  document.querySelector('.next').addEventListener('click', function() {
    document.querySelector('.galeria-contenedor').scrollBy({
      left: 600,
      behavior: 'smooth'
    });
  });