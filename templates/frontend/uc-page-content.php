<?php $options = get_option('uc_plugin_settings'); ?>

<style>

nav{
    display: none;
}

header{
    display: none;
}

footer{
    display: none;
}


@media (min-width: 768px){
    .col-full {
    margin-left: 0;
    margin-right: 0;
    padding:0;
}
}

</style>

<div style="width: 100%;
height: 100vh;
position: fixed;
top: 0;
z-index: 99;
background-color: black;
background-image: url('<?php echo $options['img']; ?>');
background-position: center;
background-size: cover;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;">

<h1 style="color: white; font-size: 40px;"><?php echo $options['msg']; ?></h1>
<p style="color: white; font-size: 20px; margin: 1em;"><?php echo $options['scnmsg']; ?></p>

</div>