<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="barra">
        <img class="mario" src="images/mario.jpeg" alt="mario">
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.0992532548385!2d-3.602084284250346!3d40.40665196417568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42255d3a247575%3A0xd8a0a40edf810cff!2sIES%20Villablanca!5e0!3m2!1ses!2ses!4v1638266010885!5m2!1ses!2ses" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <h1 class="pizza">Personalizar Pizza</h1>
    <div id="formulario">
        <form action="procesar.php" method="post">
            <fieldset>
                <legend>Ingredientes</legend>

                <label for="jamon">Jamon</label>
                <input type="checkbox" name="ingredientes" id="jamon" value="jamon">

                <label for="pina">Pina</label>
                <input type="checkbox" name="ingredientes" id="pina" value="pina">

                <label for="champignon">champignon</label>
                <input type="checkbox" name="ingredientes" id="champignon" value="champignon">

                <label for="bacon">Bacon</label>
                <input type="checkbox" name="ingredientes" id="bacon" value="bacon">

                <label for="cebolla">cebolla</label>
                <input type="checkbox" name="ingredientes" id="cebolla" value="cebolla">
                
                <label for="pimientos">pimientos</label>
                <input type="checkbox" name="ingredientes" id="pimientos" value="pimientos">

                <label for="calabacin">calabacin  </label>
                <input type="checkbox" name="ingredientes" id="calabacin" value="calabacin">
            </fieldset>

            <fieldset>
                <legend>Salsa</legend>

                <label for="carbonara">Carbonara</label>
                <input type="radio" name="salsa" id="carbonara" value="carbonara">

                <label for="barbacoa">barbacoa</label>
                <input type="radio" name="salsa" id="barbacoa" value="barbacoa">

                <label for="tomate">tomate</label>
                <input type="radio" name="salsa" id="tomate" value="tomate">

                <label for="sin-salsa">sin-salsa</label>
                <input type="radio" name="salsa" id="sin-salsa" value="sin-salsa">
            </fieldset>

            <fieldset>
                <legend>Tipo de masa</legend>

                <label for="masa">Tipo de masa:</label> <br/>
                <select id="masa" name="masa">
                    <option value="" selected="selected">- selecciona -</option>
                    <option value="fina">Fina</option>
                    <option value="media">Media</option>
                    <option value="gorda">Gorda</option>
                </select>
            </fieldset>

            <fieldset>
                <legend>Datos Personales</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="" id="nombre" placeholder="Escribe tu nombre">

                <label for="direccion">Direccion envio</label>
                <input type="text" name="direccion" id="direccion" placeholder="Donde quieres recibirlo">
            </fieldset>
            <input type="submit" value="Enviar" class="enviar">
        </form>

    </div>
</body>
</html>