<tr class="dishType">
    <td>
        <h2 class="menuName"><?php echo $menuName ?></h2>
    </td>
</tr>
<tr class="menuList">
    <td style="border: 0;">
        <table cellspacing="5" cellpadding="0" border="0" width="100%">
            <tbody>
            <?php

            foreach ($foodItems as $foodItem) {
                include __DIR__.'/foodItem.php';
            }

            ?>
            </tbody>
        </table>
        <p>
            Total:
            <input type="text" id="txtTotal" size="8" />
        </p>

    </td>
</tr>
</form>
