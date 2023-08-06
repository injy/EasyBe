<?php if (!defined('__TYPECHO_ROOT_DIR__')) {exit;} ?>
<div id="sideBar">
    <div id="sideBarMain">
        <div id="sidebar_news" class="newsItem">
            <div id="blog-news">
                <div id="profile_block">
                    昵称：
                    <a id="info_name" href="javascript:void(0)">
                        。思索
                    </a>
                    <br>
                    职业：
                    <a id="info_job" href="javascript:void(0)">
                        野生猿
                    </a>
                    <br>
                    坐标：
                    <a id="info_position" href="javascript:void(0)">
                        上海
                    </a>
                    <br>
                    格言：
                    <a id="info_proverb" href="javascript:void(0)">
                        学无止境,谦卑而行
                    </a>
                </div>
            </div>
        </div>
        <div id="sidebar_c3"></div>
        <div id="blog-calendar" style=""></div>
        <div id="leftcontentcontainer">
            <div id="blog-sidecolumn"><!-- 搜索 -->
                <div id="sidebar_search" class="sidebar-block">
                    <div id="sidebar_search" class="mySearch">
                        <h3 class="catListTitle">搜索</h3>
                        <div id="sidebar_search_box">
                            <div id="sb_widget_my_zzk" class="div_my_zzk">
                                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                                    <input type="text" id="s" name="s" placeholder="找找看" id="btnZzk" class="input_my_zzk form-control search-menu">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- 删除了一些排行的东西 -->
            </div>
        </div>
    </div><!--end: sideBarMain -->
</div>
<div class="clear"></div>
