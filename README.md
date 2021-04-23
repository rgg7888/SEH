AQUI INICIA LA EXPLICACION PASO A PASO :

primeramente la funcion doctype();
    esta funcion solo recibe como argumento la letra H,
    y es todo para definir el documento , despues de terminar
    este readme probablemente pasarle el argumento H deje de ser necesario.

    eso es todo no hay mas que explicar sobre esta funcion solo la llamas y listo.

la funcion html();
    esta funcion recibe un string y un arreglo por parametros

    html("string",[

    ]);

    el string se compone de dos partes atributo/valor
    en este caso el unico atributo disponible se representa con 
    la letra L por lang y el valor puede ser : es, en , etc. dependiendo
    del idioma del contenido de la pagina entonces quedaria asi :

    html("Les",[]);

    en este caso Les para indicar que el contenido sera en spanish

siempre al iniciar un proyecto las primeras dos funciones que llamaremos
seran doctype y html asi :

    doctype("H");
    html("Les",[]);

la funcion head() esta es la etiqueta en la que se definen
    estilos css, meta etiquetas como el viewport, charset, etc.
    y esta es la primer etiqueta que se define dentro del documento html
    y lo unico que debemos hacer es llamar a la funcion de la siguiente manera :

    head(null,[]);

    el primer parametro tiene que ser null porque esta estiqueta por lo regular no 
    se le suele agregar atributos , esta implementacion es temporal y puede cambiar
    sin previo aviso porque este projecto esta en desarrollo, y sometido a pruebas
    todos los dias por lo tanto aun no es un proyecto estable , lo que si es seguro
    es que en un momento a otro la implementacion no necesitara el paramentro null
    pero por el momento la funcion se agrega al documento de la siguiente forma :

    doctype("H");
    html("Les",[
        head(null,[])
    ]);

la funcion body() esta funcion es la siguiente en
    entrar dentro de html, esta funcion al igual
    que la funcion html recibe tambien un string y
    un arreglo, el estring representa igual un par 
    de elementos atributo/valor , para esta etiqueta
    tenemos disponibles los atributos C por class e I por id.

    alternativamente se le puede pasar null en caso de no 
    necesitar de estos atributos, entonces si queremos 
    simplemente el tag body sin atributos llamamos a la 
    funcion body asi : body(null,[]);

    la etiqueta body con una clase se define asi : body("CmyClass",[]);

    la etiqueta body con un id se define asi : body("ImyId",[]);

    tambien podemos agregarle ambos atributos asi : body("CmyClass ImyId",[]);

    el orden no importa asi que tambien seria valido esto body("ImyId CmyClass",[]);

    finalmente agregamos el body del documento asi:

    doctype("H");
    html("Les",[
        head(null,[]),
        body("",[])
    ]);
<pre>
las funciones div() address() title() hdr()
    main() section() footer() style() p()
    h1() h2() h3() h4() h5() h6() span() table()
    tr() td() th() thead() tbody() tfoot() b() article()
    ul() ol() li() form()
</pre>
    tienen los mismo atributos que body
    tambien reciben un arreglo por segundo
    parametro y se agregan al documento de la misma forma

la funcion a() es similar a las anteriores 
    pero esta etiqueta tiene una habilidad 
    especial , te permite enlazar documentos

    esta etiqueta tiene por atributos C por class
    I por id y H por href , el atributo href
    es en donde se le coloca el nombre o direccion
    del documento al que queremos acceder por ejemplo :

    supongamos que tenemos un archivo llamado index.php
    y tenemos otro archivo llamado info.php

    entonces como le hacemos para pasar de index.php
    a info.php con un click ?

    es sencillo , para hacer eso podemos llamar ala funcion a() dentro de index.php de esta manera :

    a("Hinfo.php","ir a informacion"); 

    como puedes notar en este caso le pasamos
    como argumento otro string en vez de un arreglo
    tambien puedes pasarle un arreglo ala etiqueta a()
    pero como solo necesite un texto no es necesario
    solo con pasarle el string con el texto que 
    queremos visualizar es suficiente

    las etiquetas mencionadas anteriormente a la funcion 
    a() tambien pueden recibir como argumento un string

