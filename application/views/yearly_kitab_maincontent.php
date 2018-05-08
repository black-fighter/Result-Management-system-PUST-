<p align="center"><strong><span style="text-decoration: underline;">যে সকল কিতাবের পরীক্ষা নেওয়া হবে</span></strong><strong></strong></p>

<div align="center">
    <table width="100%" cellspacing="0" cellpadding="0" border="1">
        <tbody>
            <tr>
                <td width="16%">
                    <p align="center"><strong>জামাত</strong></p>
                </td>
                <td width="83%">
                    <p align="center"><strong>কিতাবের নাম</strong><strong> </strong></p>
                </td>
            </tr>

            <?php
            foreach ($yearly_kitab_content as $v_maincontent) {
                ?>
                <tr>
                    <td width="16%">
                        <p align="left"><?php echo $v_maincontent->jamat_name; ?></p>
                    </td>
                    <td width="83%">
                        <p align="left"><?php echo $v_maincontent->kitab_name; ?></p>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>