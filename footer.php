<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="footer">

<!-- 滚动进度 -->
<div id="bottomProgressBar"></div>

<!-- 音乐播放器 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer@1.10.0/dist/APlayer.min.css">
<script src="https://cdn.jsdelivr.net/npm/aplayer@1.10.0/dist/APlayer.min.js"></script>
<div id="aplayer" class="aplayer" data-id="1978921795" data-lrctype="0" data-server="netease" data-type="playlist" data-fixed="true" data-listfolded="true"></div>
<script src="https://unpkg.com/meting@1.2/dist/Meting.min.js"></script>

<!-- 右下角菜单 -->
<div id="rightMenu">
</div>

<!-- cnzz统计 -->
<div id="cnzzProtocol"  style="display: none;">
    <?php $this->options->siteStatistics()?>
</div>

<!-- 备案信息 -->
<div id="beiAnInfo" style="display: none;">
    <?php $this->options->siteBeian() ?>
</div>



</div>


<!-- footer end -->
</div><!-- home end -->
<script src="https://cdn.staticfile.org/highlight.js/9.15.9/highlight.min.js"></script>

<?php $this->options->globalConfig()?>


<?php $this->footer(); ?>
</body>
</html>
