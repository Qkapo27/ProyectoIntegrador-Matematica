// Array
const frameworks = [
    {
        name:"Ábaco (500 A.C)", 
        description:"El ábaco fue el primer dispositivo utilizado para realizar operaciones aritméticas sencillas, como sumas, restas, divisiones y multiplicaciones. Su origen se remonta a la antigua Mesopotamia.",
        img:"Abaco.jpg"
    },
    {
        name:"Regla de Cálculo (1622)", 
        description:"La regla de cálculo fue un instrumento analógico que facilitó operaciones aritméticas complejas como multiplicaciones y divisiones. Fue una herramienta esencial antes de la llegada de las calculadoras electrónicas.",
        img:"Regla_Calculo.jpg"
    },
    {
        name:"Pascalina (1642)", 
        description:"La Pascalina, inventada por Blaise Pascal, fue la primera calculadora que funcionaba mediante ruedas y engranajes. Fue un precursor de las computadoras modernas.",
        img:"Pascalina.jpg"
    },
    {
        name:"Primera Computadora Digital (1834)", 
        description:'Se inventó la primera computadora digital programable que utilizaba tarjetas perforadas para contener instrucciones y datos.',
        img:"Primera_Digital.jpg"
    },
    {
        name:"Máquina Analógica (1930)", 
        description:"Las computadoras analógicas utilizaban niveles de tensión o presiones hidráulicas en lugar de datos numéricos. La regla de cálculo es un ejemplo de una computadora analógica sencilla.",
        img:"Analogica.jpg"
    },
    {
        name:"ENIAC (1945)", 
        description:"La ENIAC fue la primera computadora electrónica de propósito general. Fue diseñada para resolver problemas numéricos y se programaba mediante cables y conmutadores.",
        img:"Eniac.jpg"
    },
    {
        name:"UNIVAC (1951-1958):", 
        description:"UNIVAC fue la primera computadora comercial fabricada en Estados Unidos. Fue diseñada por J. Presper Eckert y John William Mauchly y donada a la Universidad de Harvard.",
        img:"Univac.jpg"
    },
    {
        name:"Segunda Generación de Computadoras (1959-1964)", 
        description:"Durante esta época, las computadoras se hicieron más rápidas, pequeñas y se utilizaron lenguajes de alto nivel. Se introdujo el transistor en lugar de las memorias de núcleos magnéticos.",
        img:"Segunda_Generacion.jpg"
    },
    {
        name:"Tercera Generación de Computadoras (1964-1971)", 
        description:"Las computadoras de esta generación se basaron en circuitos integrados, lo que las hizo más pequeñas, rápidas y eficientes. La IBM 360 fue un ejemplo de esta generación.",
        img:"Tercera_Generación.jpg"
    },
    {
        name:"Cuarta Generación de Computadoras (1971-1980)", 
        description:"Se introdujeron microprocesadores, chips de memoria y la microminiaturización. Esto llevó al desarrollo de computadoras personales y sistemas estandarizados como el MS-DOS.",
        img:"Cuarta_Generacion.jpg"
    },
    {
        name:"Quinta Generación de Computadoras (1980-1990)", 
        description:"Esta generación se caracterizó por la aplicación de la inteligencia artificial, sistemas expertos y redes neuronales. Se mejoró el almacenamiento de datos y se logró una mayor integración de componentes en los microprocesadores.",
        img:"Quinta_Generación.jpg"
    },
    {
        name:"Sexta Generación de Computadoras (1990 hasta la fecha)", 
        description:"Aunque la definición exacta de esta generación es menos clara, se ha visto una continua potenciación y mejora en la tecnología de las computadoras, incluyendo dispositivos portátiles y de pantalla táctil.",
        img:"Sexta_Generación.jpg"
    }
]

// render html
var html = "";
frameworks.forEach(e=>{
    html +="<div class='child'><div class='content'><h4>"+e.name+"</h4><img src='../../Public/Img/Assets/Ins/Evo/"+e.img+"' class='img-fluid rounded-start' alt='..'><p>"+e.description+"</p></div> </div>"
})
timeline.innerHTML = html

// ANIMACION TIMELINE

var _items = document.querySelectorAll(".child")
_items.forEach(element =>{
    if(element.offsetTop < 300)
        element.classList.add('_show')
})

window.addEventListener("scroll",e=>{
    var scroll = document.documentElement.scrollTop
    var items = document.querySelectorAll(".child")
    items.forEach(elem=>{
        if(elem.offsetTop - window.innerHeight/2 < scroll){
            elem.classList.remove('_hide')
            elem.classList.add('_show')
        }else{
            elem.classList.remove('_show')
            elem.classList.add('_hide')
        }

    })
})