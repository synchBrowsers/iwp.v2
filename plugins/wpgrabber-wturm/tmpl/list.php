<style>
.wp-list-table td.column-published {
    width: 50px;
}
.wp-list-table #type {
    width: 100px;
}
.wp-list-table #id {
    width: 50px;
}
.wp-list-table #last_update {
    width: 120px;
}
.wp-list-table #published {
    text-align: center;
    width: 100px;
}
</style>
<div class="wrap">
<form method="post">
<div id="icon-themes" class="icon32"></div><h2>WPGrabber - Список лент  <a href="https://kwork.ru/script-programming/74574/grabber-dlya-wordpress-nastroyka-parsinga-s-lyubykh-saytov?ref=6517" target="_blank" title="Заказать платную настройку лент"><b>Заказать настройку ленты</b></a> </h2>
</h2>
<?php $wpgrabberTable->search_box('поиск', 'search_id'); ?>
<?php echo $wpgrabberTable->display(); ?>
</form>