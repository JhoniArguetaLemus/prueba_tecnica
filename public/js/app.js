

/*

function confirmDelete() {
    const confirmation = window.confirm("¿Estás seguro de que quieres eliminar este producto?");
    
    if (confirmation) {
      document.getElementById("deleteForm").submit(); 
    }
}*/


function confirmDelete() {
    
    Swal.fire({
      title: '¿Estás seguro?',
      text: "No podrás revertir esta acción.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Sí, eliminarlo',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("deleteForm").submit();  // Si confirma, se envía el formulario
      }
    });
}



const btnMenu = document.getElementById('btnMenu');
const menu = document.getElementById('menu');

btnMenu.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});