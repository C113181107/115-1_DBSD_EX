<?php
?>

<form action="guestbook.php" method="post">
    <table border="1">
        <TR>
            <TD>Name: </TD>
            <TD><input type="text" name="name"></TD>
        </TR>
        <TR>
            <TD>Email: </TD>
            <TD><input type="text" name="email"></TD>
        </TR>
        <TR>
            <TD>Content: </TD>
            <TD>
                <textarea name="message" rows="4" cols="30"></textarea>
            </TD>
        </TR>
    </table>