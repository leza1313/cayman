<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styleloader.css">
<link rel="stylesheet" href="css/stylepopup.css">
<title>Taller Custom</title>
</head>
<script>
function resizeCanvas() {
    var canvs = document.getElementById("mycanvas");
    canvs.width = window.innerWidth*0.815;
    canvs.height = window.innerHeight*0.935;
}
</script>

<body onload="resizeCanvas();">
  <!-- Html para el menu de la izquierda-->
   <div class="sidenav">
     <a href="" onclick="openPopUpmodelo(event)">Modelo</a>
      <a href="">Maderas</a>
      <a href="">Acabado</a>
      <a href="">Pastillas</a>
      <a href="">Componentes</a>
    </div>
        <!-- HTML para el menu PopUpmodelo-->
    <div id="popupmodelo_bg">
       <div id="popupmodelo_main_div">
           <p id="popupmodelo_title">Escoge un modelo de guitarra</p>
           <p id="popupmodelo_desc">//TODO Botones con imagenes de las distintas formas</p>
           <a href="" onclick="cambiarModelo(event,'guitarobj','modelos/tele2.STL')"><img src="img/logo.png" alt="" height="200" width="200"></a>
           <a href="" onclick="cambiarModelo(event,'guitarobj','modelos/CUERPO.STL')"><img src="img/sg-azul.jpg" alt="" height="200" width="200"></a>
           <div id="closepopupmodelo" title="Cerrar" onclick="closePopUpmodelo(event)">
               <p id="closepopupmodelo_p">X</p>
           </div>
       </div> 
    </div>
<!-- JS para Menu PopUp-->
<script>
    var mypopup = document.getElementById("popupmodelo_bg");
    function openPopUpmodelo(event){
        event.preventDefault();
        mypopup.style.display = "block";
    }
    function closePopUpmodelo(event){
        event.preventDefault();
        mypopup.style.display = "none";
    }
