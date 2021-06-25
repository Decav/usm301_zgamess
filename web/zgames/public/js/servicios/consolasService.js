//Operaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async()=>{
    let respuesta = await axios.get("api/consolas/get");
    return respuesta.data;

};

//crearConsolas
const crearConsolas = async(consola)=>{
    console.log(consola);
    let respuesta = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};

