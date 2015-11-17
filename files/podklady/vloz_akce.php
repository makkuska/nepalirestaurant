
<?php
//load data
$datafile = '../data/akce.json';
$data = json_decode(file_get_contents($datafile));

//process form
if (isset($_POST['url']) && $_POST['url'] == 'http://') {
  $date = filter_input(INPUT_POST, 'date');
  $subject = filter_input(INPUT_POST, 'subject');
  $message = filter_input(INPUT_POST, 'message');

  $newFeature = new stdClass();
  $newFeature->type = 'Feature';
  //attributes
  $prop = new stdClass();
  $prop->date = $date;
  $prop->subject = $subject;
  $prop->message = $message;
  $newFeature->properties = $prop;
  //position

  //add to features
  $data->features[] = $newFeature;
  //save to file
  file_put_contents($datafile, json_encode($data));
}

$features = $data->features;

//TODO: if user comes from special addres than enable form (with htaccess?):
$isLogged = TRUE;
?>
