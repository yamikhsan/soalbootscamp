function handShake(jum){
    if(typeof jum == "number"){
        let num = 0;
        for(let i=0; i<jum; i++){
            for(let j=0; j<i; j++){
                num ++;
            }
        }
        console.log(num);
    }
}

handShake(3);
handShake(6);