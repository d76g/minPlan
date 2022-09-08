
    let openFormbtn = document.getElementById('formBtn');
    let formContent = document.getElementById('formContent')

    openFormbtn.addEventListener('click', ()=> {
        
        formContent.classList.remove('invisible');
    })

    let closeBtn = document.getElementById('closeFormBtn')
    closeBtn?.addEventListener('click', ()=>{
            formContent.classList.toggle('invisible');
    })

    const formInput = document.querySelectorAll('input');
    
    formInput.forEach(item =>{
        item.addEventListener('click',(e)=>{
            
            if(item.checked == true){
                const inputLable = e.target.nextElementSibling.classList;
                inputLable.toggle('bg-gray-100');}
            // e.preventDefault();
        })
    })

    