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
     <a href="" onclick="openPopUpmodelo()">Modelo</a>
      <a href="">Maderas</a>
      <a href="">Acabado</a>
      <a href="">Pastillas</a>
      <a href="">Componentes</a>
    </div>
        <!-- HTML para el menu PopUp-->
    <div id="popupmodelo_bg">
       <div id="popupmodelo_main_div">
           <p id="popupmodelo_title">Escoge un modelo de guitarra</p>
           <p id="popupmodelo_desc">//TODO Botones con imagenes de las distintas formas</p>
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
        var material = new THREE.MeshPhongMaterial( { color: 0xffaa00} );
        var material2 = new THREE.MeshPhongMaterial( { color: 0x00aaff} );

        var guitar;
        var outline;
        //Importar el modelo STL
        var loader = new THREE.STLLoader();
            loader.load( 'modelos/CUERPO.STL', function ( geometry ) {

                var guit = new THREE.Mesh( geometry,material );
                guit.scale.set(0.05, 0.05, 0.05);
                scene.add(guit);
                guit.position.set( 12, 10, 0);
                guit.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
                
                guit.callback = function(event){
                    //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                    openPopUpmodelo(event);
                }
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
                golpeador.position.set( 11.95, 4.778, 3);
                golpeador.rotation.set( THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
                golpeador.callback = function(event){
                    //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                    openPopUpmodelo(event);
                }
                /*
                //PARA MARCAR EL BORDE DEL OBJETO
                var outlineMaterial1 = new THREE.MeshBasicMaterial ({color: 0xffffff, side: THREE.BackSide});
                var outlineGolpeador = new THREE.Mesh (geometry,outlineMaterial1);
                //Hay que posicionar un poco distinto al objeto real, porque al hacer un poco mas grande
                //se expande fijando una esquina, ampliandose hacia el lado contrario
                outlineGolpeador.scale.set(0.051,0.051,0.051);
                outlineGolpeador.position.set(11.95+0.225,4.778+0.15,3);
                outlineGolpeador.rotation.set(THREE.Math.degToRad(90),THREE.Math.degToRad(-90), THREE.Math.degToRad(0));
                outlineGolpeador.material.transparent = true;
                
                golpeador.borde=outlineGolpeador;
                //scene.add(outlineGolpeador);
                //guitar=golpeador;
                */
            } );
        
        
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
