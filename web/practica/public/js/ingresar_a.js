const cargarMarca = async()=>{ //cómo se espera una respuesta, se utiliza async
    let resultado = await axios.get("api/marca/get");
    let marca = resultado.data;
    let marcaSelect = document.querySelector("#marca-select");
    marca.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
}
cargarMarca();
