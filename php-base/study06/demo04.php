<?php
//查询磁盘可用空间的查看
echo round(disk_free_space('D:')/1024/1024/1024,2).'GB';
echo '</br>';

//总空间
echo round(disk_total_space('D:')/1024/1024/1024,2).'GB';
?>