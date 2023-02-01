<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
$vote2 = $_GET['vote2'];

//get content of textfile
$filename = "poll_result2.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote2 == 0) {
  $yes = $yes + 1;
}
if ($vote2 == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>


<table>
    <tr>
        <td>Ya</td>
        <td><img src="<?=base_url()?>uploads/poll.png"
        width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
        height='20'>
        <?php echo(100*round($yes/($no+$yes),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>Tidak</td>
        <td><img src="<?=base_url()?>uploads/poll.png"
        width='<?php echo(100*round($no/($no+$yes),2)); ?>'
        height='20'>
        <?php echo(100*round($no/($no+$yes),2)); ?>%
        </td>
    </tr>
</table>

</html>