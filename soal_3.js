function drawLine(num){
    if(typeof num === "number"){    
        for(let i=0; i<num; i++){
            let s = "";
            for(let j=0; j<i; j++){
                if(j === (i-1)){
                    s += "*";
                } else {
                    s += " ";
                }
            }
            console.log(s);
        }
    }
}

drawLine(8);