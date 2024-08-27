document.getElementById('formAutor').addEventListener('submit', function (event) {
    event.preventDefault();
    const nombre = document.getElementById('nombre').value;

    axios.post('ruta/a/tu/api/para/autores', { nombre: nombre })
        .then(response => {
            console.log(response.data);
            // Aquí puedes actualizar la tabla de autores
        })
        .catch(error => {
            console.error('Error:', error);
        });
});