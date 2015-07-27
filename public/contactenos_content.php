<div class="contactenos_image">
    <figure>
        <img src="images/avatar.png">
    </figure>
</div>

<div class="contactenos_content">

    <form action="enviar.php" method="post">

        <table>
            <tbody>
                <tr>
                    <td class="table-title">
                        <label>Nombre:</label>
                    </td>
                    <td class="table-body">
                        <input type="text" name="nombre" />
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Apellido:</label>
                    </td>
                    <td class="table-body">
                        <input type="text" name="apellido" />
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Organizacion:</label>
                    </td>
                    <td class="table-body">
                        <input type="text" name="organizacion"/>
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Telefono:</label>
                    </td>
                    <td class="table-body">
                        <input type="number" name="telefono">
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Celular:</label>
                    </td>
                    <td class="table-body">
                        <input type="number" name="celular"/>
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Correo:</label>
                    </td>
                    <td class="table-body">
                        <input type="email" name="correo">
                    </td>
                </tr>
                <tr>
                    <td class="table-title">
                        <label>Mensaje:</label>
                    </td>
                    <td class="table-body">
                        <textarea name="mensaje"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="table-title"></td>
                    <td>
                        <button type="submit">Enviar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>