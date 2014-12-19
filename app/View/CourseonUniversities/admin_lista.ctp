<div class="kieruneks form">
	<h1>Lista kierunków uniwersytetu</h1>
		<div class="panel-group" id="accordion">
		<?php foreach($kursy as $faculty_id =>$kierunek):?>    
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $faculty_id;?>">
				  <?php echo $wydzialy[$faculty_id];?> <?php	echo $this->Html->link("Delete", array('action'=>'deletefaculty',  $faculty_id, $university), array('class'=> "pull-right")); ?>
				</a>
			  </h4>
			</div>
			<div id="collapse_<?php echo $faculty_id;?>" class="panel-collapse collapse">
				<div class="">
					<?php echo $this->Form->create('CourseonUniversity', array('action' => 'update')); ?>
					<form class="form">
						<div class="table-responsive">
							<table class="table table-striped table-hover table-bordered">
								<thead>
									<tr><th rowspan="2">Nazwa</td><th colspan="2">licencjackie</td><th colspan="2">inżynierskie</td><th colspan="2">magisterskie</td><th rowspan="2"></td></tr>
									<tr><th>sta</td><th>nie</td><th>sta</td><th>nie</td><th>sta</td><th>nie</td></tr>
								</thead>
								<tbody>  <?php $i=0;$j=0; ?>
								<?php foreach($kierunek as $course_id => $kkierunek):?>
									<tr><?php $j++; ?>
										<td><?php echo $nazwy_kursow[$course_id];
												//echo $this->Form->hidden('course.course_id', array('value' => $kierunek['course_id']['course_id']));
												//echo $this->Form->hidden('course.university_id', array('value' => $university));
												//echo $this->Form->hidden($j.'.'.$i.'.id', array('value' => $kkierunek['id']));
										?></td>
										<?php $i++; ?>
										<?php if(isset($kkierunek[1][1])):?><td>
											<?php
											 echo $this->Form->checkbox('c.'.$faculty_id.'.'.$course_id.'.1.1', array('value' => 1, 'checked'=>'true'));?></td>
											<?php else : ?><td><?php
											 echo $this->Form->checkbox('c.'.$faculty_id.'.'.$course_id.'.1.1', array('value' => 1));?></td><?php endif;?>
										<?php $i++; ?>
										<?php if(isset($kkierunek[1][2])):?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 1));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 2, 'checked'=>'true'));?></td><?php else : ?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 1));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 2));?></td><?php endif;?>
										<?php $i++; ?>
										<?php if(isset($kkierunek[2][1]) ):?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 2));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 1, 'checked'=>'true'));?></td><?php else : ?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 2));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 1));?></td><?php endif;?>
										<?php $i++; ?>
										<?php if(isset($kkierunek[2][2])):?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 2));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 2, 'checked'=>'true'));?></td><?php else : ?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 2));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 2));?></td><?php endif;?>
										<?php $i++; ?>
										<?php if(isset($kkierunek[3][1])):?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 3));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 1, 'checked'=>'true'));?></td><?php else : ?><td><?php
											echo $this->Form->hidden('c.'.$faculty_id.$course_id.'.'.$i.'.course_type_id', array('value' => 3));
											 echo $this->Form->checkbox('c.'.$faculty_id.$course_id.'.'.$i.'.course_mode_id', array('value' => 1));?></td><?php endif;?>
										<?php $i++; ?>
										<?php if(isset($kkierunek[3][2])):?><td><?php
											 echo $this->Form->checkbox('c.'.$faculty_id.'.'.$course_id.'.3.2', array('value' => 1, 'checked'=>'true'));?></td><?php else : ?><td><?php
											 echo $this->Form->checkbox('c.'.$faculty_id.'.'.$course_id.'.3.2', array('value' => 1));?></td><?php endif;?>
										<td >
										<?php 	//echo $this->Html->link(    "Edit",   array('action'=>'edit', $kkierunek['id']) ); ?> | 
										<?php	echo $this->Html->link(    "Delete", array('action'=>'delete', $faculty_id.$course_id, $university)); ?>
										</td>
									</tr>
									<?php endforeach; ?>
									<?php unset($kkierunek); ?>
								</tbody>
							</table>
						</div>
						<?php echo $this->Form->end('Update'); ?>
					</form>
					
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>  
<div class="dodaj_kierunki">              
	<h3>
		<?php	echo $this->Html->link("Dodaj nowe kierunki", array('action'=>'addm', $university, $university)); ?>
	</h3>
</div>