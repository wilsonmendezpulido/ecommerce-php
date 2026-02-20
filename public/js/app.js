fetch("../api/producto.php")
    .then(response => response.json())
    .then(data => {
        document.getElementById("producto").innerHTML = `
      <h2>${data.nombre}</h2>
      <p>${data.descripcion}</p>
      <strong>$${data.precio}</strong>
    `;
    })
    .catch(error => console.error(error));