la funcion button()
    esta funcion como su nombre sugiere nos sirve
    para crear botones, tiene el mismo funcionamiento
    y se llama igualmente como lo hemos hecho con 
    anterioridad, la diferencia que esta etiqueta 
    tiene a las anteriores es un par de atributos
    los cuales le permiten hacer funciones 
    especificas de un boton

    para los botones tenemos los aributos :

    C para class , I para id , T para type y 
    O para onclick

    existen mas atributos para todas las etiquetas
    html sin embargo yo te muestro las que utilizaras
    con mas frecuencia, el atributo type por ejemplo
    nos ayuda a definir el tipo de boton 

    (button|submit|reset)

    en cambio el atributo onclick hace referencia a un 
    evento, es decir cuando ocurra algo por ejemplo 
    que se le de click a un boton el atributo onclick
    sera igual al nombre de una funcion por lo regular
    escrita en javascript la cual ejecutara una serie de
    pasos cuando el evento click ocurra

    ejemplo de un boton :

    button("OhiFunction()","click me");

la etiqueta script()
    esta etiqueta tiene dos funciones pricipales
    nos permite escribir codigo javaScript en su interior
    o nos permite incluir un archivo con extension .js
    e incluirlo a nuestro documento html

    para llamar a un archivo externo se utiliza
    el atributo src de esta forma script("Sfile.js");

    o bien podemos omitir el atributo src y escribir
    codigo javascript dentro de la funcion script asi :

    script(null,"your js code here");

ahora hablemos sobre el objeto jfm();
    esta clase nace espesificamente para 
    reemplazar el contenido de una etiqueta html
    por otro utilizando ajax

    entonces para hacer lo anterior la implementacion
    quedaria de esta forma :

    $object = jfm();
    $object->httpObject("xhttp");
    $object->ors("xhttp",$object->si(
        "this.readyState == 4 && this.status == 200",
        $object->ihr("demo")
    ));
    $object->abrir("xhttp","GET","file.txt","true");
    $object->enviar();

#SELF CLOSING TAGS

POR EL MOMENTO HE IMPLEMENTADO ESTAS ETIQUETAS :

    img() meta() lk() input() hr()

    pero usted puede implementar las etiquetas que le hagan
    falta creando la clase correspondiente y heredando los 
    metodos de la clase Base , tome alguna de estas clases
    como referencia

    para ver los atributos de las etiquetas anteriores 
    entre ala carpeta src y seleccione la clase que 
    quiera estudiar

#SELECTORES Y VARIABLES CSS

    tenemos dos funciones mas
    la funcion vars() y la funcion sltr()

    para la funcion sltr() y sltr2() colocamos como primer
    arguento el selector css y como segundo parametro
    le pasamos las propiedades css mediante un arreglo

    para ver la lista de propiedades disponibles vaya a 
    la clase Selector y observe ahi la lista

    la funcion vars() recibe un arreglo del tipo key => value
    donde el key es el nombre de la variable y el value
    sera el valor que tomara esa variable.

