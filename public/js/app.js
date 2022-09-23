
    // let openFormbtn = document.getElementById('formBtn');
    // let formContent = document.getElementById('formContent')

    // openFormbtn.addEventListener('click', ()=> {
        
    //     formContent.classList.remove('invisible');
    // })

    // let closeBtn = document.getElementById('closeFormBtn')
    // closeBtn?.addEventListener('click', ()=>{
    //         formContent.classList.toggle('invisible');
    // })
    function changeColor(){
        const formInput = document.querySelector('label');
        formInput.addEventListener('click',()=>{
            formInput.classList.add('bg-mainColor')
        })
    }
    
    
    
    
    // for (let index = 0; index < formInput.length; index++) {
    //     formInput.forEach(item =>{
    //         item.addEventListener('click',(e)=>{
    //             if(item.checked){
    //                 const inputLable = e.target.nextElementSibling.classList;
    //                 inputLable.toggle('bg-gray-100');
    //             }
    //         })
    //     })
    
    // }
    