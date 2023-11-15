// Array
const frameworks = [
    {
        name:"1838-1844", 
        description:"Samuel Morse y Alfred Vail desarrollan el código Morse y la primera máquina de telégrafo. Esto marca el inicio de la comunicación a larga distancia a través de señales telegráficas eléctricas."
    },
    {
        name:"1866", 
        description:"Cyrus Field completa el primer cable telegráfico transatlántico, permitiendo la comunicación telegráfica entre Europa y América del Norte."
    },
    {
        name:"1895", 
        description:"Guglielmo Marconi realiza experimentos exitosos en comunicación inalámbrica y desarrolla el sistema de telegrafía sin hilos. En 1896, establece la primera comunicación de radio a través del Canal de la Mancha."
    },
    {
        name:"1901", 
        description:'Marconi realiza la famosa transmisión de la letra "S" en código Morse desde Inglaterra a Terranova, marcando el hito en la comunicación a larga distancia sin cables.'
    },
    {
        name:"1920s", 
        description:"Se desarrollan las primeras emisoras de radio comerciales, lo que da inicio a la radiodifusión y la transmisión de voz y música de forma inalámbrica."
    },
    {
        name:"1940s-1950s", 
        description:"Se desarrollan las comunicaciones por microondas y se establecen redes de comunicación a larga distancia, lo que allana el camino para la comunicación de larga distancia en todo el mundo."
    },
    {
        name:"1960s-1970s", 
        description:"Se desarrollan las redes de comunicación de datos por paquetes, lo que lleva a la creación de ARPANET, el precursor de Internet."
    },
    {
        name:"1980s", 
        description:"Se introducen las redes celulares de primera generación (1G), permitiendo la comunicación móvil de voz."
    },
    {
        name:"1990s", 
        description:"La tecnología de segunda generación (2G) se convierte en el estándar para la telefonía móvil digital, lo que permite la mensajería de texto y el acceso a datos."
    },
    {
        name:"2000s", 
        description:"La tecnología de tercera generación (3G) habilita el acceso a Internet móvil y servicios avanzados de datos."
    },
    {
        name:"2010s", 
        description:"La tecnología de cuarta generación (4G) permite velocidades de datos mucho más rápidas y da lugar a la proliferación de aplicaciones y servicios móviles avanzados. "
    }
]

// render html
var html = "";
frameworks.forEach(e=>{
    html +="<div class='child'><div class='content'><h4>"+e.name+"</h4><p>"+e.description+"</p></div> </div>"
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