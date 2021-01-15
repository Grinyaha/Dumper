// <?php
/**
 * SypexDumper
 * 
 * Backup and restore MySQL
 * 
 * @category	module
 * @version 	2.3
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@properties
 * @internal	@guid docmsdfgewrcrewan435243542tf542t5t	
 * @internal	@shareparams 1
 * @internal	@dependencies requires files located at /assets/modules/sxd/
 * @internal	@modx_category Manager and Admin
 * @internal    @installset base
 */


if(!$modx->hasPermission('bk_manager')) {
                $e->setError(3);
                $e->dumpError();
}


echo '
<link rel="stylesheet" type="text/css" href="https://www.diamondjoy.ru/manager/media/style/default/css/styles.min.css?v=12"/>
<h1>Sypex Dumper pro 2.3</h1>
<div class="sectionHeader">Backup and restore MySQL</div>
<div class="sectionBody" id="lyr4" style="margin-left:20px"> 
<iframe src="/assets/modules/sxd/" width="586" height="462" frameborder="0" style="margin:0;"></iframe>
</div>';


