<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 350;
$board_file_path = G5_DATA_PATH . '/file/' . $bo_table;
$board_file_url = G5_DATA_URL . '/file/' . $bo_table;
?>

<?php
for ($i=0; $i<count($list); $i++) {
    $list[$i]['file'] = get_file($bo_table, $list[$i]['wr_id']);

    $thumb1_src = $board_file_url . "/" . thumbnail($list[$i]['file'][0]['file'], $board_file_path, $board_file_path, $thumb_width,'', false,true);

    ?>
    <img src="<?php echo $thumb1_src?>">
<?php }  ?>