</script>
    

    <?php include('templates/navbar.html'); ?>
    <canvas id="mycanvas"></canvas>
    
    <script src="js/THREEx.WindowResize.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script src="js/STLLoader.js"></script>
	<script>
        resizeCanvas();
        var canvas = document.getElementById('mycanvas');
        
        var renderer = new THREE.WebGLRenderer({canvas: canvas});
        renderer.setViewport(0, 0, canvas.clientWidth, canvas.clientHeight);
        renderer.setSize( canvas.clientWidth, canvas.clientHeight );
        document.body.appendChild( renderer.domElement );
        
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 50, canvas.clientWidth/canvas.clientHeight, 0.01, 1000 );

        //camera.position.set( 40, 10, 40 );
        //camera.rotation.set( 0, 45, 0 );
        camera.position.set( 0, 0, 40 );
        camera.rotation.set( 0, 0, 0 );
        
        THREEx.WindowResize(renderer,camera);

        scene.background = new THREE.Color( 0x72645b );
        
        //Añadir Luz
        
        var light = new THREE.PointLight( 0xffffff, 0.85, 0 );
        light.position.copy( camera.position );
        light.castShadow = true;
        scene.add( light );
        
        //Set up shadow properties for the light
        light.shadow.mapSize.width = 512;  // default
        light.shadow.mapSize.height = 512; // default
        light.shadow.camera.near = 0.5;       // default
        light.shadow.camera.far = 500      // default
        
        controls = new THREE.OrbitControls(camera);
        controls.rotateSpeed = 0.5;
        controls.enableDamping = true;
        controls.dampingFactor = 0.25;
        controls.enableZoom = true;
        
        //Luz que se fije con la camara, como si la luz seguiria siempre en donde la camara mira
        controls.addEventListener( 'change', light_update );

        function light_update()
        {
            light.position.copy( camera.position );
        }

        //Material del modelo 3D
        var material1 = new THREE.MeshPhongMaterial( { color: 0xffaa00} );
        var material2 = new THREE.MeshPhongMaterial( { color: 0x00aaff} );
        var material3 = new THREE.MeshPhongMaterial( { color: 0x00ff6c} );
        var material4 = new THREE.MeshPhongMaterial( { color: 0xd8ff00} );
        var material5 = new THREE.MeshPhongMaterial( { color: 0x588600} );
        var material6 = new THREE.MeshPhongMaterial( { color: 0x001cf7} );
        var material7 = new THREE.MeshPhongMaterial( { color: 0xa900f4} );
        var material8 = new THREE.MeshPhongMaterial( { color: 0xf400e1} );
        var material9 = new THREE.MeshPhongMaterial( { color: 0xf40067} );

        var guitarobj,golpeadorobj,mastilobj,pastilla_mastilobj,pastilla_medioobj,pastilla_puenteobj,puenteobj,tono_1obj,tono_2obj,volumenobj;
        //Importar el modelo STL
        var loader = new THREE.STLLoader();
        loader.load( 'modelos/CUERPO.STL', function ( geometry ) {

            var guit = new THREE.Mesh( geometry,material1 );
            guit.scale.set(0.05, 0.05, 0.05);
            scene.add(guit);
            guit.position.set( 5, 10, 0);
            guit.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));

            guit.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            guit.borrar = function (){
                scene.remove(guit);
            }
            guitarobj = guit;
            /*
            //PARA MARCAR EL BORDE DEL OBJETO, crear otro objeto un poco mas grande. Problemas con el raycaster
            var outlineMaterial1 = new THREE.MeshBasicMaterial ({color: 0xffffff, side: THREE.BackSide});
            var outlineGuit = new THREE.Mesh (geometry,outlineMaterial1);
            //Hay que posicionar un poco distinto al objeto real, porque al hacer un poco mas grande
            //se expande fijando una esquina, ampliandose hacia el lado contrario
            outlineGuit.scale.set(0.051,0.051,0.051);
            outlineGuit.position.set( 12.3, 10.15, 0);
            outlineGuit.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            outlineGuit.material.transparent = true;
            guit.borde=outlineGuit;
            //scene.add(guit.borde);
            //guitar=guit;
            */
        } );
        loader.load( 'modelos/GOLPEADOR.STL', function ( geometry ) {

            var golpeador = new THREE.Mesh( geometry,material2 );
            golpeador.scale.set(0.05, 0.05, 0.05);
            //golpeador.material.transparent = true;
            scene.add(golpeador);
            golpeador.position.set( 4.95, 4.778, 3);
            golpeador.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            golpeador.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            golpeador.borrar = function (){
                scene.remove(golpeador);
            }
            golpeadorobj = golpeador;
        } );
        loader.load( 'modelos/MASTIL.STL', function ( geometry ) {
            
            var mastil = new THREE.Mesh( geometry,material3 );
            mastil.scale.set(0.05, 0.05, 0.05);
            //mastil.material.transparent = true;
            scene.add(mastil);
            mastil.position.set( 30.8, 2.88, 2.09);
            mastil.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            mastil.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            mastil.borrar = function (){
                scene.remove(mastil);
            }
            mastilobj = mastil;
        } );
        loader.load( 'modelos/PASTILLA_MASTIL.STL', function ( geometry ) {
            
            var pastilla_mastil = new THREE.Mesh( geometry,material4 );
            pastilla_mastil.scale.set(0.05, 0.05, 0.05);
            //pastilla_mastil.material.transparent = true;
            scene.add(pastilla_mastil);
            pastilla_mastil.position.set( 4.9,3.2, 2.65);
            pastilla_mastil.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            pastilla_mastil.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            pastilla_mastil.borrar = function (){
                scene.remove(pastilla_mastil);
            }
            pastilla_mastilobj = pastilla_mastil;
        } );
        loader.load( 'modelos/PASTILLA_MEDIO.STL', function ( geometry ) {
            
            var pastilla_medio = new THREE.Mesh( geometry,material5 );
            pastilla_medio.scale.set(0.05, 0.05, 0.05);
            //pastilla_medio.material.transparent = true;
            scene.add(pastilla_medio);
            pastilla_medio.position.set( 4.9,3.2, 2.65);
            pastilla_medio.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            pastilla_medio.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            pastilla_medio.borrar = function (){
                scene.remove(pastilla_medio);
            }
            pastilla_medioobj = pastilla_medio;
        } );
        loader.load( 'modelos/PASTILLA_PUENTE.STL', function ( geometry ) {
            
            var pastilla_puente = new THREE.Mesh( geometry,material6 );
            pastilla_puente.scale.set(0.05, 0.05, 0.05);
            //pastilla_puente.material.transparent = true;
            scene.add(pastilla_puente);
            pastilla_puente.position.set( 4.9,3.2, 2.65);
            pastilla_puente.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            pastilla_puente.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            pastilla_puente.borrar = function (){
                scene.remove(pastilla_puente);
            }
            pastilla_puenteobj = pastilla_puente;
        } );
        loader.load( 'modelos/PUENTE.STL', function ( geometry ) {
            
            var puente = new THREE.Mesh( geometry,material7 );
            puente.scale.set(0.05, 0.05, 0.05);
            //puente.material.transparent = true;
            scene.add(puente);
            puente.position.set( 5,3.1, 0.97);
            puente.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            puente.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            puente.borrar = function (){
                scene.remove(puente);
            }
            puenteobj = puente;
        } );
        loader.load( 'modelos/TONO_1.STL', function ( geometry ) {
            
            var tono_1 = new THREE.Mesh( geometry,material8 );
            tono_1.scale.set(0.05, 0.05, 0.05);
            //tono_1.material.transparent = true;
            scene.add(tono_1);
            tono_1.position.set( 4.943,-1.033, 3.067);
            tono_1.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            tono_1.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            tono_1.borrar = function (){
                scene.remove(tono_1);
            }
            tono_1obj = tono_1;
        } );
        loader.load( 'modelos/TONO_2.STL', function ( geometry ) {
            
            var tono_2 = new THREE.Mesh( geometry,material9 );
            tono_2.scale.set(0.05, 0.05, 0.05);
            //tono_2.material.transparent = true;
            scene.add(tono_2);
            tono_2.position.set( 4.943,-1.033, 3.067);
            tono_2.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            tono_2.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            tono_2.borrar = function (){
                scene.remove(tono_2);
            }
            tono_2obj = tono_2;
        } );
        loader.load( 'modelos/VOLUMEN.STL', function ( geometry ) {
            
            var volumen = new THREE.Mesh( geometry,material9 );
            volumen.scale.set(0.05, 0.05, 0.05);
            //volumen.material.transparent = true;
            scene.add(volumen);
            volumen.position.set( 4.943,-1.033, 3.067);
            volumen.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
            volumen.callback = function(event){
                //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                openPopUpmodelo(event);
            }
            volumen.borrar = function (){
                scene.remove(volumen);
            }
            volumenobj = volumen;
        } );
       
       
        
        function cambiarModelo(event,antiguo,nuevo){
            event.preventDefault();
            scene.remove(antiguo);
            loader.load(nuevo,function( geometry ){
                var cambio = new THREE.Mesh( geometry,material1 );
                cambio.scale.set(0.05,0.05,0.05);
                cambio.position.set(5,10,0);
                cambio.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
                scene.add(cambio);
                closePopUpmodelo(event);
                guitarobj.borrar();
                cambio.callback = function(event){
                    //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                    openPopUpmodelo(event);
                }
                cambio.borrar = function (){
                    scene.remove(cambio);
                }
                guitarobj = cambio;
            });
            
        }
        //Colorear el objeto que esta debajo del raton.
        {
        //Raycaster para seleccionar con el raton
        var raycaster = new THREE.Raycaster();
        var mouse = new THREE.Vector2();
        var INTERSECTED,INTERSECTEDOUTLINE;
            
        function onDoubleClick( event ) {
            event.preventDefault();

            mouse.x = ( event.offsetX/ canvas.clientWidth ) * 2 - 1;
            mouse.y = - ( event.offsetY / canvas.clientHeight ) * 2 + 1;

            raycaster.setFromCamera( mouse, camera );

            var intersects = raycaster.intersectObjects( scene.children); 

            if ( intersects.length > 0 ) {

                intersects[0].object.callback(event);

            }

        }

        function onMouseMove( event ) {
            // calculate mouse position in normalized device coordinates
            // (-1 to +1) for both components
            event.preventDefault();
            
            mouse.x = ( event.offsetX / canvas.clientWidth) * 2 - 1;
            mouse.y = - ( event.offsetY / canvas.clientHeight ) * 2 + 1;

        }
        
        function render() {
            // update the picking ray with the camera and mouse position
            raycaster.setFromCamera( mouse, camera );
            // calculate objects intersecting the picking ray
            var intersects = raycaster.intersectObjects( scene.children );
            
            //Si no hay objetos encontrados, se ultimo objeto se vuelve al color de antes
            //Si hay alguno, el que mas cerca este [0], si es el mismo que antes no se hace nada
            //Si no es el mismo que antes, se pone el objeto anterior con su color original.
            // Despues se guarda el color del nuevo objeto encontrado. Y se pinta del color para ver que esta SELECCIONADO
            
            //Esto cambia la opacidad de los objetos encontrados. Problema que para hacer el borde, creo otro objeto
            //Asi que en la interseccion al elegir el segundo objeto encontrado no siempre coje el borde
            /*if (intersects.length>0){
                if(intersects[0]!=INTERSECTED){
                    if (INTERSECTED){
                        INTERSECTED.material.opacity = (0);
                    }
                    
                    INTERSECTED=intersects[0].object;
                    if (intersects.length>1){
                        INTERSECTEDOUTLINE=intersects[1].object;    
                    }
                    
                    //scene.add(INTERSECTED.borde);
                    
                    INTERSECTEDOUTLINE.material.opacity = (1);
                }
            }else{
                if(INTERSECTED){
                    //scene.remove(INTERSECTED.borde);
                    INTERSECTEDOUTLINE.material.opacity = (0);
                }
                INTERSECTED=null;
            }*/
            
            //Se ilumina el objeto Seleccionado
            if ( intersects.length > 0 ) {
                if ( INTERSECTED != intersects[ 0 ].object ) {
                    if ( INTERSECTED ) INTERSECTED.material.emissive.setHex( INTERSECTED.currentHex );
                    INTERSECTED = intersects[ 0 ].object;
                    INTERSECTED.currentHex = INTERSECTED.material.emissive.getHex();
                    INTERSECTED.material.emissive.setHex( 0x333333 );
                }
            } else {
                if ( INTERSECTED ) INTERSECTED.material.emissive.setHex( INTERSECTED.currentHex );
                INTERSECTED = null;
            }

            
            
            
            

            renderer.render( scene, camera );
        }

        window.addEventListener( 'mousemove', onMouseMove, false );
        renderer.domElement.ondblclick=onDoubleClick;
        //window.addEventListener( 'mousedown', onDocumentMouseDown, false );
        window.requestAnimationFrame(render);
            
        }


        var animate = function () {
            resizeCanvas();
            requestAnimationFrame( animate );
            controls.update();

            renderer.render(scene, camera);
            render();
        };

        animate();
    </script>
        <script src="js/jquery-3.2.1.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>
        <?php //include('templates/footer.html');?>
</body>
</html>
