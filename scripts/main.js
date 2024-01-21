const ctx = document.getElementById('myChart');
const dateAndTime = document.getElementById('date-and-time');
const btnRegistrar = document.getElementById('btn-registrar');
const btnEditar = document.getElementById('btn-editar');
const btnEliminar = document.getElementById('btn-eliminar');
const placeHolderMeta = document.getElementById('placeholder-meta');
const meta = document.getElementById('meta-registrada');

const modaltitle = document.getElementById('exampleModalLabel');
const formMeta = document.getElementById('form-meta');

const labelMeta = [];

async function get_data_meta(contMeta) {
    const URL = 'https://arthecnology.com/control/process/API/data_meta.php';

    try {
        const response = await fetch(URL);

        if (!response.ok) {
            throw new Error(`Error al obtener datos: ${response.statusText}`);
        }

        const data = await response.json();
        data.forEach(meta => {
            let nombreMeta = meta.meta_nombre;
            let fechaInicio = meta.meta_inicio;
            let fechaFin = meta.meta_fin;

            labelMeta.push(nombreMeta);

            let containerMeta = document.createElement('div');
            containerMeta.classList.add('meta-data');

            let tituloMeta = document.createElement('h4');
            tituloMeta.innerText = nombreMeta;

            let spanInicio = document.createElement('span');
            spanInicio.innerText = fechaInicio;

            let spanFin = document.createElement('span');
            spanFin.innerText = fechaFin;

            containerMeta.appendChild(tituloMeta);
            containerMeta.appendChild(spanInicio);
            containerMeta.appendChild(spanFin);
            contMeta.appendChild(containerMeta);
            placeHolderMeta.style.display = 'none';
        })
    } catch (error) {
        console.error(`Error: ${error.message}`);
    }
}

get_data_meta(meta);

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
    type: 'line',
    data: {
      labels: [labelMeta],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
        animation: {
            duration: 2000,
            onProgress: function(context) {
                if (context.initial) {
                    initProgress.value = fechaFin / fechaInicio;
                }
            }
        },
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