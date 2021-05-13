<table>
    <tr>
        <th>ta1</th>
        <th>ta2</th>
        <th>ta3</th>
        <th>ta4</th>
        <th>EMC</th>
        <th>EF</th>
    </tr>
    <form method="post" action="/ingresar-notas">
        @csrf
        <tr>
            <th><input type="number" maxlength="2" name="ta1" /></th>
            <th><input type="number" maxlength="2" name="ta2" /></th>
            <th><input type="number" maxlength="2" name="ta3" /></th>
            <th><input type="number" maxlength="2" name="ta4" /></th>
            <th><input type="number" maxlength="2" name="emc" /></th>
            <th><input type="number" maxlength="2" name="ef" /></th>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" value="Guardar"></td>
        </tr>
    </form>
</table>
