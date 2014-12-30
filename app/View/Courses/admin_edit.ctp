<div id="kieruenk" class="form col-sm-12">
	<h1>Edytuj kierunek</h1>
	<?php	
		echo $this->Form->create('Course', array('type' => 'file', 'class'=>'form-horizontal', 'role'=>'form'));
		echo $this->Form->input('nazwa');
		echo $this->Form->input('courses_category_id');
		echo $this->Form->input('university_type_id');?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Opis</label>
			<?php echo $this->Form->input('opis1', array( 
				'label' => false, 'type'=>'textarea', 'div' => 'col-sm-10', 'class'=> 'form-control wysiwig'
				) 
			); ?>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Perspektywy zawodowe</label>
			<?php echo $this->Form->input('opis2', array( 
				'label' => false, 'type'=>'textarea', 'div' => 'col-sm-10', 'class'=> 'form-control wysiwig'
				) 
			); ?>
		</div>
		<?php echo $this->Form->submit('edytuj', array('div'=>true));	

		echo $this->Form->end(); 
	?>
</div>