    // function changeColor(){
    //     const formInput = document.querySelector('label');
    //     formInput.addEventListener('click',()=>{
    //         formInput.classList.add('bg-mainColor')
    //     })
    // }
    let langBtn = document.getElementById('langBtn');
    
    langBtn.addEventListener('click',()=>{
        let langMenu = document.getElementById('langMenu');
        langMenu.classList.toggle('hidden');
    })