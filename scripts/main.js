const ctx = document.getElementById('myChart');
const dateAndTime = document.getElementById('date-and-time');
const btnRegistrar = document.getElementById('btn-registrar');
const btnEditar = document.getElementById('btn-editar');
const btnEliminar = document.getElementById('btn-eliminar');
const placeHolderMeta = document.getElementById('placeholder-meta');
const meta = document.getElementById('meta-registrada');

const modaltitle = document.getElementById('exampleModalLabel');
const formMeta = document.getElementById('form-meta');

if (meta.innerHTML.trim() === '') {
    placeHolderMeta.style.display = 'block';
    btnEditar.style.display = 'none';
    btnEliminar.style.display = 'none';
} else {
    placeHolderMeta.style.display = 'none';
}

btnRegistrar.addEventListener('click', function(){
    modaltitle.innerText = "Crear nueva meta";
    formMeta.setAttribute('action', 'https://arthecnology.com/control/process/meta.php');
});

btnEditar.addEventListener('click', function(){
    modaltitle.innerText = "Editar datos de la meta";
});

btnEliminar.addEventListener('click', function(){
    modaltitle.innerText = "Eliminar esta meta";
});


function getDateAndTime() {
    let fechaHora = new Date();
    let fecha = fechaHora.toLocaleDateString();
    let hora = fechaHora.toLocaleTimeString();
    dateAndTime.innerText = fecha + ' ' + hora;

}

new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
              position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Doughnut Chart'
            }
        }
    }
});

setInterval(getDateAndTime, 1000)