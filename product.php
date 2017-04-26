<!DOCTYPE html>
<html>
    <head>
        <title>Gridder.js - Demo</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="http://fonts.googleapis.com/css?family=Armata" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="../dist/css/jquery.gridder.min.css" rel="stylesheet">
        <link href="css/demo.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- FIRST GRIDDER -->
        <div class="container">
            <h1>First example</h1>
            <ul class="gridder gridder-first">
                <?php for ($i = 1; $i < 13; $i++): ?>
                    <?php $random = rand(0, 3); ?>
					
						
						<li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="https://store.storeimages.cdn-apple.com/8749/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=212&hei=293&fmt=png-alpha&qlt=95&.v=1489097365439" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 2"  />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 3"  />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 4" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 5" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 6" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 7" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 8" class="img-responsive" />
                </li><!--
				  --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 9" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 10" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 11" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 12" class="img-responsive" />
                </li>
				
						
						
						
						
                    <?php endfor; ?>
					
						<li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="https://store.storeimages.cdn-apple.com/8749/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone7/model/iphone7-model-select-201703?wid=212&hei=293&fmt=png-alpha&qlt=95&.v=1489097365439" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 2"  />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 3"  />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 4" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 5" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 6" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 7" class="img-responsive" />
                </li><!--
                --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 8" class="img-responsive" />
                </li><!--
				  --><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 9" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 10" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 11" class="img-responsive" />
                </li><!--
				--><li class="gridder-list" data-griddercontent="#first-gridder-content-<?php echo $i; ?>">
                    <img src="http://placehold.it/200x200&text=Item 12" class="img-responsive" />
                </li>
					
            <?php for ($i = 1; $i < 13; $i++): ?>
                <div id="first-gridder-content-<?php echo $i; ?>" class="gridder-content">
                    <div class="row">
                        <div class="col-sm-6">

                            <div id="carousel-<?php echo $i; ?>" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-<?php echo $i; ?>" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-<?php echo $i; ?>" data-slide-to="1"></li>
                                </ol>

							   <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="https://hypebeast.imgix.net/http%3A%2F%2Fhypebeast.com%2Fimage%2F2017%2F03%2Fapple-iphone-7-plus-product-red-2.jpg?fit=max&ixlib=php-1.1.0&q=90&w=1755&s=23f5382bc7dc5df6bdcde629ad3ac372<?php echo $i; ?> | IMAGE 1" class="img-responsive" />
                                        <div class="carousel-caption">
                                            Item 1
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="http://placehold.it/600x600&text=carousel-<?php echo $i; ?> | IMAGE 2" class="img-responsive" />
                                        <div class="carousel-caption">
                                            Item 1
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-<?php echo $i; ?>" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-<?php echo $i; ?>" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-6">
                                  <h2>iPhone 7 (Product Red)</h2>
                        <p><li>ความจุ: 32GB 128GB 256GB 
							<li>น้ำหนัก: 138 กรัม (4.87 ออนซ์)
							<li>จอภาพ Retina HD
							<li>จอภาพไวด์สกรีน แบ็คไลท์แบบ LED 
							<li>ขนาด 4.7 นิ้ว (แนวทแยง)
							<li>จอภาพ Multi-Touch พร้อมเทคโนโลยี IPS
							<li>ความละเอียด 1334 x 750 พิกเซลที่ 326 ppi
							<li>อัตราส่วนคอนทราสต์ 1400:1 (ทั่วไป)
							</p>
							
                        <p><li><b>ชิพ </b>
							<li>A10 Fusion พร้อมสถาปัตยกรรม 64 บิต 
							<li>โปรเซสเซอร์ร่วม M10 สำหรับประมวลผลการเคลื่อนไหวในตัว</p>
							
                        <p><li><b>กล้อง</b> 
							<li>ความละเอียด 12MP 
							<li>รูรับแสงขนาด ƒ/1.8 
							<li>ซูมดิจิตอลได้สูงสุด 5 เท่า</p>
							
						<p><li><b>ภายในกล่อง</b><li>iPhone พร้อม iOS 10
							<li>EarPods พร้อมหัวต่อ Lightning
							<li>Lightning to 3.5 mm Headphone Jack Adapter
							<li>Lightning to USB Cable
							<li>USB Power Adapter
							<li>เอกสารคู่มือ</p>
						<p><li><b>ราคาเริ่มต้นที่ 26,500 บาท</b></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
            
			
			
			
			
      
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="../src/jquery.gridder.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                // Call First Gridder
                $(".gridder-first").gridderExpander({
                    scroll: true,
                    scrollOffset: 30,
                    scrollTo: "panel", // panel or listitem
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "Next",
                    prevText: "Previous",
                    closeText: "Close",
                    onContent: function () {
                        $(".carousel").carousel();
                    }
                });

                // Call Second Gridder
                $(".gridder-second").gridderExpander({
                    scroll: true,
                    scrollOffset: 30,
                    scrollTo: "panel", // panel or listitem
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "Next",
                    prevText: "Previous",
                    closeText: "Close",
                    onContent: function () {
                        $(".carousel").carousel();
                    }
                });

            });
        </script>
    </body>
</html>
