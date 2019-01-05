let password = "Super$$4";

function cekPassword(pass){

    let spec = false;
    let num = false;
    let upper = false;
    let lower = false;

    if(pass.length === 8){

        const special = "!@#$%^&*()+=-_[]\\\';,./{}|\":<>?";
        const number = "0123456789";

        for(let x=0; x<pass.length; x++){
            if(special.indexOf(pass[x]) != -1){
                spec = true;
            }

            if(number.indexOf(pass[x]) != -1){
                num = true;
            } 

            if(pass[x] === pass[x].toUpperCase() && special.indexOf(pass[x]) == -1 && number.indexOf(pass[x]) == -1){
                upper = true;
            }

            if(pass[x] === pass[x].toLowerCase() && special.indexOf(pass[x]) == -1 && number.indexOf(pass[x]) == -1){
                lower = true;
            }
        }

        if(spec && num && upper && lower){
            console.log("Success");
        } else {
            if(!spec){
                console.log("Harus Ada Karakter Special!");
            }
            if(!num){
                console.log("Harus Ada Karakter Angka!");
            }
            if(!upper){
                console.log("Harus Ada Huruf Besar!");
            }
            if(!lower){
                console.log("Harus Ada Huruf Kecil!");
            }
        }

    } else {
        console.log("Harus ada 8 Karakter")
    }
}


console.log(cekPassword(password));