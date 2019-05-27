<?php

 class project {
	public $desc = "";
	public $states;
 }

 class state {
	public $name = "";
	public $class = "";
	public $id = "";
	public $tasks;
 }

 class task {
  public $id = "";
  public $desc = "";
 }

$i = 0;
$max_i=4;
$idtask=0;

$states[0] = new state;
$states[0]->name = '0%';
$states[0]->class = 'warning';
$states[1] = new state;
$states[1]->name = '25%';
$states[1]->class = 'info';
$states[2] = new state;
$states[2]->name = '50%';
$states[2]->class = 'info';
$states[3] = new state;
$states[3]->name = '75%';
$states[3]->class = 'info';
$states[4] = new state;
$states[4]->name = '100%';
$states[4]->class = 'success';

while($i<=$max_i)
{
	$states[$i]->id = $i;
	
	$j = 0;
	$max_j=rand ( 0 , 3 );
	while($j<$max_j)
	{
		$tasks[$i][$j] = new task;
		$tasks[$i][$j]->id = $idtask;
		$tasks[$i][$j]->desc = 'Task number '.$idtask;
		$j++;
		$idtask++;
	}
	
	if($max_j == 0)
		$states[$i]->tasks = array();
	else
		$states[$i]->tasks = $tasks[$i];

	$i++;
}

$myProject = new project;
$myProject->desc = 'Project @mdelgadop';
$myProject->states = $states;

echo json_encode($myProject);
