<?php
include_once('../../services/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goody goody</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
    <style>

    </style>
</head>

<body>
    <?php
    include("../../component/navbar.php")
    ?>
    <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-8">
        <div class="palm-container">
            <div class="bg-white p-4 rounded-md">
                <div class="mind-article">
                    <div class="text-center text-2xl font-medium">บทความเกี่ยวกับจิตวิทยา</div>
                    <h3 class="text-lg font-medium mt-2">จิตวิทยาสี กับ การเลือกสีห้องให้อยู่สบาย</h3>
                    <p class="text-gray-500">
                        สีมีอิทธิพลทางจิตวิทยา ที่จะกระตุ้นให้เกิดหรือลดความรู้สึกและอารมณ์ต่างๆได้
                        ดังนั้นความรู้ความเข้าใจในเรื่องจิตวิทยาสีและอารมณ์จะช่วยให้คุณเลือกโทนที่เหมาะสมได้ง่ายขึ้น
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-[8px] md:grid-cols-2 mt-4">
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="http://cdn.home-designing.com/wp-content/uploads/2019/10/red-bedroom-chair.jpg" class="img2">
                        <h3 class="m-topic text-red-500 text-lg mt-2 font-medium">🌹 สีแดง</h3>
                        <div class="text-gray-500">
                            สีแดง ถือเป็นสีแห่งความตื่นเต้น มีชีวิตชีวา ความรัก ความอุดมสมบูรณ์ มั่งคั่ง
                            และยังมีความหมายแฝงในเรื่องของกามารมณ์ ให้ความรู้สึกที่ร้อนแรง มีพลัง
                        </div>
                    </div>

                    <!-- --------------เหลือง--------------- -->
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="https://i.pinimg.com/564x/a7/ea/70/a7ea7053b09b59c1515e68b760a9ae92.jpg">
                        <h3 class="m-topic text-yellow-400 text-lg mt-2 font-medium">🍋 สีเหลือง</h3>
                        <p class="text-gray-500">
                            สีเหลือง ทำให้รู้สึกสดชื่นแจ่มใส เบิกบาน และมีชีวิตชีวา เป็นสีแห่งอำนาจบารมี
                            นอกจากนี้สีเหลืองยังเป็นสีแห่งปัญญา ความรู้ ความคิดสร้างสรรค์ และการมองโลกในแง่ดีอีกด้วย
                        </p>
                    </div>
                    <!-- --------------สีน้ำเงิน--------------- -->
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="http://cdn.home-designing.com/wp-content/uploads/2018/03/marilyn-monroe-kids-room-blue-bedroom-furniture.jpg">
                        <h3 class="m-topic text-blue-500 text-lg mt-2 font-medium">🐳 สีน้ำเงิน</h3>
                        <p class="text-gray-500">
                            สีน้ำเงิน สีที่มีความเชื่อมโยงกับท้องฟ้าและสายน้ำ สื่อถึงความสงบ สุภาพ หนักแน่น และเคร่งขรึม
                            สามารถช่วยให้มีสมาธิและลดความตื่นเต้นได้ มีความสงบและผ่อนคลายมากกว่าสีอื่นๆ
                            นิยมนำไปใช้ในการบำบัดความเครียดหรืออาการนอนไม่หลับ
                        </p>
                    </div>

                    <!-- --------------สีฟ้า--------------- -->
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="https://i.pinimg.com/564x/e9/4d/dd/e94ddd8c814c7b141fe0f12bde294d9f.jpg">
                        <h3 class="m-topic text-cyan-500 text-lg mt-2 font-medium">🌊 สีฟ้า</h3>
                        <p class="text-gray-500">
                            ในทางจิตวิทยาสี สีฟ้า เป็นสีที่ให้ความรู้สึกเป็นอิสระ สงบเยือกเย็น ปลอดภัย
                            และปลอดโปร่งสามารถช่วยลดความกระวนกระวายและกระตุ้นความคิดสร้างสรรค์และสมาธิได้
                        </p>
                    </div>

                    <!-- --------------สีเขียว--------------- -->
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/green-bedroom-ideas-1652736202.jpg?crop=0.624xw:1.00xh;0.190xw,0&resize=980:*">
                        <h3 class="m-topic text-green-500 text-lg mt-2 font-medium">☘️ สีเขียว</h3>
                        <p class="text-gray-500">
                            สีเขียว เป็นสีวรรณะเย็น สีแห่งความเป็นธรรมชาติ สามารถช่วยให้รู้สึกผ่อนคลาย ปลอดภัย
                            ถือเป็นอีกหนึ่งสีที่ใช้ในการผ่อนคลายความเครียด จึงได้รับความนิยมมากที่สุดในการตกแต่งอาคารหรือห้องต่าง ๆ
                            เพื่อทำให้รู้สึกถึงความสุขนั่นเอง
                        </p>
                    </div>

                    <!-- --------------สีม่วง--------------- -->
                    <div class="ph1">
                        <img class="h-auto md:h-[350px] w-full" src="http://cdn.home-designing.com/wp-content/uploads/2018/10/Purple-duvet-cover.jpg">
                        <h3 class="m-topic text-purple-500 text-lg mt-2 font-medium">🫐 สีม่วง</h3>
                        <p class="text-gray-500">
                            สีม่วง ให้อารมณ์ความรู้สึกที่เร้นลับน่าค้นหา และมีเสน่ห์อยู่ในตัว เป็นสีที่ช่วยในการปลอบโยนจิตใจให้สงบ อ่อนโยน
                            และฟื้นกลับมาจากสภาพจิตใจที่ตกต่ำ จะกระตุ้นสมองให้มีความฮึกเหิม
                            แต่ในทางกลับกันก็หมายถึงความเศร้าเสียใจได้เช่นเดียวกัน
                        </p>
                    </div>
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="https://homedecorbliss.com/wp-content/uploads/2019/05/15-1024x846.jpg" class="img2">
                        <h3 class="m-topic  text-orange-500 text-lg mt-2 font-medium">🥕 สีส้ม</h3>
                        <p class="text-gray-500">
                            สีส้ม เป็นสีโทนร้อน ที่มีความอบอุ่น มีชีวิตชีวา ทำให้มีความรู้สึกให้ตื่นตัว
                            สื่อถึงความระมัดระวังและสุขภาพที่ดี ช่วยให้กระตุ้นความอยากอาหารจึงนิยมนำมาใช้กับร้านอาหารหรือแบรนด์อาหาร
                        </p>
                    </div>

                    <!-- --------------สีชมพู--------------- -->
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="http://cdn.home-designing.com/wp-content/uploads/2019/04/grey-and-pink-bedroom.jpg">
                        <h3 class="m-topic  text-pink-500 text-lg mt-2 font-medium">💗 สีชมพู</h3>
                        <p class="text-gray-500">
                            สีชมพู หมายถึงการมีน้ำใจ มีจิตใจดี
                            การมีสีชมพูรายล้อมยังทำให้รู้สึกถึงความปลอดภัย นักจิตวิทยาจึงมักนำสีชมพูมาเพื่อบำบัดผู้ที่มีความรู้สึกอ้างว้างโดดเดี่ยว
                        </p>
                    </div>
                    <!-- --------------สีขาว--------------- -->
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="https://i.pinimg.com/564x/70/37/2b/70372b80cc6caf50b0e206b52b38f389.jpg">
                        <h3 class="m-topic text-gray-300 text-lg mt-2 font-medium">🐇 สีขาว</h3>
                        <p class="text-gray-500">
                            สีขาว เป็นสีแห่งความบริสุทธิ์ เมตตา และอ่อนโยน ในเชิงจิตวิทยาสีให้ความรู้สึกถึงความศรัทธา
                            และความสะอาด ซึ่งเห็นได้จากการชุดสวมใส่ขณะปฏิบัติธรรมและการตกแต่งภายในโรงพยาบาล
                            นอกจากนี้ สีขาวยังสามารถช่วยบรรเทาอารมณ์ต่างๆ จากการวิตกกังวลได้อีกด้วย
                        </p>
                    </div>

                    <!-- --------------สีดำ--------------- -->
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="http://cdn.home-designing.com/wp-content/uploads/2018/09/black-and-gold-bedroom-decor.jpg">
                        <h3 class="m-topic text-lg mt-2 font-medium">🖤 สีดำ</h3>
                        <p class="text-gray-500">
                            สำหรับ สีดำ มีความหมายในเชิงจิตวิทยาสีว่า การควบคุมพลังอำนาจ
                            แต่ในทางกลับกันก็ยังหมายถึงการหมดพลังและอ่อนล้า
                        </p>
                    </div>

                    <!-- --------------สีเทา--------------- -->
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="https://www.storynorth.com/ezoimgfmt/lh5.googleusercontent.com/VTV_eMywudxRo0hC2CiLr4jf1IL4TVzepelDRMPJHqkez_tU-z3oL1ya0dzmPI9pcMcZm9PI1GTGqCcL0s5BI5KCH5EMLOi3vo55_c1Nn-7ejvkVELTSRUg01fxgwV-2C7SLtvnk=s0?ezimgfmt=rs:563x690/rscb1/ng:webp/ngcb1">
                        <h3 class="m-topic text-gray-500 text-lg mt-2 font-medium">🐺 สีเทา</h3>
                        <p class="text-gray-500">
                            สีเทา ให้ความรู้สึกถึงความโศกเศร้า หดหู่ และท้อแท้
                            เนื่องจากเป็นสีกลางระหว่างดำและขาวทำให้มีความสมดุล
                            และสามารถใช้เพื่อดึงดูดความสนใจจากคนในปริมาณมากได้อีกด้วย
                            และยังเป็นสีที่ทำให้รู้สึกถึงความเย็น แต่ควรระมัดระวังการใช้สีเทา โดยใช้คู่กับสีอื่น ๆ
                        </p>
                    </div>

                    <!-- --------------สีน้ำตาล--------------- -->
                    <div class="ph1">
                        <img  class="h-auto md:h-[350px] w-full" src="https://i.pinimg.com/originals/21/91/1b/21911b91e08f10849a21cc8f8c72f164.jpg">
                        <h3 class="m-topic text-stone-500 text-lg mt-2 font-medium">🦇 สีน้ำตาล</h3>
                        <p class="text-gray-500">
                            สีน้ำตาล เป็นสีแห่งความอบอุ่นและการพักผ่อน
                            เป็นสัญลักษณ์ของความแน่วแน่และความอุดมสมบูรณ์เหมือนสีดินและธรรมชาติ
                            โดยมีสีน้ำตาลอ่อนที่หมายถึงความจริง สีน้ำตาลเข้มที่หมายถึงไม้หรือหนัง
                            แต่การใช้สีน้ำตาลเยอะจนเกินไปก็อาจทำให้เกิดความรู้สึกหดหู่ได้
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("../../component/footer.php")
    ?>
</body>

</html>