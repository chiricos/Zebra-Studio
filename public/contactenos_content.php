

<div class="contactenos_content">
    <h2>Contactenos</h2>

    <form action="enviar.php" method="post">

        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" />
        </div>

        <div>
            <label>Apellido</label>
            <input type="text" name="apellido" />
        </div>

        <div>
            <label>Organizacion</label>
            <input type="text" name="organizacion"/>
        </div>

        <div>
            <label>Telefono</label>
            <input type="number" name="telefono">
        </div>

        <div>
            <label>Celular</label>
            <input type="number" name="celular"/>
        </div>

        <div>
            <label>Correo</label>
            <input type="email" name="correo">
        </div>

        <div>
            <label>Mensaje</label>
            <textarea name="mensaje"></textarea>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>