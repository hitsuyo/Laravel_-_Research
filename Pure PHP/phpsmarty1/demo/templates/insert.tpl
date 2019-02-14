
<form method="post" action="insert.php">
    <table width="550" border="1">
        <tr>
            <td colspan="2" align="center"><strong>Insert Record</strong></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Add Record" /></td>
        </tr>
    </table>
</form>
{include file="footer.tpl"}