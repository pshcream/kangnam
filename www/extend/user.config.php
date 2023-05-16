<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가;

if ($bo_table == 'jisikin')
{
    if ($member['mb_id'] == 'dformula') $is_admin = 'board';
    if ($member['mb_id'] == 'formula') $is_admin = 'board';

    if ($is_admin == 'board') $board['bo_admin'] = $member['mb_id'];
}

