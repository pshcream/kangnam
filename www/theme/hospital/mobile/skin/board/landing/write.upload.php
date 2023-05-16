<?php 
function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

$img = $_FILES["img"];

/* // 업르도파일을 저장하는 파일 패스를 지정
 $filename = $board_skin_path."/".$_FILES["img"]["name"];
 
 // 업로드 된 임시파일을 파일 저장 패스에 카피함
 $file = move_uploaded_file($tmpname, $filename);
 */
if(!empty($img))
{
    $img_desc = reArrayFiles($img);
    //print_r($img_desc);
    $count = count($img_desc);
    $i_count = 0;
    foreach($img_desc as $val)
    {
        $i_count++;
        //echo $filename = G5_DATA_PATH."/".$val["name"];
        //echo $newname = date('YmdHis',time()).mt_rand().'.jpg';
        
        //move_uploaded_file($val['tmp_name'],$filename);
        
        $tmp_file  = $val['tmp_name'];
        $filesize  = $val['size'];
        $filename  = $val['name'];
        $filename  = get_safe_filename($filename);
        $timg = @getimagesize($tmp_file);
        $val['img'] = $timg;
        
        // 관리자가 아니면서 설정한 업로드 사이즈보다 크다면 건너뜀
        if (!$is_admin && $filesize > $board['bo_upload_size']) {
            $file_upload_msg .= '\"'.$filename.'\" 파일의 용량('.number_format($filesize).' 바이트)이 게시판에 설정('.number_format($board['bo_upload_size']).' 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n';
            continue;
        }
        
        //=================================================================\
        // 090714
        // 이미지나 플래시 파일에 악성코드를 심어 업로드 하는 경우를 방지
        // 에러메세지는 출력하지 않는다.
        //-----------------------------------------------------------------
        // image type
        if ( preg_match("/\.({$config['cf_image_extension']})$/i", $filename) ||
        preg_match("/\.({$config['cf_flash_extension']})$/i", $filename) ) {
            if ($timg['2'] < 1 || $timg['2'] > 16)
                continue;
        }
        //=================================================================
        // 프로그램 원래 파일명
        $val['source'] = $filename;
        $val['filesize'] = $filesize;
        
        // 아래의 문자열이 들어간 파일은 -x 를 붙여서 웹경로를 알더라도 실행을 하지 못하도록 함
        $filename = preg_replace("/\.(php|pht|phtm|htm|cgi|pl|exe|jsp|asp|inc)/i", "$0-x", $filename);
        
        shuffle($chars_array);
        $shuffle = implode('', $chars_array);
        
        // 첨부파일 첨부시 첨부파일명에 공백이 포함되어 있으면 일부 PC에서 보이지 않거나 다운로드 되지 않는 현상이 있습니다. (길상여의 님 090925)
        $val['file'] = abs(ip2long($_SERVER['REMOTE_ADDR'])).'_'.substr($shuffle,0,8).'_'.replace_filename($filename);
        
        $time_name = date('YmdHis',time()).mt_rand().$val['file'];
        $dest_file = G5_DATA_PATH.'/file/'.$bo_table.'/'.$time_name;
        
        // 업로드가 안된다면 에러메세지 출력하고 죽어버립니다.
        $error_code = move_uploaded_file($tmp_file, $dest_file) or die($val['error']);
        
        // 올라간 파일의 퍼미션을 변경합니다.
        chmod($dest_file, G5_FILE_PERMISSION);
        
        $dest_file = run_replace('write_update_upload_file', $dest_file, $board, $wr_id, $w);
        $val = run_replace('write_update_upload_array', $val, $dest_file, $board, $wr_id, $w);
        
        
        if ($member['mb_id']) {
            $mb_id = $member['mb_id'];
            $wr_name = addslashes(clean_xss_tags($board['bo_use_name'] ? $member['mb_name'] : $member['mb_nick']));
            $wr_password = '';
            $wr_email = addslashes($member['mb_email']);
            $wr_homepage = addslashes(clean_xss_tags($member['mb_homepage']));
        } else {
            $mb_id = '';
            // 비회원의 경우 이름이 누락되는 경우가 있음
            $wr_name = clean_xss_tags(trim($_POST['wr_name']));
            if (!$wr_name)
                alert('이름은 필히 입력하셔야 합니다.');
                $wr_password = get_encrypt_string($wr_password);
                $wr_email = get_email_address(trim($_POST['wr_email']));
                $wr_homepage = clean_xss_tags($wr_homepage);
        }
        
        $wr_num = get_next_num($write_table);
        $sql = " insert into $write_table
                set wr_num = '$wr_num',
                     wr_reply = '$wr_reply',
                     wr_comment = 0,
                     ca_name = '$ca_name',
                     wr_option = '$html,$secret,$mail',
                     wr_subject = '$wr_subject',
                     wr_content = '$wr_content',
                     wr_seo_title = '$wr_seo_title',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '$wr_link2',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '$wr_password',
                     wr_name = '$wr_name',
                     wr_email = 'https://참소식.한국인터넷.한국',
                     wr_homepage = '$wr_homepage',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
                     wr_2 = '$wr_2',
                     wr_3 = '$wr_3',
                     wr_4 = '$wr_4',
                     wr_5 = '$wr_5',
                     wr_6 = '$wr_6',
                     wr_7 = '$wr_7',
                     wr_8 = '$wr_8',
                     wr_9 = '$wr_9',
                     wr_10 = '$wr_10' ";
        sql_query($sql);
        
        $wr_id = sql_insert_id();
        
        // 부모 아이디에 UPDATE
        sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");
        
        // 새글 INSERT
        sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");
        
        // 게시글 1 증가
        sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$bo_table}'");
        
        
        
        $sql = " insert into {$g5['board_file_table']}
                    set bo_table = '{$bo_table}',
                         wr_id = '{$wr_id}',
                         bf_no = '0',
                         bf_source = '{$val['source']}',
                         bf_file = '{$time_name}',
                         bf_content = '',
                         bf_fileurl = '',
                         bf_thumburl = '',
                         bf_storage = '',
                         bf_download = 0,
                         bf_filesize = '{$val['filesize']}',
                         bf_width = '{$val['img']['0']}',
                         bf_height = '{$val['img']['1']}',
                         bf_type = '{$val['img']['2']}',
                         bf_datetime = '".G5_TIME_YMDHIS."' ";
        sql_query($sql);
        
        run_event('write_update_file_insert', $bo_table, $wr_id, $val, $w);
        
        delete_cache_latest($bo_table);
        
        $redirect_url = run_replace('write_update_move_url', short_url_clean(G5_HTTP_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$wr_id.$qstr), $board, $wr_id, $w, $qstr, $file_upload_msg);
        
        run_event('write_update_after', $board, $wr_id, $w, $qstr, $redirect_url);
        
        // 파일의 개수를 게시물에 업데이트 한다.
        $row = sql_fetch(" select count(*) as cnt from {$g5['board_file_table']} where bo_table = '{$bo_table}' and wr_id = '{$wr_id}' ");
        sql_query(" update {$write_table} set wr_file = '{$row['cnt']}' where wr_id = '{$wr_id}' ");
        
        // 자동저장된 레코드를 삭제한다.
        sql_query(" delete from {$g5['autosave_table']} where as_uid = '{$uid}' ");
        //------------------------------------------------------------------------------
    }
}

        if($count==$i_count) {
            echo '파일 업로드 성공 !';
            ?>
        
        <script>
        	window.location.href='<?=G5_BBS_URL.'/board.php?bo_table='.$_GET['bo_table']?>';
        </script>
        
        <?php 
    }
    
?>