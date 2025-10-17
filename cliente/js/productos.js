document.addEventListener('DOMContentLoaded', async () => {
  const contenedor = document.getElementById('contenedor-productos');
  const productos = await obtenerProductos();

  productos.forEach(p => {
    const card = document.createElement('div');
    card.className = "col-md-4";

    card.innerHTML = `
      <div class="card h-100 shadow-sm" style="background-color: #5686afff;"> <!--Modifico el estilo del contenedor-->
        <img src="${p.img}" class="card-img-top">

        <div class="card-body text-center">
          <h5 class="card-title" style="font-size: 1.7rem; color: #ffffffff;">${p.nombre}</h5>
          <p class="card-text" style="font-size: 1.1rem; color: #ffffffff;">${p.descripcion}</p>  
          <p class="fw-bold">${p.categoria}</p>
          <p class="fw-bold" style="font-size: 1.2rem; color: #27ae60;">${p.precio.toFixed(2)} €</p>
          <a href="producto.html?id=${p.id}" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
    `;

    contenedor.appendChild(card);
  });
});