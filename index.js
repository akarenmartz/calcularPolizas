const polizaCmb=document.querySelector('#poliza');
const btnCalcular=document.querySelector('#btn-calcular');
document.addEventListener('DOMContentLoaded',validarCampos());

function validarCampos() {
    if (polizaCmb.value=='seleccione') {
        console.log('sin seleccionar');
        btnCalcular.disabled=true;
        btnCalcular.style.opacity=0.5;
    }

    polizaCmb.addEventListener('change',()=>{
        console.log(polizaCmb.value);
        if (polizaCmb.value!='seleccione'){
            btnCalcular.disabled=false;
        btnCalcular.style.opacity=1;
        }
    })
}