// For Rope Button
let rope = document.querySelector('#rope')
if(sessionStorage.getItem('ropebgColor') == null){
    rope.classList = rope.classList;
}
else {
    rope.classList = sessionStorage.getItem('ropebgColor')
}

rope.addEventListener('click', ()=>{
     rope.classList.toggle('bg-gray-200')
     rope.classList.toggle('bg-gray-300')
    sessionStorage.setItem('ropebgColor', rope.classList)
})
// Med Button
let med = document.querySelector('#med')
if(sessionStorage.getItem('medbgColor') == null){
    med.classList = med.classList;
}
else {
    med.classList = sessionStorage.getItem('medbgColor')
}

med.addEventListener('click', ()=>{
    med.classList.toggle('bg-gray-200')
    med.classList.toggle('bg-gray-300')
    sessionStorage.setItem('medbgColor', med.classList)
})
// sharp Button
let sharp = document.querySelector('#sharp')
if(sessionStorage.getItem('sharpbgColor') == null){
    sharp.classList = sharp.classList;
}
else {
    sharp.classList = sessionStorage.getItem('sharpbgColor')
}
sharp.addEventListener('click', ()=>{
    sharp.classList.toggle('bg-gray-200')
    sharp.classList.toggle('bg-gray-300')
    sessionStorage.setItem('sharpbgColor', sharp.classList)
})
// Alcohol Button
let alcohol = document.querySelector('#alcohol')
if(sessionStorage.getItem('alcoholbgColor') == null){
    alcohol.classList = alcohol.classList;
}
else {
    alcohol.classList = sessionStorage.getItem('alcoholbgColor')
}
alcohol.addEventListener('click', ()=>{
    alcohol.classList.toggle('bg-gray-200')
    alcohol.classList.toggle('bg-gray-300')
    sessionStorage.setItem('alcoholbgColor', alcohol.classList)
})
// Razor Button
let razor = document.querySelector('#razor')
if(sessionStorage.getItem('razorbgColor') == null){
    razor.classList = razor.classList;
}
else {
    razor.classList = sessionStorage.getItem('razorbgColor')
}
razor.addEventListener('click', ()=>{
    razor.classList.toggle('bg-gray-200')
    razor.classList.toggle('bg-gray-300')
    sessionStorage.setItem('razorbgColor', razor.classList)
})
// Firearms button
let firearms = document.querySelector('#firearms')
if(sessionStorage.getItem('firearmsbgColor') == null){
    firearms.classList = firearms.classList;
}
else {
    firearms.classList = sessionStorage.getItem('firearmsbgColor')
}
firearms.addEventListener('click', ()=>{
    firearms.classList.toggle('bg-gray-200')
    firearms.classList.toggle('bg-gray-300')
    sessionStorage.setItem('firearmsbgColor', firearms.classList)
})