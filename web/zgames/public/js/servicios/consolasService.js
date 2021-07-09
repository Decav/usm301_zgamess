//Operaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async(filtro ="todos")=>{
    let respuesta = await axios.get("api/consolas/get");
    if(filtro == "todos"){
        respuesta = await axios.get("api/consolas/get");

    }else{
        respuesta = await axios.get(`api/consolas/filtrar?filtro=${filtro}`);
    }
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

const eliminarConsola = async(id)=>{
    try{
        let respuesta = await axios.post("api/consolas/delete", {id},{
            headers:{
                'Content-Type': 'application/json'
            }
        })
        return respuesta.data == "ok";
    }catch(e){
        return false;
    }
    
}