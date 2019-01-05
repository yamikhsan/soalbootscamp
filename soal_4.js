function mesinKembalian(totalBelanja, uangDimasukan){
    if(typeof totalBelanja == "number" && typeof uangDimasukan == "number"){
        let kembalian = uangDimasukan - totalBelanja;
        let angka = [50000, 20000, 10000, 5000, 2000, 1000, 500];

        for(let x=0; x<angka.length; x++){
            if(kembalian >= angka[x]){
                let uang = Math.floor(kembalian/angka[x]);
                kembalian = kembalian%angka[x];
                console.log("- "+ uang +" lembar "+ angka[x]);
            }
        }

    }
}

mesinKembalian()