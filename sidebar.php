<aside id="sidebar-left" role="complementary">
<div id="sidebar">
<?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'sideber-menu',
                    'container'=>'',
                    'fallback_cb' => 'alert_menu'
                    )
            );
    
        ?>
            
            <div id="tit_sanpham"></div>
            <div id="timkiem">
                <form action="http://superthaiduong.com/" method="get">
                    <div>
                        <input id="s" type="text" name="s" value="" placeholder="Tìm kiếm"/>  
                        <input type="submit"  name="search" value="" id="searchsubmit" />     
                    </div>
                </form>
            </div><!--end #timkiem-->
            <div id="hotro">
            <h2 style="width: 102%;">Hỗ trợ trực tuyến</h2>
            <div class="content_block">
            <table width="100%" cellspacing="1" cellpadding="2" border="0">
                <tbody>
                    <tr>
                        <td width="24%" align="right">
                            <strong>Email:</strong>
                        </td>
                        <td width="76%">
                            info@superthaiduong.com
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><strong>Hotline:</strong></td>
                        <td><span>0948351239</span></td>
                    </tr>
                   
                </tbody>
            </table>       
        </div>
        </div><!--end  hotro-->
        <h2 id="chungchi">Chứng chỉ - Chứng nhận</h2>      
        <div style="height: 300px; overflow: hidden;background: #F9F9F9">        
        <div style="height: 300px;" id="slide_marquee">
            <img src="<?php echo bloginfo('template_directory'); ?>http://superthaiduong.com/wp-content/uploads/2015/04/250-1" />         
        </div>
        </div>
        </div><!--end #sidebar-->
</aside>