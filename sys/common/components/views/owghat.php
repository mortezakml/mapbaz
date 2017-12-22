<?php
$ogt= $widget->owghat($widget->month , $widget->day ,
 $widget->lg , $widget->lat ,
  $widget->seconds , $widget->dslst , $widget->farsi);
?>
<style>
body,table{font-size:13px;font-family:tahoma,arial;direction:ltr;line-height:160%;text-align:center}
</style>
به نام خدا
<table><tr>
<td colspan="2"><hr></td>
</tr><tr>
<td><?php echo $ogt['s'] ?></td><td>: اذان صبح</td>
</tr><tr>
<td><?php echo $ogt['t'] ?></td><td>: طلوع آفتاب</td>
</tr><tr>
<td><?php echo $ogt['z'] ?></td><td>: اذان ظهر</td>
</tr><tr>
<td><?php echo $ogt['g'] ?></td><td>: غروب آفتاب</td>
</tr><tr>
<td><?php echo $ogt['m'] ?></td><td>: اذان مغرب</td>
</tr><tr>
<td><?php echo $ogt['n'] ?></td><td>: نیمه شب شرعی</td>
</tr><tr>
<td colspan="2"><hr></td>
</tr><tr>
<td><?php echo $ogt['month'] ?></td><td>: برج</td>
</tr><tr>
<td><?php echo $ogt['day'] ?></td><td>: روز</td>
</tr><tr>
<td><?php echo $ogt['longitude'] ?></td><td>: طول جغرافیایی</td>
</tr><tr>
<td><?php echo $ogt['latitude'] ?></td><td>: عرض جغرافیایی</td>
</tr><tr>
<td colspan="2"><hr></td>
</tr>
</table>