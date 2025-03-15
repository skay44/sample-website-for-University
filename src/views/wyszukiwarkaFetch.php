<div class="gallery_img">
<a href="watch>><?php echo $ID ?>"><img src="imagesmini/<?php echo  $ID ?>.<?php echo  $ext ?>" width="90%"></a>
</img>
<?php
    if($data['dostep'] == 'prywatne') 
        $color = 'style = "color: #d41608;"';
    else
        $color = '';

    if(strlen($name) > 20)
    {
        echo '"'.substr($name,0,18).'"...';
    }
    else echo '<span '.$color.'>"'.$name.'"</span>';
    echo '</em></br>';
    if(strlen($autor) > 20)
    {
        echo substr($autor,0,18)."...";
    }
    else echo $autor;
    echo '</div>'; ?>