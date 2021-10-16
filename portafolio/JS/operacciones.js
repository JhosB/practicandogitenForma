function llenarVector(vector, tam){
    for (let i = 0; i < tam; i++) {
        vector.push(Math.round(Math.random()*11));
    }
    return vector;
}

let vec=new Array();

let x=5;

document.write(llenarVector(vec,x));

document.write(vec[0]);

//hoisting

var sumaVector=(vector)=>{

    let suma=0;

    for (let i = 0; i < vector.length; i++) {
            suma += vec[i];
    }
    return suma;
}

document.write('<br>la suma del vector es..' +sumaVector(vec));

var promedioVector=(vector)=>{

    let suma=0;
    let prom=0;

    for (let i = 0; i < vector.length; i++) {
            suma += vec[i];
            prom = suma / vector.length;
    }
    return prom;
}

document.write('<br>el promedio del vector es..'+promedioVector(vec));

var nMayorVector=(vector)=>{

    let mayor=0;

    for (let i = 0; i < vector.length; i++) {
        mayor=Math.max(...vec);
    }
    return mayor;
}

document.write('<br>el numero mayor del vector es..'+nMayorVector(vec));

var nMenorVector=(vector)=>{

    let menor=0;

    for (let i = 0; i < vector.length; i++) {
        menor=Math.min(...vec);
    }
    return menor;
}

document.write('<br>el numero menor del vector es..'+nMenorVector(vec));

var MedianaVector=(vector)=>{

    let l=0;

    for (let i = 0; i < vector.length; i++) {
        
    if(vector.length%2 === 0){
                index = vec.length/2; 
                let valor1 = vec[index];
                let valor2 = vec[index-1];
                mediana = (valor1 + valor2)/2;
            }else{
                index = vec.length/2; 
                index = Math.floor(index);
                mediana = vec[index];
            }
            return mediana;
    } 

}

document.write('<br>la mediana del vector es..'+MedianaVector(vec));