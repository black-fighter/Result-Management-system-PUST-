<p align="center"><strong><span style="text-decoration: underline;">ভর্তি ফি ও অন্যন্য খরচ</span></strong><strong></strong></p>


<table cellspacing="0" cellpadding="0" border="1">
    <tbody>

        <?php
        $i=0;
        $j=0;
        $k=1;
        $bivag=array();
        foreach ($vorti_fee_content as $v_maincontent) {
            
            $bivag[$i++]=$bivag_id = $v_maincontent->bivag_id;
            for ($j=0;$j<$i-1;$j++){
                if($bivag[$j]==$bivag_id){
                    $k++;
                }
            }
            if($k>1){
                continue;
            }
            ?>
            <tr>
                <td colspan="2" width="674" valign="top">
                    <p align="center"><strong><?php echo $v_maincontent->bivag_name; ?></strong></p>
                </td>
            </tr>
        <?php
        foreach ($vorti_fee_content as $v_maincontent) {
            if($bivag_id == $v_maincontent->bivag_id){
            ?>   
            <tr>
                <td width="337">
                    <p align="left"><?php echo $v_maincontent->title; ?></p>
                </td>
                <td width="337">
                    <p align="left"><?php echo $v_maincontent->fee_amount; ?></p>
                </td>
            </tr>
            <?php } } ?>
            
        <?php } ?>
    </tbody>
</table>