<?php
        echo '<table>';
        echo '<tr><td align="center">ユーザーネーム</td></tr><tr><td>';
        echo '<input type="text" name="name" value="', $name, '">';
        echo '</td></tr>';
        echo '<tr><td align="center">ユーザーID</td></tr><tr><td>';
        echo '<input type="text" name="user_id" value="', $user_id, '">';
        echo '</td></tr>';
        echo '<tr><td align="center">パスワード</td></tr><tr><td>';
        echo '<input type="text" name="password" value="', $password, '">';
        echo '</td></tr>';
        echo '</table>';
        echo '<input type="submit" value="sign">';
        ?>