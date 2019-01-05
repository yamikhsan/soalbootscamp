function biodata(){
    
    let bio = {};
    bio.name = "Yahya Maulana Ikhsan";
    bio.address = "Jl Kh Mas Mansyur kel. Sudimara Pinang, Pinang Tangereng";
    bio.hobbies = ["Progamming", "Soccer", "Game"];
    bio.school = {
        sd : "SDN Bojong 03",
        smp : "SMPN 10 Tangerang",
        sma : "SMAN 10 Tangerang"
    };
    bio.skills = [
        { web : "javascript"},
        { mobile : "java"}
    ];

    return JSON.stringify(bio);

};

let data = biodata();

console.log(data);