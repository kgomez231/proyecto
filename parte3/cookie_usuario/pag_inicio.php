<!DOCTYPE html>
<html lang="en">

<head>
    <title>El blog de flores</title>
   <link rel="stylesheet" href="css/index.css">
</head>

<body>
<?php

if(isset($_POST["enviar"])){

    try {
            $base=new PDO("mysql:host=localhost;dbname=datos", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM datos_usuario WHERE usuario= :login AND PASSWORD= :password";
            $resultado=$base->prepare($sql);
            $login=htmlentities(addslashes($_POST["correo"]));
            $password=htmlentities(addslashes($_POST["password"]));
            $resultado->bindValue(":login",$login);
            $resultado->bindValue(":password",$password);
            $resultado->execute();
            $numero_registro=$resultado->rowCount();
            //validar que la consulta fue exitosaen caso "true" activar una sesion para ese usuario
            if($numero_registro!=0){
                //iniciar la sesion del usuario
                session_start();
                $_SESSION["usuario"]=$_POST["correo"];
                //header("Location: pag_inicio.php");
            }else{
                //header("Location: form_acceso.php");
                echo"LOS DATOS DE USUARIO SON INCORRECTOS";
            }

    }//validando si el servidor no conecta le saldra de la ejecucion marca los errores de conexion
    catch(Exception $e){
        die("Error: ". $e->getMessage());
    }
}
    ?>

        <h1 align="center">EL BLOG DE LAS FLORES</h1>
        <?php
    //validar si se ha iniciado una sesion debe incluir el formulario
    if(!isset($_SESSION["usuario"])){
        include("form_acceso.php");
    }else{
        echo "BIENVENIDO AL SISTEMA" . $_SESSION["correo"];
    }
    ?>

</header>
    
    <nav>
        <ul>
            <li class="selected"><a href="#">Blog</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Archivos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

   

    <section id="intro">
        <header>
            <h2>¿Amas las flores tanto como a nosotros?</h2>
        </header>
        <p>La flor es la estructura reproductiva característica de las plantas llamadas espermatofitas o fanerógamas. La función de una flor es producir semillas a través de la reproducción sexual. Para las plantas, las semillas son la próxima generación y sirven como el principal medio a través del cual las especies se perpetúan y se propagan.</p>   
    </section>
    <div id="content">
        <div id="mainContent">
            <section>
                <article class="blogPost">
                    <header>
                        <h2>LA PRODUCCION DE FLORES</h2>
                        <p>Publicado en <time datetime="2023-11-29T23:31+01:00">Noviembre de 2023</time> por <a href="#">cide-soacha</a> - <a href="#comments">3 comentarios</a></p>
                    </header>
                    <div>
                        <p>Todas las espermatofitas poseen flores que producirán semillas, pero la organización interna de la flor es muy diferente en los dos principales grupos de espermatofitas: las gimnospermas vivientes y las angiospermas. Las gimnospermas pueden poseer flores que se reúnen en estróbilos, o bien la misma flor puede ser un estróbilo de hojas fértiles.nota 1​ En cambio, una flor típica de angiosperma está compuesta por cuatro tipos de hojas estructural y fisiológicamente modificadas para producir y proteger los gametos. Tales hojas modificadas o antófilos son los sépalos, pétalos, estambres y carpelos.1​ Además, en las angiospermas la flor da origen, tras la fertilización y por transformación de algunas de sus partes, a un fruto que contiene las semillas.
                        </p>

                        <img src="img/flower.png" alt="Flower" />

                        <p>El grupo de las angiospermas, con más de 250.000 especies, es un linaje evolutivamente exitoso que conforma la mayor parte de la flora terrestre existente. La flor de angiosperma es el carácter definitorio del grupo y es, probablemente, un factor clave en su éxito evolutivo. Es una estructura compleja, cuyo plan organizacional está conservado en casi todos los miembros del grupo, si bien presenta una tremenda diversidad en la morfología y fisiología de todas y cada una de las piezas que la componen. La base genética y adaptativa de tal diversidad está comenzando a comprenderse en profundidad,3​ así como también su origen, que data del Cretácico inferior, y su posterior evolución en estrecha interrelación con los animales que se encargan de transportar los gametos.</p>

                        <p>La flor es un corto tallo de crecimiento determinado que lleva hojas modificadas estructural y funcionalmente para realizar las funciones de producción de gametos y de protección de los mismos, denominadas antófilos.2​ nota 2​

                            El tallo se caracteriza por un crecimiento indeterminado. En contraste, la flor muestra un crecimiento determinado, ya que su meristema apical cesa de dividirse mitóticamente después de que ha producido todos los antófilos o piezas florales. Las flores más especializadas tienen un período de crecimiento más breve y producen un eje más corto y un número más definido de piezas florales que las flores más primitivas. La disposición de los antófilos sobre el eje, la presencia o ausencia de una o más piezas florales, el tamaño, la pigmentación y la disposición relativa de las mismas son responsables de la existencia de una gran variedad de tipos de flores. </p>
                    </div>
                </article>
            </section>
            <section id="comments">
                <h3>Comentarios</h3>
                <article>
                    <header>
                        <a href="#">Cristina Bugman</a> en <time datetime="2020-06-29T23:35:20+01:00">Junio 29th 2020 at 23:35</time>
                    </header>
                    <p>Me encantan las flores y creo que toda la informacion que subes en tu blog es fantastica.</p>
                </article>
                <article>
                    <header>
                        <a href="#">Monica Giraldo</a> en <time datetime="2020-06-29T23:40:09+01:00">Junio 29th 2020 at 23:40</time>
                    </header>
                    <p>Como puedo hacer que mis rosas cuando las plante, generar una raiz resistente.</p>
                </article>
                <article>
                    <header>
                        <a href="#">Susana Garcia</a> en <time datetime="2020-06-29T23:59:00+01:00">Junio 29th 2020 at 23:59</time>
                    </header>
                    <p>Tengo un gran cultivo de flores y he aplicado cada una de tus recomendaciones, gracias por ayudarnos a los floricultores a mejorar nuestros productos.</p>
                </article>
            </section>
            <form action="#" method="post">
                <h3>Publicar un comentario</h3>
                <p>
                    <label for="name">Nombre</label>
                    <input name="name" id="name" type="text" required />
                </p>
                <p>
                    <label for="email">Correo</label>
                    <input name="email" id="email" type="email" required />
                </p>
                <p>
                    <label for="website">Sitio web</label>
                    <input name="website" id="website" type="url" />
                </p>
                <p>
                    <label for="comment">comentario</label>
                    <textarea name="comment" id="comment" required></textarea>
                </p>
                <p><input type="submit" value="Enviar" /></p>
            </form>
        </div>
        <aside>
            <section>
                <header>
                    <h3>Categorias</h3>
                </header>
                <ul>
                    <li><a href="#">Rosas</a></li>
                    <li><a href="#">Tulipanes</a></li>
                    <li><a href="#">Margaritas</a></li>
                </ul>
            </section>
            <section>
                <header>
                    <h3>Archivos</h3>
                </header>
                <ul>
                    <li><a href="#">Diciembre 2008</a></li>
                    <li><a href="#">Enero 2009</a></li>
                    <li><a href="#">Febrero 2009</a></li>
                    <li><a href="#">Marzo 2009</a></li>
                    <li><a href="#">Abril 2009</a></li>
                    <li><a href="#">Mayo 2009</a></li>
                    <li><a href="#">Junio 2009</a></li>
                </ul>
            </section>
        </aside>
    </div>
    <footer>
        <div>
            <section id="acerca de">
                <header>
                    <h3>Acerca de</h3>
                </header>
                <p>cultivos flores urbanos <a href="#">https://www.planteaenverde.es/blog/flores-en-el-huerto/</a> Adaptar las áreas urbanas para acomodar y fomentar la biodiversidad es un reto necesario si queremos paliar la continua desaparición de cientos de especies.</p>
            </section>
            <section id="blogroll">
                <header>
                    <h3>Blogroll</h3>
                </header>
                <ul>
                    <li><a href="#">NETTUTS+</a></li>
                    <li><a href="#">FreelanceSwitch</a></li>
                    <li><a href="#">In The Woods</a></li>
                    <li><a href="#">Netsetter</a></li>
                    <li><a href="#">PSDTUTS+</a></li>
                </ul>
            </section>
            <section id="popular">
                <header>
                    <h3>Popular</h3>
                </header>
                <ul>
                    <li><a href="#">mejores condiciones ambientales</a></li>
                    <li><a href="#">El mundo y las flores</a></li>
                    <li><a href="#">Las abejas y la polinizacion </a></li>
                    <li><a href="#">Disminucionde huella ecologica</a></li>
                </ul>
            </section>
        </div>
    </footer>
</body>
</html>