<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 220;
$board_file_path = G5_DATA_PATH . '/file/' . $bo_table;
$board_file_url = G5_DATA_URL . '/file/' . $bo_table;
?>

<?php
for ($i=0; $i<count($list); $i++) {
    $list[$i]['file'] = get_file($bo_table, $list[$i]['wr_id']);

    $thumb1_src = $board_file_url . "/" . thumbnail($list[$i]['file'][0]['file'], $board_file_path, $board_file_path, $thumb_width,'', false,true);


    ?>
    <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">
        <div class="icon">
          <div class="gsimg">
    <img src="<?php echo $thumb1_src?>">
    <?php echo $list[$i]['subject'];

    ?>

    <div class="margin-top-20 margin-bottom-20">
      <button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">상세정보</button>
    </div>
  </div>
  </div>
  <div class="space"></div>
  </div>
  </div><!-- ./col -->
<?php }  ?>
