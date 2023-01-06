    window.addEventListener('store', function(event){
      Swal.fire({
      title:event.detail.title,
      icon:event.detail.icon,
      iconColor:event.detail.iconColor,
      timer: 1500,
      width:'24em',
      toast:true,
      position:'top-end',
      showConfirmButton:false,
  });
})
    window.addEventListener('deleted', function(event){
      Swal.fire({
      title:event.detail.title,
      icon:event.detail.icon,
      iconColor:event.detail.iconColor,
      timer: 1500,
      width:'24em',
      toast:true,
      position:'top-end',
      showConfirmButton:false,
  });
})
    window.addEventListener('update', function(event){
      Swal.fire({
      title:event.detail.title,
      icon:event.detail.icon,
      iconColor:event.detail.iconColor,
      timer: 1500,
      width:'24em',
      toast:true,
      position:'top-end',
      showConfirmButton:false,
  });
})
    window.addEventListener('error', function(event){
      Swal.fire({
      title:event.detail.title,
      icon:event.detail.icon,
      iconColor:event.detail.iconColor,
      text:event.detail.text,
      timer: 3000,
      width:'24em',
      toast:true,
      position:'top-end',
      timerProgressBar:true,
      showConfirmButton:false,
  });
})
window.addEventListener('delete', (e)=>{
    Swal.fire({
    title: e.detail.title,
    text: e.detail.text,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        window.livewire.emit('destroy', e.detail.id);
    }
    })
})
window.addEventListener('truncate', (e)=>{
    Swal.fire({
    title: e.detail.title,
    text: e.detail.text,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete All'
    }).then((result) => {
    if (result.isConfirmed) {
        window.livewire.emit('truncate');
    }
    })
})
