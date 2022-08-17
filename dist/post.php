<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="mainContent">
    <div class="forFlow">
        <div id="post_detail">
            <!--done-->
            <div id="topics">
                <div class="post">
                    <div class="clear"></div>
                    <div class="postBody">
                        <div id="cnblogs_post_body" class="blogpost-body cnblogs-markdown">
                            <?php $this->content(); ?>
                        </div>
                        <div class="clear"></div>
                        <div id="blog_post_info_block" role="contentinfo">
                            <div id="EntryTag">
                                标签: <?php $this->tags(', ', true, 'none'); ?>
                            </div>

                            <div id="blog_post_info">
                                <div id="green_channel">
                                    <a href="javascript:void(0);" id="green_channel_digg" >好文要顶</a>
                                    <a id="green_channel_follow"  href="javascript:void(0);">关注我</a>
                                    <a id="green_channel_favorite"  href="javascript:void(0);">收藏该文</a>
                                    <a id="green_channel_weibo" href="javascript:void(0);" title="分享至新浪微博" ><img src="https://common.cnblogs.com/images/icon_weibo_24.png" alt=""></a>
                                    <a id="green_channel_wechat" href="javascript:void(0);" title="分享至微信" ><img src="https://common.cnblogs.com/images/wechat.png" alt=""></a>
                                </div>
<!--                                <div id="author_profile">-->
<!--                                    <div id="author_profile_info" class="author_profile_info">-->
<!--                                        <a href="https://home.cnblogs.com/u/wangyang1225/" target="_blank"><img src="https://pic.cnblogs.com/face/2937968/20220727151221.png" class="author_avatar" alt=""></a>-->
<!--                                        <div id="author_profile_detail" class="author_profile_info">-->
<!--                                            <a href="https://home.cnblogs.com/u/wangyang1225/">WangYang1225</a><br>-->
<!--                                            <a href="">粉丝 - <span class="follower-count">0</span></a>-->
<!--                                            <a href="">关注 - <span class="following-count">1</span></a><br>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="clear"></div>-->
<!--                                    <div id="author_profile_honor"></div>-->
<!--                                    <div id="author_profile_follow" class="follow-tip">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="div_digg">-->
<!--                                    <div class="diggit" onclick="votePost(16535598,'Digg')">-->
<!--                                        <span class="diggnum" id="digg_count">0</span>-->
<!--                                    </div>-->
<!--                                    <div class="buryit" onclick="votePost(16535598,'Bury')">-->
<!--                                        <span class="burynum" id="bury_count">0</span>-->
<!--                                    </div>-->
<!--                                    <div class="clear"></div>-->
<!--                                    <div class="diggword" id="digg_tips">-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                            <div class="clear"></div>
                            <div id="post_next_prev">
                                <a class="p_n_p_prefix">« </a> 上一篇： <?php $this->thePrev('%s', '我也是有上限的哦,(✿◡‿◡)'); ?> </a>
                                <br>
                                <a class="p_n_p_prefix">» </a> 下一篇： <?php $this->theNext('%s', '我可是有下限的哦,(●ˇ∀ˇ●)'); ?> </a>
                            </div>
                        </div>
                    </div>
                    <div class="postDesc">posted @
                        <span id="post-date"><?php $this->date("Y-m-d H:i:s"); ?></span>
                        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->author(); ?></a>
                        阅读(<span id="post_view_count"><?php get_post_view($this) ?></span>)
                        评论(<span id="post_comment_count"><?php $this->commentsNum('%d'); ?></span>)
                        <?php if($this->user->hasLogin()) :?>
                            <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
                        <?php endif;?>
                    </div>
                </div><!--end: topics 文章、评论容器-->
            </div>
            <!--评论-->
        </div><!--end: forFlow -->
    </div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
