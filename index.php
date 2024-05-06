<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' > 
    <title>Veterinaria "Mascotas Felices"</title>
    <style type= "text/css">
        *
        {
            margin: 0;
            padding: 0;
        }
        .container-fluid
        {
            width: 100%;
            height: 130vh;
            background: linear-gradient( to left ,rgba(1,1,1,0.1)80%,rgba(1,1,1,0.1)80%),url(fondo2.jpg); 
            background-size:cover;
            background-repeat:no-repeat;
        }
        .container
        {
            width: 1258px;
            height: 100px;
            background-color:#99FF66;
            margin: auto;
            display:flex;
            justify-content: space-between;
            align-items:center;
            padding:0px 170px;
        }
        .container h2
        {
            font-family:arial;
            font-size: 40px;
            color:#333300;
            cursor: pointer;
        }
        .container ul 
        {
            display: flex;
            justify-content: space-between;
            align-items:center;
        }
        .container ul li 
        {
            font-family:arial;
            color:#333300;
            font-size: 19px;
            list-style:none;
            margin-right:70px;
            font-weight:bold;
            cursor:pointer;
            transition:0.5s;
        }
        .container ul li:first-child
        {
            color:#333300 ;
            font-weight:bold;
        }
        .container ul li:hover 
        {
            color: #FFCC00;
        }
        .container .btn
        {
            width: 190px;
            height:50px;
            border-radius:10px;
            font-size:18px;
            border:none;
            display:flex;
            justify-content:center;
            align-items:center;
            background-color: #003300;
            color:#fff;
            transition: 0.5s;
        }
        .container .btn:hover 
        {
            background-color:#333300;
            color: #fff;
            font-weight:bold;
        }
        .content 
        {
            width: 1300px;
            height:100vh;
            margin: auto;
        }
        .content h1 
        {
            font-family:Arial, sans-serif;
        
            font-weight:bold;
            color: #333300;
            font-size:60px;
            padding-top:100px;
        }
        .content p 
        {
            font-family:Arial, sans-serif;
            width: 50%; /* ajusta el ancho según tu preferencia */
            text-align: justify;
            font-weight:bold;
            color:#333300;
            line-height:30px;
            padding-top:30px;
        }
        .content .btn
        {
            width: 200px;
            height:50px;
            border-radius:10px;
            font-size:18px;
            border:  5px solid #333300;
            display:flex;
            justify-content:center;
            align-items:center;
            background-color:#33FF33;
            color:#333300;
            font-weight:bold;
            transition: 0.5s;
            margin-top:15px;
        }
        .content .btn:hover 
        {
            background-color:#333300;
            color: #30d300;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h2><ion-icon name="medkit-outline"></ion-icon> VETERINARIA <ion-icon name="paw-outline"></ion-icon></h2>
            <ul>
                <li>HOME</li>
                <li>SERVICIOS</li>
                <li>EQUIPO</li>
                <li>COMUNIDAD</li>
            </ul>
            <button class="btn"><ion-icon name="call-outline"></ion-icon>(68037152)</button>
        </div>
        <div class="content">
            <h1>MASCOTAS FELICES<br></h1>
            <p>
            ¡Bienvenidos a MASCOTAS FELICES!
            ¿Quieres lo mejor para tu compañero? 
            Aquí,no solo somos una clínica veterinaria, somos una familia que 
            se preocupa por la salud y felicidad de tu mascota tanto como tú.
            Nuestro equipo de expertos veterinarios está aquí para ofrecerle 
            la atención y cuidado que se merece. Desde chequeos preventivos hasta 
            tratamientos especializados, 
            estamos comprometidos a mantener a tu mascota saludable y radiante.
            No dejes que los pequeños problemas se conviertan en grandes preocupaciones. 
            ¡Haz una cita hoy mismo y descubre por qué tantos dueños confían en MASCOTAS FELICES para el bienestar de sus mascotas!<br></p>
            <form action="pagina_siguiente.php" method="get">
                <button class="btn" type="submit">RESGISTRO</button>
            </form>

            <form action="Obtener_Servicio.php" method="get">
                <button class="btn" type="submit">OBTENER SERVICIO</button>
            </form>
            <p><ion-icon name="location-outline"></ion-icon> Ubicación: Av. Montenegro #1042, La Paz</p>
        </div>
    </div> 
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>

