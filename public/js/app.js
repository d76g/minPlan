    const formBtn = document.getElementById('formBtn');
    formBtn.addEventListener('click', ()=> {
        const formContent = document.getElementById('formContent')
        formContent.classList.remove('invisible');
    })

    const closeForm = document.getElementById('closeForm')
    closeForm.addEventListener('click', ()=>{
            const formContent = document.getElementById('formContent')
            formContent.classList.add('invisible');
    })

    const closeBtn = document.getElementById('closeFormBtn')
    closeBtn?.addEventListener('click', ()=>{
            const formContent = document.getElementById('formContent')
            formContent.classList.add('invisible');
    })
