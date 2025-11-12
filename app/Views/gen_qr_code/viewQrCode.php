<?php
if (!empty($data)) {
    if ($data['id_type'] == '1') {
       // echo $data['clink'];
       return  redirect()->to($data['clink']);
        
    } else if ($data['id_type'] == '2') {
        echo $data['ctext'];
    }else if ($data['id_type'] == '3') {
        $f =file_get_contents($data['cfile_path']);

        echo $f;
    }
} else {
    echo "ข้อมููลไม่ถูกต้อง";
    exit;
}

?>
   