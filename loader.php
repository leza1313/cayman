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
    canvs.height = window.innerHeight*0.815;
}
</script>

<body onload="resizeCanvas();">
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
           <div id="closepopupmodelo" title="Cerrar" onclick="closePopUpmodelo()">
               <p id="closepopupmodelo_p">X</p>
           </div>
       </div> 
    </div>
<!-- JS para Menu PopUp-->
<script>
    var mypopup = document.getElementById("popupmodelo_bg");
    function openPopUpmodelo(){
        event.preventDefault();
        mypopup.style.display = "block";
    }
    function closePopUpmodelo(){
        event.preventDefault();
        mypopup.style.display = "none";
    }
</script>
    

    <?php include('navbar.html'); ?>
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

        camera.position.set( 40, 10, 40 );
        camera.rotation.set( 0, 45, 0 );
        
        THREEx.WindowResize(renderer,camera);

        scene.background = new THREE.Color( 0x72645b );
        
        //Añadir Luz
        
        var light = new THREE.PointLight( 0xffffff, 1, 0 );
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

        var guitar;
        var outline;
        //Importar el modelo STL
        var loader = new THREE.STLLoader();
            loader.load( 'js/tele2.STL', function ( geometry ) {

                var guit = new THREE.Mesh( geometry,material );
                guit.scale.set(0.05, 0.05, 0.05);
                scene.add(guit);
                guit.position.set( 0, 5, -10);
                guit.rotation.set( 0, 0, 150);
                guit.callback = function(){
                    //Muestra el desplegable para seleccionar distintas opciones de ese objeto
                    openPopUpmodelo();
                }
                //PARA MARCAR EL BORDE DEL OBJETO
                var outlineMaterial1 = new THREE.MeshBasicMaterial ({color: 0xffffff, side: THREE.BackSide});
                var outlineMesh1 = new THREE.Mesh (geometry,outlineMaterial1);
                //Hay que posicionar un poco distinto al objeto real, porque al hacer un poco mas grande
                //se expande fijando una esquina, ampliandose hacia el lado contrario
                outlineMesh1.position.set(-0.2,5,-10.2);
                outlineMesh1.rotation.set(0,0,150);
                outlineMesh1.scale.set(0.051,0.051,0.051);
                //scene.add(outlineMesh1);
                outline=outlineMesh1;
                guitar=guit;

            } );
        

        
        
        //Revisar esto, si lo quito hay que girar el modelo o la camara
        camera.position.z = 5;
        
        
        //Colorear el objeto que esta debajo del raton.
        {
        //Raycaster para seleccionar con el raton
        var raycaster = new THREE.Raycaster();
        var mouse = new THREE.Vector2();
        var INTERSECTED;
            
        function onDoubleClick( event ) {
            event.preventDefault();

            mouse.x = ( event.offsetX/ canvas.clientWidth ) * 2 - 1;
            mouse.y = - ( event.offsetY / canvas.clientHeight ) * 2 + 1;

            raycaster.setFromCamera( mouse, camera );

            var intersects = raycaster.intersectObjects( scene.children); 

            if ( intersects.length > 0 ) {

                intersects[0].object.callback();

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
            if (intersects.length>0){
                scene.add(outline);
            }else{
                scene.remove(outline);
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
        <?php include('footer.html');?>
</body>
</html>
