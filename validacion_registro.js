let email = document.getElementById('email')
let pass = document.getElementById('pass')
let rfc = document.getElementById('rfc')

// let emailOK = regExp.test(email);
let btn = document.getElementById('button')

// btn.addEventListener('click', (event)=>{
//     event.preventDefault()
//     validarEmail(email.value)
//     // validarPass(pass.value)
//     validarRFC(rfc.value)
// })
function verificar(){
    // validarEmail(email.value)
    // validarPass(pass.value)

    let regExp = /^[A-Z]{4}([0-9]{6})\w{3}$/gm
    console.log(rfc.value);
    console.log(regExp.test(rfc.value));
    // // if(regExp.test(rfc)==false){
    // //     return false;
    // // }
    if(regExp.test(rfc.value)==true){
        console.log('Aki');
        return true;

    }


} 
function validarRFC(rfc){ 
    let regExp = /^[A-Z]{4}([0-9]{6})\w{3}$/gm
      
    console.log(rfc)
    console.log(regExp.test(rfc))
    if(!regExp.test(rfc)){
        return fal;
    }else{
        return false;
    }
}

function validarEmail(email){   
    let regExp = /^(l)((m|c)?[0-9]{2}(120|121)[0-9]{3})(@morelia.tecnm.mx)$/gm
    console.log(email)
    console.log(regExp.test(email))
}

function validarPass(pass){   
    let regExp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm  
    console.log(pass)
    console.log(regExp.test(pass))
}