#Media Queries 

    para crear media queries es muy sencillo con la funcion 
    mq() , primero le pasamos como primer argumento el tamaño
    minimo de la pantalla en la cual queremos aplicar los estilos 

    el segundo parametro le pasamos un arreglo con los selectores 
    y sus propiedades css

    *NOTA esta funcion solo aplica para min-width , en caso de querer
    utilizar max-width le recomiendo utilizar la funcion lk() para
    agregar un archivo css externo con las reglas que usted necesite

    example :

    mq("930",[
        sltr(//selector),
        unirStyles([
            sltr(//selector),
            sltr2(//selector)
        ])
    ]);

#PROPIEDADES CSS DISPONIBLES YA MISMO.
    #CLASS Selector :

        "0" => "box-sizing: ",
        "1" => "margin: ",
        "2" => "padding: ",
        "3" => "font-size: ",
        "4" => "font-family: ",
        "5" => "font-weight: ",
        "6" => "line-height: ",
        "7" => "color: ",
        "8" => "position: ",
        "9" => "display: ",
        "A" => "flex-direction: ",
        "B" => "justify-content: ",
        "C" => "width: ",
        "D" => "min-width: ",
        "E" => "height: ",
        "F" => "text-align: ",
        "G" => "margin-top: ",
        "H" => "align-self: ",
        "I" => "max-width: ",
        "J" => "background: ",
        "K" => "top: ",
        "L" => "background-color: ",
        "M" => "box-shadow: ",
        "N" => "border: ",
        "O" => "border-radius: ",
        "P" => "text-decoration: ",
        "Q" => "left: ",
        "R" => "margin-left: ",
        "S" => "background-image: ",
        "T" => "padding-top: ",
        "U" => "padding-bottom: ",
        "V" => "margin-bottom: ",
        "X" => "background-size: ",
        "Y" => "background-position: ",
        "Z" => "background-repeat: "

    #CLASS Sp2

        "0" => "scroll-snap-align: ",
        "1" => "vertical-align: ",
        "2" => "overflow-x: ",
        "3" => "overflow-y: ",
        "4" => "overflow: ",
        "5" => "overscroll-behavior-x: ",
        "6" => "scroll-snap-type: ",
        "7" => "scroll-snap-align: ",
        "8" => "align-items: ",
        "9" => "list-style: ",
        "A" => "flex-wrap: ",
        "B" => "transition: ",
        "C" => "available spot: ",
        "D" => "available spot: ",
        "E" => "available spot: ",
        "F" => "available spot: ",
        "G" => "available spot: ",
        "H" => "available spot: ",
        "I" => "available spot: ",
        "J" => "available spot: ",
        "K" => "available spot: ",
        "L" => "available spot: ",
        "M" => "available spot: ",
        "N" => "available spot: ",
        "O" => "available spot: ",
        "P" => "available spot: ",
        "Q" => "available spot: ",
        "R" => "available spot: ",
        "S" => "available spot: ",
        "T" => "available spot: ",
        "U" => "available spot: ",
        "V" => "available spot: ",
        "X" => "available spot: ",
        "Y" => "available spot: ",
        "Z" => "available spot: "

#CONEXION A UNA BASE DE DATOS

    hoy 4/14/2021 , tenemos dos funciones para conectarnos a una base de datos
    la primera es mysqli() y la segunda es pdo()

    estas funciones retornan el objeto de la conexion para despues de conectarnos
    poder trabajar con las consultas o lo que necesitemos hacer con la base de datos.

    mysqli() recibe como argumentos : nombre del servidor, nombre de usuario y contraseña

    pdo() recibe como argumentos : nombre del servidor, nombre de la base de datos, nombre de usuario y contraseña 

#CREATE A DATA BASE

    Para crear una base de datos tenemos los metodos 

    createDbM() y createDbP(), el primero para crear una data base
    utilizando mysqli() y el segundo utilizando pdo()

    al igual que los metodos anteriores le pasamos por argumento los datos de 
    conexion y el nombre de la base de datos que queremos crear, el orden es el 
    siguiente : "server","username","password","dataBaseName"

#A TOMAR EN CUENTA

    1- Aun no tiene todas las propiedades css implementadas

##################################

    la razon de esto es que en la clase selector tenemos una 
    lista limitada la cual puede ir aumentando segun tus necesidades.

    pero existe otro detalle en el metodo walkArray()
    en este metodo seleccionamos la primer letra de una cadena
    en base a esa letra es como se define la propiedad css,

    pero conforme vayas agregando mas propiedades notaras que 
    los digitos del 0-9 mas las letras del alfabeto en mayusculas
    no es suficiente para representar todas las propiedades con una 
    sola letra por propiedad sin repetir.

###################################

    las posibles soluciones que se me ocurren son las siguientes:
    1- puedes agregar letras en minuscula la cual te da un tamaño
    del doble del alfabeto para seguir agregando mas propiedades.

    incluso puedes cambiar la distibucion de tu teclado pero eso 
    seria no muy productivo.

    2- puedes crear otro metodo que recorra la cadena y tome 
    mas de una letra segun la propiedad pero eso seria otra implementacion
    y tendrias que modificar el metodo walkArray por completo

    3- la opcion que estoy considerando y creo que seria la mas ideal
    implementar seria que cuando llegues al limite del alfabeto crear una 
    nueva clase que herede los metodos de la clase anterior y sobre escribir 
    la lista para nuevas propiedades.

&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

    2- Los espacios 

    en algunas etiquetas espesificamente hablando de la etiqueta img() ,
    hasta este punto es la unica etiqueta que recuerdo con la que he
    tenido este inconveniente y es que en su atributo alt 
    se le coloca una cadena de caracteres la cual puede contener espacios 

    el problema es que el metodo createOpenTag() utiliza la funcion implode() 
    para tomar al espacio como separador , entonces cuando usted 
    le pase una cadena con espacios la funcion tomara todos y cada uno 
    de esos espacios como una propiedad diferente lo cual se traducira a una 
    descripcion imcompleta y probablemente le resulte en un error faltal.

    por lo anterior al utilizar la etiqueta img le recomiendo reemplazar
    los espacios de la cadena del atributo alt por guiones bajos u otro 
    caracter que usted prefiera o bien implementar la descripcion con camelCase.

######### Parches #########

    4/11/2021 :

    si quiere mantener los espacios en alguna descripcion o es muy necesario
    tener espacios en alguna propiedad como puede darse el caso en el atributo rel="shortcut icon"

    puede utilizar el parche , con la funcion cls()
    primeramente tendra que reemplazar el espacio con un _ asi :
    lk("Rshortcut_icon");
    y la funcion lk tendra que encerrarla dentro de la funcion cls()
    de esta forma : cls(lk("Rshortcut_icon")); asi al imprimirse
    los _ se reemplazaran de nuevo con espacios.


@@@@@@@@@@ VERSION 0.0.2 @@@@@@@@

esta version estara enfocada a el manejo de peticiones y refinamiento de los 
detalles de lectura y creacion de las etiquetas html asi como tambien el 
mejoramiento en la implementacion de css.

por el momento esta rama seh-v0.0.2 iniciara con la clase TagAjax

y los helpers doctype () y dt () que practicamente son lo mismo 
sirven para imprimir el <\!DOCTYPE html> de la pagina , la razon
por la cual implemente dos helper es para tener la posibilidad de 
que exista un forma corta y una mas descriptiva de lo que se esta haciendo

cambio del orden de los argumentos , esta version tomara como segundo
argumento los atributos para de este modo evitar el valor null en cada
llamada a ala etiqueta x en caso que esta no necesite de argumentos

en esta version tendremos disponibles para la etiqueta html ,
los helpers html() y emptyHtml() , la diferencia entre ambas
se puede notar si pensamos por ejemplo en visualizar :

<pre>
1- &lt;html&gt;&lt;/html&gt;
2- &lt;html lang="en"&gt;&lt;/html&gt;
</pre>

por ejemplo.

para el primer caso con la funcion html() se hace asi :

    html ();

para el segundo caso con la funcion html() se hace asi :

    html (null,'len');

para el primer caso con la funcion emptyHtml() se hace asi :

    emptyHtml ();

para el segundo caso con la funcion emptyHtml() se hace asi :

    emptyHtml ('en');

si presta atencion las ventajas de una versus de otra dependeran
de la situacion concluyendo que realmente no existe una funcion
mejor que otra simplemente existen diferentes casos de uso.

retomando lo anterior la etiqueta html ahora podra ser representada
por la funcion ldmh() las letras provienen de la traduccion
de Hypertext Markup Language (html) , Lenguaje de marcado de hipertexto (lmh)

y esta es la funcion mas poderosa que existe hasta el momento cuando de crear 
a la etiqueta html se refiere.

las razones por la cual es la funcion mas poderosa de seh 
es que est&aacute; dividida en modulos que en conjunto le permitiran 
crear cualquier variante de la etiqueta html incluso le notificara
amablemente que est&aacute; cometiendo un error, si por algun motivo los argumentos
que esta funcion recibe no coincidan con ninguna condicion para ensamblar
la pieza.

para cualquier otra tag use lmh().