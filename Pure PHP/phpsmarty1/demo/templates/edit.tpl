<form method="post" action="edit.php">
<input type="hidden" name="id" value="{$users_edit.id}" />
    <table width="550" border="1">
        <tr>
            <td colspan="2" align="center"><strong>Edit Record</strong></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="{$users_edit.name}"/></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" value="{$users_edit.city}"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Edit Record" /></td>
        </tr>
    </table>
</form>
{include file="footer.tpl"}