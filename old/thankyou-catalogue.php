<?php include('header.php'); ?>

<div class="">
    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <img src="assets/imgs/Thank-You.webp?ver<?php echo time(); ?>" class="w-100" />
            </div>
        </div>
    </div>
</div>

<div class="thankyou-div">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <a id="lnnk" href='pdf/<?=$_GET['varname'];?>' target="_blank" download>
                    <h4 class="text-center thnak4">" Thank You For Inquiry We Will Reply You Within 24 Hours"</h4>
                    <div class="message"
                        style="display:block;margin:0px 0 100px;text-align:center;color: #000;font-weight: bold;"><img
                            src="assets/imgs/download_gif.gif" class="center-block"
                            style="margin: 0px auto;display: block;">Click Here For Your Requested Catalogue Download
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>