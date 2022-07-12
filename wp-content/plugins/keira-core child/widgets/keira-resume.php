<?php

class keira_resume_widget extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'keira-resume';
	}
	
	public function get_title() {
		return 'Keira Resume';
	}
	
	public function get_icon() {
		return 'fa fa-graduation-cap';
	}
	
	public function get_categories() {
		return [ 'keira-category' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'experience_section',
			[
				'label' => __( 'Experience Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'experience_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'experience_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'experience_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'experience_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'experience_list',
			[
				'label'   => __( 'Experience List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();
		
		$this->start_controls_section(
			'education_section',
			[
				'label' => __( 'Education Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'education_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'education_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'education_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'education_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'education_list',
			[
				'label'   => __( 'Education List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'equipment_section',
			[
				'label' => __( 'Equipment Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'equipment_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'equipment_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'equipment_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'equipment_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'equipment_list',
			[
				'label'   => __( 'Equipment List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();	

		$this->start_controls_section(
			'ajout_section',
			[
				'label' => __( 'Ajout Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'ajout_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'ajout_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'ajout_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'ajout_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'ajout_list',
			[
				'label'   => __( 'Ajout List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'ajout2_section',
			[
				'label' => __( 'Ajout2 Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'ajout2_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'ajout2_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'ajout2_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'ajout2_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'ajout2_list',
			[
				'label'   => __( 'Ajout2 List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'ajout3_section',
			[
				'label' => __( 'Ajout3 Content', 'keira' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'ajout3_main_title',
			[
				'label' => __( 'Main Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$this->add_control(
			'ajout3_text',
			[
				'label' => __( 'Text', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the text', 'keira' ),
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'ajout3_title',
			[
				'label' => __( 'Title', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the title', 'keira' ),
			]
		);

		$repeater->add_control(
			'ajout3_desc',
			[
				'label' => __( 'Description', 'keira' ),
				'label_block' => true,
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Enter the description', 'keira' ),
			]
		);

		$this->add_control(
			'ajout3_list',
			[
				'label'   => __( 'Ajout3 List', 'keira' ),
				'type'    => \Elementor\Controls_Manager::REPEATER,
				'fields'  => $repeater->get_controls(),
				'default' => [
				],
			]
		);

		$this->end_controls_section();
		

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();
		?>
       
	   <div class="container ">
			<div class="row ">
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info selected text-left r-mb-30">
						<h4 class="maintitle"><?php echo $settings['experience_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['experience_text'] ?></p>
						<div class="res-line"></div>
						<ul class="res-list">
						    <?php foreach ( $settings['experience_list'] as $item ) : ?>
							<li>
							<?php echo $item['experience_title'] ?>
								<p class="separator "><?php echo $item['experience_desc'] ?>
								</p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info text-left r-mb-30">
						<h4 class="maintitle"><?php echo $settings['education_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['education_text'] ?></p>
						
						<ul class="res-list">
						    <?php foreach ( $settings['education_list'] as $item ) : ?>
							<li>
							<?php echo $item['education_title'] ?>
								<p class="separator"><?php echo $item['education_desc'] ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info text-left">
						<h4 class="maintitle"><?php echo $settings['equipment_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['equipment_text'] ?></p>
						
						<ul class="res-list">
						    <?php foreach ( $settings['equipment_list'] as $item ) : ?>
							<li>
							<?php echo $item['equipment_title'] ?>
								<p class="separator"><?php echo $item['equipment_desc'] ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info text-left">
						<h4 class="maintitle"><?php echo $settings['ajout_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['ajout_text'] ?></p>
						
						<ul class="res-list">
						    <?php foreach ( $settings['ajout_list'] as $item ) : ?>
							<li>
							<?php echo $item['ajout_title'] ?>
								<p class="separator"><?php echo $item['ajout_desc'] ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info text-left">
						<h4 class="maintitle"><?php echo $settings['ajout2_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['ajout2_text'] ?></p>
						
						<ul class="res-list">
						    <?php foreach ( $settings['ajout2_list'] as $item ) : ?>
							<li>
							<?php echo $item['ajout2_title'] ?>
								<p class="separator"><?php echo $item['ajout2_desc'] ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 resume-item">
					<div class="resume-info text-left">
						<h4 class="maintitle"><?php echo $settings['ajout3_main_title'] ?></h4>
						<p class="separator"><?php echo $settings['ajout3_text'] ?></p>
						
						<ul class="res-list">
						    <?php foreach ( $settings['ajout3_list'] as $item ) : ?>
							<li>
							<?php echo $item['ajout3_title'] ?>
								<p class="separator"><?php echo $item['ajout3_desc'] ?></p>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

        <?php
	}
	
	
}