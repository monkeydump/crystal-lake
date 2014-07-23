<tr class="foodItem">
    <td width="2%" class="numTag selectable">
        <p class="numRef"><?php echo $foodItem['numRef'] ?></p>
    </td>
    <td width="78%" class="descript selectable">
        <p><?php echo $foodItem['description'] ?></p>
    </td>
    <td width="10%" class="costItem selectable">
        <p class="costAmount">&pound;<?php echo $foodItem['costAmount'] ?></p>
    </td>
    <td class="quantity">
        <select name="orderItems[<?php echo $foodItem['numRef'] ?>">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </td>
</tr>
