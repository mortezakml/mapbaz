<?php
use yii\helpers\Url;
?>
<div class="panel panel-default">
	<div class="panel-heading">
		 <div class="row">
			<div class="col-xs-1">
                                 <i class="fa fa-inbox fa-3x"></i>
                             </div>
                           <div class="col-xs-11">
                                   <h4 class="title"><?= $widget->label ?></h4>
                           </div>
                    </div>
	    	
	</div>
	
        <table class="table table-striped table-bordered table-hover">
                <th style="text-align:center; color:#008;">رتبه</th>
                <th style="text-align:center; color:#008;">بازديد</th>
                <th style="text-align:center; color:#008;">نام</th>
                <th style="text-align:center; color:#008;">آدرس</th>
            <?php
            if(!empty($model))
            {
                $counter=0;
                foreach ($model as $dt){
                    $counter+=1;
                    ?>
                    <tr>    
                        <td><?= $counter ?></td>                    
                        <td><?= $dt->count ?></td>                                              
                        <td><a href="<?= Url::to(['go', 'id' => $dt->id]) ?>"><?= $dt->name ?></a></td>
                        <td style="text-align:left" dir="ltr"><a href="<?= Url::to(['go', 'id' => $dt->id]) ?>">&nbsp;&nbsp;&nbsp;<?= $dt->address ?></a></td>
                    </tr>
                    <?php      
                }
            }
            ?>         
        </table>
</div>