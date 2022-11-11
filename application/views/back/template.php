<?php $this->load->view('back/template/meta');?>
<div id="wrapper">
    <?php $this->load->view('back/template/sidebar');?>
    <?php $this->load->view($xview)?>
</div>
<?php $this->load->view('back/template/logout');?>
<?php $this->load->view('back/template/script');?>