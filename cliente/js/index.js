// js/index.js
document.addEventListener("DOMContentLoaded", async () => {
  const contenedor = document.getElementById("contenedor-destacados"); //Asocio la constante contenedor al elemento con id "contenedor-destacados"
  const productos = await obtenerProductos();//Reutilizo la función obtenerProductos.
  let contador = 0; //Defino la variable contador
  for (let p of productos) {
    if (contador >= 3) break; // Así me aseguro de que no sean más de 3 productos.

    const card = document.createElement("div");
    card.className = "col-md-4";

    card.innerHTML = `
      <div class="card h-100 shadow-sm">
        <img src="${p.img}" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">${p.nombre}</h5>
          <p class="fw-bold text-success">${p.precio.toFixed(2)} €</p>
          <a href="producto.html?id=${p.id}" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
    `;
    contenedor.appendChild(card);
    contador++; //Añado un producto al contador hasta que llegue a 3.
  }
});
