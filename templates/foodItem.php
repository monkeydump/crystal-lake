<tr class="foodItem2">
    <td width="2%" class="numTag">
        <p class="numRef"><?php echo $foodItem['numRef'] ?></p>
    </td>
    <td width="78%" class="descript">
        <p><?php echo $foodItem['description'] ?></p>
    </td>
    <td width="10%" class="costItem">
        <p class="costAmount">&pound;<?php echo $foodItem['costAmount'] ?></p>
    </td>
    <td class="quantity">
        <select name="orderItems[<?php echo $foodItem['numRef'] ?>">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </td>
</tr>
