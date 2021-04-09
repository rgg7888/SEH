hola soy yo de nuevo , un completo desconocido 
compartiendo codigo en php.

solamente quiero mensionar si por alguna estraña
razon decides echarle un vistazo a este codigo 
y empiezas a probarlo hasta el momento te toparas 
con varias cosas por hacer 

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

&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

2- Los espacios 

en algunas etiquetas especifcamente hablando de la etiqueta img ,
hasta este punto es la unica etiqueta que recuerdo con la que he
tenido este inconveniente y es que en su atributo alt 
se le coloca una cadena de caracteres la cual puede contener espacios 

el problema es que el metodo createOpenTag utiliza la funcion implode 
para tomar al espacio como separador , entonces cuando usted 
le pase una cadena con espacios la funcion tomara todos y cada uno 
de esos espacios como una propiedad diferente lo cual se traducira a una 
descripcion imcompleta y probablemente le resulte en un error faltal.

por lo anterior al utilizar la etiqueta img le recomiendo reemplazar
los espacios de la cadena del atributo alt por guiones bajos u otro 
caracter que usted prefiera o bien implementar la descripcion con camelCase.

############################################################3

AHORA LO QUE USTED PUEDE CREAR CON "SEH"

son instancias de de etiquetas html , selectores, variables y propiedaades css, 
y tambien puede hacer llamadas http utilizando JsFuncMaker, una clase que implementa 
a el objeto "var xhttp = new XMLHttpRequest()" en su forma mas basica, por lo tanto 
no espere tener todo lo que necesita para su trabajo ya implementado , para eso tendra que 
implementar o utilizar otras librerias o frameworks usted mismo/a.

###########################

entre a el repo en github o al instalar seh con composer 
entre ala carpeta vendor y busque el archivo index.php que se encuentra ahi 
para ver la forma en la que se estructura una pagina web utilizando php.