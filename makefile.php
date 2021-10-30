<?php
shell_exec('touch /home/kali/Documents/blind_command/dir/'.$_POST['fname']);
if(file_exists('/home/kali/Documents/blind_command/dir/'.$_POST['fname'])){
    echo 'File created successfully';
} else{
    echo 'Failed to create file';
}
?> 