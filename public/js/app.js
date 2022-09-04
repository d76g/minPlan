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
            formContent.classList.toggle('invisible');
    })

//     function getElementId(){
//         const getElId = document.querySelector('button');
//         console.log(getElId.id);
//     }
    
//     const alcoholBtn = document.getElementById('alcoholBtn')
//     alcoholBtn.addEventListener('click',()=>{
//         alcoholBtn.classList.remove('bg-gray-200')
//         alcoholBtn.classList.add('bg-green-200')
//     })
//     const el = document.getElementsByTagName

        